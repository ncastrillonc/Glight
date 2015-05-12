<?php

require('configs/include.php');

class c_conversor extends super_controller{
    
        public function conversion(){
            
                if(is_numeric($this->post->tasa)){
                    if(!is_numeric($this->post->dolares)){
                        $this->engine->assign ('tg', $this->post->tasa);
                        $this->engine->assign ('resultado', 'Cantidad no numerica');
                    } else{
                        $this->engine->assign ('resultado', $this->post->tasa * $this->post->dolares); 
                    }
                } else{
                    if(!is_numeric($this->post->dolares)){
                        $this->engine->assign ('resultado', 'Valores no numericos');
                    } else{
                        $this->engine->assign ('cg', $this->post->dolares);
                        $this->engine->assign ('resultado', 'Tasa no numerica');
                    }                    
                }
        }
        public function display(){
                $this->engine->assign('title', 'Conversor');
                $this->engine->display('header.tpl');
                $this->engine->display('conversor.tpl');
                $this->engine->display('footer.tpl');
        }
        public function run(){
                if(isset($this->post->option)){
                $this->{$this->post->option}();
                }
                $this->display();
        }
}

$call = new c_conversor();
$call->run();
?>