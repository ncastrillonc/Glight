<?php
// Holi!! Lo logréeee
// 1 problema: no recoge el id viejo

require('configs/include.php');

class c_editarclerks_v2 extends super_controller {
    
    public function actualizar()
    {     
        function verificarID($objeto, $oldID, $identificacion)
        {
            $objeto->orm->connect();

            $cod['clerk']['id'] = $identificacion;
            $options['clerk']['lvl2']="count_by_ide";
            $objeto->orm->read_data(array("clerk"),$options,$cod);
            
            $resultado = $objeto->orm->data;
            $contador = $resultado['clerk'][0];
            
            $objeto->orm->close();
        
            if($contador->contador ==  1 && $oldID != $identificacion)
            {
                return 1;
            } else {
                return 0;
            }
        }
        
        function verificarBoss($objeto, $jefe)
        {
            $objeto->orm->connect();

            $cod['boss']['id'] = $jefe;
            $options['boss']['lvl2']="count_by_id";
            $objeto->orm->read_data(array("boss"),$options,$cod);
            
            $resultado = $objeto->orm->data;
            $contador = $resultado['boss'][0];
                        
            $objeto->orm->close();
        
            if($contador->aux ==  1)
            {
                return 0;
            } else {
                return 1;
            }
        }
        
        $clerk = new clerk($this->post);
        
        if(is_empty($clerk->get('id')))
        { 
            throw_exception("Debe ingresar un id"); 
        }  
        
        $id_old = $this->post->auxiliar;
        @$clerk->auxiliars['id_old'] = $id_old;
        
        if(verificarID($this, $id_old, $clerk->get('id')) == 1)
        { 
            throw_exception("El clerk con id " . $clerk->get('id') . " ya se encuentra registrado"); 
        }
        
        if(is_empty($clerk->get('boss')))
        { 
            throw_exception("Debe ingresar un jefe"); 
        }    
        else if(verificarBoss($this, $clerk->get('boss')) == 1)
        { 
            throw_exception("El Jefe con id " . $clerk->get('boss') . " no existe");
        }
        
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
        function hallarID($objeto, $Ide)
        {
            $objeto->orm->connect();

            $cod['clerk']['id'] = $Ide;
            $options['clerk']['lvl2']="count_by_ide";
            $objeto->orm->read_data(array("clerk"),$options,$cod);
            
            $resultado = $objeto->orm->data;
            $contador = $resultado['clerk'][0];
            
            $objeto->orm->close();
        
            if($contador->contador ==  1)
            {
                return 1;
            } else {
                return 0;
            }
        }
        
        $clerk = new clerk($this->post);
        
        if(is_empty($clerk->get('id')))
        {
            throw_exception("Debe ingresar un id");
        }
        else if(hallarID($this, $clerk->get('id')) == 0)
        {
            throw_exception("El Clerk con id = " . $clerk->get('id') . " no existe");
        }
        else
        {
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
            $this->engine->display('buscarid_v2.tpl');
        } else{
            if(!is_empty($this->orm->objects_to_return)){
                $this->engine->display('editardatos_v2.tpl');
            } else{
                $this->engine->display('buscarid_v2.tpl');
            }
            
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

$call = new c_editarclerks_v2();
$call->run();

?>
