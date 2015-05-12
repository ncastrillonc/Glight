<?php /* Smarty version Smarty-3.0.9, created on 2015-03-29 23:29:37
         compiled from "C:/xampp/htdocs/glight/templates\editardatos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2737855186ec1889df1-62928371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e765bf10a442ea09a2bb8ee8a6f9b816455e9c8' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\editardatos.tpl',
      1 => 1427664378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2737855186ec1889df1-62928371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
editarclerks.php?option=actualizar" method="post">
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
