<?php

require('configs/include.php');

class c_get_set extends super_controller{
    
    public function display(){
        $data->id = "1001";
        $data->name = "Andrew";
        $data->salary = 50000;

        $clerk = new clerk($data);

        $this->engine->assign('clerk', $clerk);
        $this->engine->assign('title', 'Class Get Set');
        $this->engine->display('header.tpl');
        $this->engine->display('get_set.tpl');
        $this->engine->display('footer.tpl');
    }
    public function run(){
        $this->display();
    }
}

$call = new c_get_set();
$call->run();
?>