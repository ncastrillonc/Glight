<?php /* Smarty version Smarty-3.0.9, created on 2015-03-29 23:49:18
         compiled from "C:/xampp/htdocs/glight/templates\eliminarclerks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132725518735e0a0957-72573520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3e12e341b1f3871a3cff3c70e73f55fcef38eb5' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\eliminarclerks.tpl',
      1 => 1427665751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132725518735e0a0957-72573520',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
eliminarclerks.php?option=sub" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr>
                <td>
                    <b>Ingrese el id del Clerk:</b> <input type="text" name="id" /><br />
                    <input class="btn btn-primary" type="submit" value="Eliminar" />
                </td>
            </tr>
        </table>
    </form>
</div>
