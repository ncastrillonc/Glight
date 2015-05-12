<?php /* Smarty version Smarty-3.0.9, created on 2015-03-13 17:10:38
         compiled from "C:/xampp/htdocs/glight/templates\conversor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5755030bfed0c772-26964124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d873d9f3eaf26a582a779e949e0bab6847dfbdd' => 
    array (
      0 => 'C:/xampp/htdocs/glight/templates\\conversor.tpl',
      1 => 1426263035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5755030bfed0c772-26964124',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div clase="square">
    <form action="conversor.php" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr><td>
                    <span class="title"><h1>Conversor divisas</h1></span><br/><br/>
                
                <?php if (isset($_smarty_tpl->getVariable('resultado',null,true,false)->value)){?>
                    <b> El resultado es: </b> <?php echo $_smarty_tpl->getVariable('resultado')->value;?>
<br/><br/>
                    <?php }?>
                    <b> Tasa: </b><input type="text" value="<?php echo $_smarty_tpl->getVariable('tg')->value;?>
" name="tasa" id="tasa"/><br/>
                    <b> Cantidad (US): </b><input type="text" value="<?php echo $_smarty_tpl->getVariable('cg')->value;?>
" name="dolares" id="dolares"/><br/>
                    <input type="hidden" name="option" value="conversion"/>
                    </b><input class="btn btn-primary" type="submit" value="Calcular"/>
            </td></tr>
        </table>
    </form>  
</div>