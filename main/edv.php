<?php

require './roots.php';
require $root_path . 'include/inc_environment_global.php';

require_once $root_path . 'include/inc_environment_global.php';
header('Location:' . $root_path . 'modules/system_admin/edv.php?sid=' . $sid . '&lang=' . $lang);
exit;
?>
