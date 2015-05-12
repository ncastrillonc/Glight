<html>
    <head>
    </head>
    <body>
        <div class="square">
            <b>Name : </b> {$clerk1->get('name')}<br>
            <b>Id : </b> {$clerk1->get('id')}<br>
            <b>Salary : </b> {$clerk1->get('salary')}<br><br>
            <b>Name : </b> {$clerk2->get('name')}<br>
            <b>Id : </b> {$clerk2->get('id')}<br>
            <b>Salary : </b> {$clerk2->get('salary')}<br><br>
            <b>Name : </b> {$clerk3->get('name')}<br>
            <b>Id : </b> {$clerk3->get('id')}<br>
            <b>Salary : </b> {$clerk3->get('salary')}<br><br>
            <b>Name : </b> {$clerk4->get('name')}<br>
            <b>Id : </b> {$clerk4->get('id')}<br>
            <b>Salary : </b> {$clerk4->get('salary')}<br><br>
            
            <b>------------------------------------- </b><br>
            <b>Menor Salario : </b><br>
            <b>Id : </b> {$minimS->get('id')}<br>
            <b>------------------------------------- </b><br>
            <b>Mayor Salario : </b><br>
            <b>Id : </b> {$mayorS->get('id')}<br>
            <b>------------------------------------- </b><br>
            <b>Promedio Salario : </b><br>
            <b>Valor : </b> {$promS}<br>
        </div>
    </body>
</html>