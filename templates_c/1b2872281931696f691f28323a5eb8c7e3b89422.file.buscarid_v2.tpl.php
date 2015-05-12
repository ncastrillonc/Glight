<?php /* Smarty version Smarty-3.0.9, created on 2015-04-04 21:37:11
         compiled from "C:/xampp/htdocs/glight/templates\buscarid_v2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1719555203d6719f338-47100564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b2872281931696f691f28323a5eb8c7e3b89422' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\buscarid_v2.tpl',
      1 => 1427664238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1719555203d6719f338-47100564',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
editarclerks_v2.php?option=buscar" method="post">
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
