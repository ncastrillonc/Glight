<div class="square">
    <form action="{$gvar.l_global}editarclerks_v2.php?option=actualizar" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr>
                <td>
                    {$aux = $empleado->get('id')}
                    <b>Actualizar un empleado</b><br /><br />
                    <b>Ingrese el id:</b> <input type="text" name="id" value = {$empleado->get('id')} /><br />
                    <b>Ingrese el nombre:</b> <input type="text" name="name" value = {$empleado->get('name')} /><br />
                    <b>Ingrese el salario:</b> <input type="text" name="salary" value = {$empleado->get('salary')} /><br />
                    <b>Ingrese el jefe:</b> <input type="text" name="boss" value = {$empleado->get('boss')} /><br />
                    
                    <input type="hidden" name="auxiliar" value = {$aux} /><br />
                    <input class="btn btn-primary" type="submit" value="Actualizar" />
                </td>
            </tr>
        </table>
    </form>
</div>
