<?php

require('configs/include.php');

class c_salario extends super_controller{
    
    public function display(){
        
        @$data->id = 1001;
        $data->name = "Andrew";
        $data->salary = 50000;
        $persona1 = new clerk($data);
        
        @$data->id = 1002;
        $data->name = "Sarah";
        $data->salary = 75000;
        $persona2 = new clerk($data);
        
        @$data->id = 1003;
        $data->name = "Peter";
        $data->salary = 79283;
        $persona3 = new clerk($data);
        
        @$data->id = 1004;
        $data->name = "Thomas";
        $data->salary = 63257;
        $persona4 = new clerk($data);
        
        $grupo = array(1 => $persona1, 2 => $persona2, 3 => $persona3, 4 => $persona4);
        
        $minsalary = clerk::salary_min($grupo);
        $maxsalary = clerk::salary_max($grupo);
        $promsalary = clerk::salary_prom($grupo);
        
        $this->engine->assign('title', 'Salario Empleados');
        $this->engine->assign('clerk1', $persona1);
        $this->engine->assign('clerk2', $persona2);
        $this->engine->assign('clerk3', $persona3);
        $this->engine->assign('clerk4', $persona4);
        $this->engine->assign('minimS', $minsalary);
        $this->engine->assign('mayorS', $maxsalary);
        $this->engine->assign('promS', $promsalary);
        $this->engine->display('header.tpl');
        $this->engine->display('salario.tpl');
        $this->engine->display('footer.tpl');
    }
    public function run(){
        $this->display();
    }
}

$call = new c_salario();
$call->run();
?>