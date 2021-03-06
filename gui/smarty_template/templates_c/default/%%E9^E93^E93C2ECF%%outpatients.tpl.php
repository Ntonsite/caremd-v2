<?php /* Smarty version 2.6.22, created on 2021-05-23 15:22:04
         compiled from ambulatory/outpatients.tpl */ ?>

<?php echo $this->_tpl_vars['sWarningPrompt']; ?>


<style type="text/css">
    .mimHover{
        border:1px solid blue; padding:2px 10px 2px 10px; font-weight:bold; text-transform:upper; background:#ccc;
    }

    .mimHover:hover{
        background:#fff;
    }
    .bold{font-weight:bold;}
</style>
<div style="width:100%; padding:3px; text-align:center; background:lime; border-bottom:5px solid white;" class="adm_item">
    <input type='button' value="Refresh Patient List" name = 'btn' class="mimHover" onclick="window.location.href = '<?php echo $this->_tpl_vars['sReloadBtn']; ?>
'" >

    <input type="button" value="Un Discharge Patient" class="mimHover" onClick="showDischargedPatients()">
</div>

<form method = "post" action = "" name ="discharge_form" onSubmit =" return confSubmit(this)">
    <table cellspacing="0" cellpadding="0" width="100%">
        <tbody>
            <tr valign="top">
                <td>
                    <?php if ($this->_tpl_vars['bShowPatientsList']): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ambulatory/outpatients_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                    <div style="width:100%; padding:3px; text-align:center; background:lime; border-top:5px solid white;" class="adm_item">
                        
                        <input type='button' value="Refresh Patient List" name = 'btn' class="mimHover" onclick="window.location.href = '<?php echo $this->_tpl_vars['sReloadBtn']; ?>
'" >
                        <input type="button" value="Un Discharge Patient" class="mimHover" onClick="showDischargedPatients()">
                    </div>
                    <p>
                        <?php echo $this->_tpl_vars['showDiagnosis']; ?>

                    <p>
                        <?php echo $this->_tpl_vars['showLabs']; ?>

                    <p>
                        <?php echo $this->_tpl_vars['showPrescr']; ?>

                    <p>
                        <?php echo $this->_tpl_vars['showRadio']; ?>

                    <p align = "right">
                        <?php echo $this->_tpl_vars['LDSelectOutpatients']; ?>
 | <?php echo $this->_tpl_vars['LDUnSelectOutpatients']; ?>

                    <p align="right">
                        <?php echo $this->_tpl_vars['sDischargeSelected']; ?>

                    <p align="left">
                        <?php echo $this->_tpl_vars['pbClose']; ?>

                </td>
                <td align="right">
                    <?php echo $this->_tpl_vars['sSubMenuBlock']; ?>

                </td>
            </tr>
        </tbody>
    </table>
</form>


