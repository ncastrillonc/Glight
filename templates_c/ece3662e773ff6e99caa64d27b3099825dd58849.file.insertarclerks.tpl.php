<?php /* Smarty version Smarty-3.0.9, created on 2015-03-29 23:21:33
         compiled from "C:/xampp/htdocs/glight/templates\insertarclerks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:694455186cdd1fd6c0-56197323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece3662e773ff6e99caa64d27b3099825dd58849' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\insertarclerks.tpl',
      1 => 1427664053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '694455186cdd1fd6c0-56197323',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
insertarclerks.php?option=add" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr>
                <td>
                    <b>Agregar un Clerk</b><br /><br />
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
