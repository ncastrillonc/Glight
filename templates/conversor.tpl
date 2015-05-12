<div clase="square">
    <form action="conversor.php" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr><td>
                    <span class="title"><h1>Conversor divisas</h1></span><br/><br/>
                
                {if isset($resultado)}
                    <b> El resultado es: </b> {$resultado}<br/><br/>
                    {/if}
                    <b> Tasa: </b><input type="text" value="{$tg}" name="tasa" id="tasa"/><br/>
                    <b> Cantidad (US): </b><input type="text" value="{$cg}" name="dolares" id="dolares"/><br/>
                    <input type="hidden" name="option" value="conversion"/>
                    </b><input class="btn btn-primary" type="submit" value="Calcular"/>
            </td></tr>
        </table>
    </form>  
</div>