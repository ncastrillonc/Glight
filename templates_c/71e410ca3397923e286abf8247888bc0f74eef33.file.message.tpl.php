<?php /* Smarty version Smarty-3.0.9, created on 2015-03-25 16:26:57
         compiled from "C:/xampp/htdocs/glight/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158765512d3c15c9eb7-01422634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71e410ca3397923e286abf8247888bc0f74eef33' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\message.tpl',
      1 => 1354314638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158765512d3c15c9eb7-01422634',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div>
<div class="alert alert-<?php echo $_smarty_tpl->getVariable('type_warning')->value;?>
">
<strong><?php echo ucfirst($_smarty_tpl->getVariable('type_warning')->value);?>
</strong> <?php echo $_smarty_tpl->getVariable('msg_warning')->value;?>

</div>
</div>
