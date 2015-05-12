<?php /* Smarty version Smarty-3.0.9, created on 2015-03-29 23:14:20
         compiled from "C:/xampp/htdocs/glight/templates\insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:674055186b2c8a4f21-67300203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37430454d002f558f6e5c26a6572aa90dec1508e' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\insert.tpl',
      1 => 1427663656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '674055186b2c8a4f21-67300203',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
insert.php?option=add" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr>
                <td>
                    <b>Agregar un empleado</b><br /><br />
                    <b>Ingrese el nombre:</b> <input type="text" name="name" /><br />
                    <b>Ingrese el id:</b> <input type="text" name="id" /><br />
                    <b>Ingrese el salario:</b> <input type="text" name="salary" /><br />
                    <b>Ingrese el jefe:</b> <input type="text" name="boss" /><br />
                    <input class="btn btn-primary" type="submit" value="Registrar" />
                </td>
            </tr>
        </table>
    </form>
</div>
