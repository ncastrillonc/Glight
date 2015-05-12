<?php /* Smarty version Smarty-3.0.9, created on 2015-03-18 03:20:29
         compiled from "C:/xampp/htdocs/glight/templates\salario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245415508e0ed34fa69-54996984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c0f88b6a581bc2efb52fedd5ad74199472836fd' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\salario.tpl',
      1 => 1426645226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245415508e0ed34fa69-54996984',
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
            <b>Name : </b> <?php echo $_smarty_tpl->getVariable('clerk1')->value->get('name');?>
<br>
            <b>Id : </b> <?php echo $_smarty_tpl->getVariable('clerk1')->value->get('id');?>
<br>
            <b>Salary : </b> <?php echo $_smarty_tpl->getVariable('clerk1')->value->get('salary');?>
<br><br>
            <b>Name : </b> <?php echo $_smarty_tpl->getVariable('clerk2')->value->get('name');?>
<br>
            <b>Id : </b> <?php echo $_smarty_tpl->getVariable('clerk2')->value->get('id');?>
<br>
            <b>Salary : </b> <?php echo $_smarty_tpl->getVariable('clerk2')->value->get('salary');?>
<br><br>
            <b>Name : </b> <?php echo $_smarty_tpl->getVariable('clerk3')->value->get('name');?>
<br>
            <b>Id : </b> <?php echo $_smarty_tpl->getVariable('clerk3')->value->get('id');?>
<br>
            <b>Salary : </b> <?php echo $_smarty_tpl->getVariable('clerk3')->value->get('salary');?>
<br><br>
            <b>Name : </b> <?php echo $_smarty_tpl->getVariable('clerk4')->value->get('name');?>
<br>
            <b>Id : </b> <?php echo $_smarty_tpl->getVariable('clerk4')->value->get('id');?>
<br>
            <b>Salary : </b> <?php echo $_smarty_tpl->getVariable('clerk4')->value->get('salary');?>
<br><br>
            
            <b>------------------------------------- </b><br>
            <b>Menor Salario : </b><br>
            <b>Id : </b> <?php echo $_smarty_tpl->getVariable('minimS')->value->get('id');?>
<br>
            <b>------------------------------------- </b><br>
            <b>Mayor Salario : </b><br>
            <b>Id : </b> <?php echo $_smarty_tpl->getVariable('mayorS')->value->get('id');?>
<br>
            <b>------------------------------------- </b><br>
            <b>Promedio Salario : </b><br>
            <b>Valor : </b> <?php echo $_smarty_tpl->getVariable('promS')->value;?>
<br>
        </div>
    </body>
</html>