<?php

require('configs/include.php');

class c_jefesconclerksacargo extends super_controller {

    public function display()
    {
        $options['boss']['lvl2']="all";
        $options['clerk']['lvl2']="all";

        $components['boss']['clerk']=array("b_c");
        
        @$this->orm->connect();
        @$this->orm->read_data(array("boss","clerk"),$options);
                
        @$boss = $this->orm->get_objects("boss",$components);
        $this->orm->close();
        
        $this->engine->assign('boss',$boss);

        $this->engine->assign('title','Mostrar Jefes con Clerks a cargo');
        $this->engine->display('header.tpl');
        $this->engine->display('jefesconclerksacargo.tpl');
        $this->engine->display('footer.tpl');
    }

    public function run()
    {
        $this->display();
    }
}

$call = new c_jefesconclerksacargo();
$call->run();

?>