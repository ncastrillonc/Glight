<?php /* Smarty version Smarty-3.0.9, created on 2015-03-29 23:29:32
         compiled from "C:/xampp/htdocs/glight/templates\buscarid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3225355186ebcf1fdc5-92380765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7e507a88ada2ac0d52d3d12088de9faa047b6b0' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\buscarid.tpl',
      1 => 1427664340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3225355186ebcf1fdc5-92380765',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
editarclerks.php?option=buscar" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr>
                <td>
                    <b>Ingrese el id del Clerk:</b> <input type="text" name="id" /><br />
                    <input class="btn btn-primary" type="submit" value="Buscar" />
                </td>
            </tr>
        </table>
    </form>
</div>
