<?php

require('configs/include.php');

class c_prueba extends super_controller {

    public function add()
    {
        $clerk = new clerk($this->post);
        print_r2($this->post);
        // ---------------------------------------------------------------------------------------
        
        $nueva_dir = "C:/xampp/htdocs/glight/images/";
        $nueva_ruta = $nueva_dir . basename($_FILES["namefile"]["name"]);
        $imageFileType = pathinfo($nueva_ruta,PATHINFO_EXTENSION);
                
        // Check if image file is a actual image or fake image
        
        // Allow certain file formats
        if(! ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
        || $imageFileType == "gif" )) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        
        $ruta_temporal = $_FILES['namefile']['tmp_name'];
        
        move_uploaded_file($ruta_temporal,  $nueva_ruta);
                
        // ---------------------------------------------------------------------------------------
        
        if(is_empty($clerk->get('id')))
        {
            throw_exception("Debe ingresar un id");
        }
		
        $this->orm->connect();
        $this->orm->insert_data("normal",$clerk);
        
        $this->orm->close();
        
        $this->type_warning = "success";
        $this->msg_warning = "Persona agregada correctamente";
        
        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning',$this->type_warning);
        $this->engine->assign('msg_warning',$this->msg_warning);
    }

    public function display()
    {
        $this->engine->assign('title','Insertar Clerks');
        $this->engine->display('header.tpl');
        $this->engine->display($this->temp_aux);
        $this->engine->display('prueba.tpl');
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

$call = new c_prueba();
$call->run();

?>
