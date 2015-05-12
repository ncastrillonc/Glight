<?php /* Smarty version Smarty-3.0.9, created on 2015-04-04 21:37:14
         compiled from "C:/xampp/htdocs/glight/templates\editardatos_v2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2548055203d6a941ba5-26654671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3afb535baa0446a94295f5e07e18f70f6f2f4fba' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\editardatos_v2.tpl',
      1 => 1427664240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2548055203d6a941ba5-26654671',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
editarclerks_v2.php?option=actualizar" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr>
                <td>
                    <?php $_smarty_tpl->tpl_vars['aux'] = new Smarty_variable($_smarty_tpl->getVariable('empleado')->value->get('id'), null, null);?>
                    <b>Actualizar un empleado</b><br /><br />
                    <b>Ingrese el id:</b> <input type="text" name="id" value = <?php echo $_smarty_tpl->getVariable('empleado')->value->get('id');?>
 /><br />
                    <b>Ingrese el nombre:</b> <input type="text" name="name" value = <?php echo $_smarty_tpl->getVariable('empleado')->value->get('name');?>
 /><br />
                    <b>Ingrese el salario:</b> <input type="text" name="salary" value = <?php echo $_smarty_tpl->getVariable('empleado')->value->get('salary');?>
 /><br />
                    <b>Ingrese el jefe:</b> <input type="text" name="boss" value = <?php echo $_smarty_tpl->getVariable('empleado')->value->get('boss');?>
 /><br />
                    
                    <input type="hidden" name="auxiliar" value = <?php echo $_smarty_tpl->getVariable('aux')->value;?>
 /><br />
                    <input class="btn btn-primary" type="submit" value="Actualizar" />
                </td>
            </tr>
        </table>
    </form>
</div>
