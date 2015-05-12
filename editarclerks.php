<?php

// 1 problema: no recoge el id viejo

require('configs/include.php');

class c_editarclerks extends super_controller {
    
    public function actualizar()
    {        
        $id_old = $this->post->auxiliar;
        $clerk = new clerk($this->post);
                
        if(is_empty($clerk->get('id')))
        {
            throw_exception("Debe ingresar un id");
        }       
        
        @$clerk->auxiliars['id_old'] = $id_old;
        
        $this->orm->connect();
        $this->orm->update_data("normal",$clerk);
        $this->orm->close();         
        
        $this->type_warning = "success";
        $this->msg_warning = "Persona actualizada correctamente";
        
        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning',$this->type_warning);
        $this->engine->assign('msg_warning',$this->msg_warning);
    }
    
    public function buscar()
    {
        $clerk = new clerk($this->post);
        
        if(is_empty($clerk->get('id')))
        {
            throw_exception("Debe ingresar un id");
        } else {
            
            $this->orm->connect();

            $cod['clerk']['id'] = $_POST['id'];
            $options['clerk']['lvl2']="by_ide";
            $this->orm->read_data(array("clerk"),$options,$cod);
            $clerk = $this->orm->get_objects("clerk");
            
            $this->orm->close();
            $this->engine->assign('empleado', $clerk[0]);   
        }
    }

    public function display()
    {
        $clerk = new clerk($this->post);
        
        $this->engine->assign('title','Editar Clerks');
        $this->engine->display('header.tpl');
        $this->engine->display($this->temp_aux);
        
        if(is_empty($clerk->get('id')) || !is_empty($clerk->get('name'))){
            $this->engine->display('buscarid.tpl');
        } else{
            $this->engine->display('editardatos.tpl');
        }        
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

$call = new c_editarclerks();
$call->run();

?>
