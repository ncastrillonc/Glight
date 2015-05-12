<?php /* Smarty version Smarty-3.0.9, created on 2015-03-18 02:16:51
         compiled from "C:/xampp/htdocs/glight/templates\constructor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284265508d2031fc712-88695042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ec3f2554923421e5d1f5e00fa2f2f5f9d56c41b' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\constructor.tpl',
      1 => 1426641406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284265508d2031fc712-88695042',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
    <head>
    </head>
    <body>
        <div class="square">
            <b>Name : </b> <?php echo $_smarty_tpl->getVariable('clerk')->value->get('name');?>
<br>
            <b>Id : </b> <?php echo $_smarty_tpl->getVariable('clerk')->value->get('id');?>
<br>
            <b>Salary : </b> <?php echo $_smarty_tpl->getVariable('clerk')->value->get('salary');?>
<br>
        </div>
    </body>
</html>