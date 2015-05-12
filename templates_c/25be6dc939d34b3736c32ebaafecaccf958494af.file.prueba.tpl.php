<?php /* Smarty version Smarty-3.0.9, created on 2015-03-30 22:19:44
         compiled from "C:/xampp/htdocs/glight/templates\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171605519afe0d040f5-13810686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25be6dc939d34b3736c32ebaafecaccf958494af' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\prueba.tpl',
      1 => 1427746306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171605519afe0d040f5-13810686',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
prueba.php?option=add" method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr>
                <td>
                    <b>Agregar un Clerk</b><br /><br />
                    <b>Ingrese el nombre:</b> <input type="file" name="namefile"/><br />
                    <b>Ingrese el id:</b> <input type="text" name="id" /><br />
                    <b>Ingrese el salario:</b> <input type="text" name="salary" /><br />
                    <b>Ingrese el jefe:</b> <input type="text" name="boss" /><br />
                    <input class="btn btn-primary" type="submit" value="Registrar" />
                </td>
            </tr>
        </table>
    </form>
</div>
