<?php

require('configs/include.php');

class c_jefe_x_conclerks extends super_controller {
    
    /*
     * Inicialmente la bd no permitía elegir un solo boss, entonces los traíamos 
     * todos y los guardabamos en un vector que se recorría para sacar el boss
     * correcto
     */
    
    /*
     * Esta función  muestra todos los clerks a cargo del boss con id = $id_jefe
     */
    
    public function display()
    {
        $id_jefe = 3;
        $pos_boss = -1;
        
        $cod['boss']['id'] = $id_jefe;
        $options['boss']['lvl2']="all";

        $cod['clerk']['boss'] = $id_jefe;
        $options['clerk']['lvl2']="by_boss";

        $components['boss']['clerk']=array("b_c");
        
        @$this->orm->connect();
        @$this->orm->read_data(array("boss","clerk"),$options,$cod);
        @$boss = $this->orm->get_objects("boss",$components);
        
        /*
         * $boss es un vector con todos los boss de la base de datos.
         * Ahora se debe elegir con el que se trabajará
         */
        
        for ($i = 0; $i < count($boss); $i++) {
            if ($boss[$i]->get('id') == $id_jefe) {
                $pos_boss = $i;
            }
        }
        
        $this->engine->assign('boss',$boss[$pos_boss]);
        $this->engine->assign('clerks_a_cargo', count($boss[$pos_boss]->components));
        
        $this->orm->close();
        $this->engine->assign('title','Mostrar Jefe X con clerks a cargo');
        $this->engine->display('header.tpl');
        $this->engine->display('jefe_x_conclerks.tpl');
        $this->engine->display('footer.tpl');
    }

    public function run()
    {
            $this->display();
    }
}

$call = new c_jefe_x_conclerks();
$call->run();

?>