<?php

require('configs/include.php');

    /*
     * Aquí la bd si permite elegir un solo boss, entonces se omite el vector 
     * usado en jefe_x_conclerks
     */

class c_jefe_x_conclerks_v2 extends super_controller {
    
    /*
     * Esta función  muestra todos los clerks a cargo del boss con id = $id_jefe
     */
    public function display()
    {	
        $id_jefe = 3;
        
        $cod['boss']['id'] = $id_jefe;
        $options['boss']['lvl2']="one";

        $cod['clerk']['boss'] = $id_jefe;
        $options['clerk']['lvl2']="by_boss";

        $components['boss']['clerk']=array("b_c");
        
        @$this->orm->connect();
        @$this->orm->read_data(array("boss","clerk"),$options,$cod);
        @$boss = $this->orm->get_objects("boss",$components);
        $this->engine->assign('clerks_a_cargo', count($this->orm->get_data("clerk",0)));
        
        $this->orm->close();
        
        $this->engine->assign('boss',$boss[0]);
        $this->engine->assign('title','Mostrar Jefe X con clerks a cargo');
        $this->engine->display('header.tpl');
        $this->engine->display('c_jefe_x_conclerks_v2.tpl');
        $this->engine->display('footer.tpl');
    }

    public function run()
    {
            $this->display();
    }
}

$call = new c_jefe_x_conclerks_v2();
$call->run();

?>