<?php /* Smarty version Smarty-3.0.9, created on 2015-03-30 00:01:33
         compiled from "C:/xampp/htdocs/glight/templates\c_jefe_x_conclerks_v2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207965518763d7d6261-71037368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '966fd6af9ae537e4a38d098dd982ccd2e90da18c' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\c_jefe_x_conclerks_v2.tpl',
      1 => 1427294803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207965518763d7d6261-71037368',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <table border="0" width="100%" cellpadding="0" cellspacing="10">
        <tr>
            <td>
                <b>Personas a Cargo del jefe: <?php echo $_smarty_tpl->getVariable('boss')->value->get('name');?>
 - con id: <?php echo $_smarty_tpl->getVariable('boss')->value->get('id');?>
</b><br>
            </td>
        </tr>
        <?php if ($_smarty_tpl->getVariable('clerks_a_cargo')->value!=0){?>
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('boss')->value->components['clerk']['b_c']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                <tr>
                    <td>
                        <b>Id:</b> <?php echo $_smarty_tpl->getVariable('boss')->value->components['clerk']['b_c'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('id');?>
<br />
                        <b>Nombre:</b> <?php echo $_smarty_tpl->getVariable('boss')->value->components['clerk']['b_c'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('name');?>
<br />
                        <b>Salario:</b> <?php echo $_smarty_tpl->getVariable('boss')->value->components['clerk']['b_c'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('salary');?>

                    </td>
                </tr>
            <?php endfor; endif; ?>
        <?php }?>
    </table>
</div>