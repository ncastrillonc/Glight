<div class="square">
    <table border="0" width="100%" cellpadding="0" cellspacing="10">
        <tr>
            <td>
                <b>Personas a Cargo del jefe: {$boss->get('name')} - con id: {$boss->get('id')}</b><br>
            </td>
        </tr>
        {if $clerks_a_cargo neq 0}
            {section loop= $boss->components['clerk']['b_c'] name=i}
            <tr>
                <td>
                    <b>Id:</b> {$boss->components['clerk']['b_c'][i]->get('id')}<br />
                    <b>Nombre:</b> {$boss->components['clerk']['b_c'][i]->get('name')}<br />
                    <b>Salario:</b> {$boss->components['clerk']['b_c'][i]->get('salary')}
                </td>
            </tr>
            {/section}
        {/if}
    </table>
</div>