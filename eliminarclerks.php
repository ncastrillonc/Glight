<?php

require('configs/include.php');

class c_eliminarclerks extends super_controller {

    public function sub()
    {
        $clerk = new clerk($this->post);
        if(is_empty($clerk->get('id')))
        {
            throw_exception("Debe ingresar un id");
        }
		
        $this->orm->connect();
        $this->orm->delete_data("normal",$clerk);
        $this->orm->close();
        
        $this->type_warning = "success";
        $this->msg_warning = "Clerk eliminado correctamente";
        
        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning',$this->type_warning);
        $this->engine->assign('msg_warning',$this->msg_warning);
    }

    public function display()
    {
        $this->engine->assign('title','Eliminar Clerks');
        $this->engine->display('header.tpl');
        $this->engine->display($this->temp_aux);
        $this->engine->display('eliminarclerks.tpl');
        $this->engine->display('footer.tpl');
    }
    
    public function run()
    {
        try {
            if (isset($this->get->option))
            {
                $this->{$this->get->option}();
            }
        }
        catch (Exception $e) 
        {
            $this->error=1; $this->msg_warning=$e->getMessage();
            $this->engine->assign('type_warning',$this->type_warning);
            $this->engine->assign('msg_warning',$this->msg_warning);
            $this->temp_aux = 'message.tpl';
        }    
        $this->display();
    }
}

$call = new c_eliminarclerks();
$call->run();

?>
