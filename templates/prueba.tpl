<div class="square">
    <form action="{$gvar.l_global}prueba.php?option=add" method="post" enctype="multipart/form-data">
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
