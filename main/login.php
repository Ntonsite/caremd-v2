<?php

?>

<script>

    function createCookie(name, value, days) {
        var expires;
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
    }

    createCookie("PageName", "Home", "10");

</script>

<?php

// Initialize the session and destray all the previous session
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

$_SESSION['sess_login_userid'] = '';
$_SESSION['sess_login_username'] = '';
$_SESSION['sess_login_pw'] = '';
$_SESSION['sess_login_expired'] = '';

//error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
require './roots.php';
require $root_path . 'include/inc_environment_global.php';
/**
 * CARE2X Integrated Hospital Information System Deployment 2.1 - 2004-10-02
 * GNU General Public License
 * Copyright 2002,2003,2004,2005 Elpidio Latorilla
 * elpidio@care2x.org,
 *
 * See the file "copy_notice.txt" for the licence notice
 */
define('LANG_FILE', 'stdpass.php');
define('NO_2LEVEL_CHK', 1);
require_once $root_path . 'include/inc_front_chain_lang.php';
// reset all 2nd level lock cookies
require $root_path . 'include/inc_2level_reset.php';

$fileforward = $root_path . 'modules/news/start_page.php' . URL_REDIRECT_APPEND;

$loginSQL = "SELECT value from care_config_global WHERE type = 'start_index_page'";
$loginResult = $db->Execute($loginSQL);
if (@$loginResult && $loginResult->RecordCount()) {
    $loginRow = $loginResult->fetchRow();
    $loginURL = $loginRow['value'];
}
if (@$loginURL && $loginURL == "registration") {
    $fileforward = $root_path . 'modules/registration_admission/patient_register_search.php' . URL_REDIRECT_APPEND;
    ?>
    <script>
        createCookie("PageName", "Registration", "10");
    </script>
    <?php
}

$thisfile = 'login.php';
// $breakfile = 'startframe.php' . URL_APPEND;

if (!isset($pass)) {
    $pass = '';
}
if (!isset($keyword)) {
    $keyword = '';
}
if (!isset($userid)) {
    $userid = '';
}
$_SESSION['sess_login_userid'] = '';
$_SESSION['sess_login_username'] = '';
$_SESSION['sess_login_pw'] = '';
if (!isset($_SESSION['sess_login_userid'])) {
    $_SESSION['sess_login_userid'];
}
if (!isset($_SESSION['sess_login_username'])) {
    $_SESSION['sess_login_username'];
}
if (!isset($_SESSION['sess_login_pw'])) {
    $_SESSION['sess_login_pw'];
}

# load config options
include_once $root_path . 'include/care_api_classes/class_multi.php';
$multi = new multi;

$vct = $multi->__genNumbers();

function logentry($userid, $key, $report) {
    $logpath = 'logs/access/' . date('Y') . '/';
    if (file_exists($logpath)) {
        $logpath = $logpath . date('Y_m_d') . '.log';
        $file = fopen($logpath, 'a');
        if ($file) {
            if ($userid == '') {
                $userid = 'blank';
            }
            $line = date('Y-m-d H:i:s') . ' ' . 'Main Login: ' . $report . '  Username=' . $userid . '  UserID=' . $key;
            fputs($file, $line);
            fputs($file, "\r\n");
            fclose($file);
        }
    }
}

if ((($pass == 'check') && ($keyword != '')) && ($userid != '')) {
    include_once $root_path . 'include/care_api_classes/class_access.php';
    $user = new Access($userid, $keyword);

    if ($user->isKnown() && $user->hasValidPassword()) {
        if ($user->isNotLocked()) {
            $_SESSION['sess_login_userid'] = $user->LoginName();
            $_SESSION['sess_login_username'] = $user->Name();
            # Init the crypt object, encrypt the password, and store in cookie
            $enc_login = new Crypt_HCEMD5($key_login, makeRand());

            $cipherpw = $enc_login->encodeMimeSelfRand($keyword);

            $_SESSION['sess_login_pw'] = $cipherpw;

            # Set the login flag
            setcookie('ck_login_logged' . $sid, 'true', 0, '/');

            if ($vct[10] > 0) {
                $numb = (int) $multi->__read_Password_Expiring();

                $d1 = date('m/d/Y', strtotime($user->user['modify_time']));
                $d2 = date('m/d/Y');

                $vv = $multi->dateDiff($d1, $d2);

                if ($vv > $numb) {
                    $fileforward = '../modules/myintranet/my-passw-change.php?sid=&ntid=false&lang=en';

                    logentry($user->Name(), $user->LoginName(), $REMOTE_ADDR . " OK'd", "", "");
                    header("location: $fileforward");
                    $_SESSION['sess_login_userid'] = '';
                    $_SESSION['sess_login_username'] = '';
                    $_SESSION['sess_login_pw'] = '';
                    $_SESSION['sess_login_expired'] = 1;
                    exit;
                }
            }

            logentry($user->Name(), $user->LoginName(), $REMOTE_ADDR . " OK'd", "", "");
            header("location: $fileforward");
            exit;
        } else {
            $passtag = 3;
        }
    } else {
        $passtag = 1;
    }
}

$errbuf = 'Log in';
$minimal = 1;
require $root_path . 'include/inc_passcheck_head.php';
?>

<?php echo setCharSet(); ?>

<?php require $root_path . 'include/inc_passcheck_mask.php'?>


<footer class="footer">
    <div class="container">
    <span class="text-muted">
<?php require $root_path . 'include/inc_load_copyrite.php';?>


    </span>
    </div>
</footer>


<BODY style="background-image: url('https://www.iamexpat.de/sites/default/files/styles/article--full/public/general-practitioners-gps-germany.jpg?itok=j8OikpEM'); background-repeat: no-repeat; background-size: cover;" onLoad="<?php if (isset($is_logged_out) && $is_logged_out) {
    echo "window.parent.STARTPAGE.location.href='indexframe.php?sid=$sid&lang=$lang';";
}
?>document.passwindow.userid.focus();" bgcolor=<?php echo $cfg['body_bgcolor']; ?>
    <?php if (!$cfg['dhtml']) {
        echo ' link=' . $cfg['idx_txtcolor'] . ' alink=' . $cfg['body_alink'] . ' vlink=' . $cfg['idx_txtcolor'];
    }?>>
&nbsp;
<p>
    <?php
    if (isset($is_logged_out) && $is_logged_out) {
        echo '<div align="center"><FONT  FACE="Arial" SIZE=+4 ><b>' . $LDLoggedOut . '</b></FONT><p><font size=4>' . $LDNewLogin . ':</font></p></div>';
    }
    ?>
<p>
