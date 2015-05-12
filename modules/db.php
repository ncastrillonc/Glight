<?php

/**
 * Project:     Framework G - G Light
 * File:        db.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2013-02-07
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

class db
{
    var $server = C_DB_SERVER; //DB server
    var $user = C_DB_USER; //DB user
    var $pass = C_DB_PASS; //DB password
    var $db = C_DB_DATABASE_NAME; //DB database name
    var $limit = C_DB_LIMIT; //DB limit of elements by page
    var $cn;
    var $numpages;
	
	public function db(){}
	
	//connect to database
	public function connect()
	{
            $this->cn = mysqli_connect($this->server, $this->user, $this->pass);
            if(!$this->cn) {die("Failed connection to the database: ".mysqli_error($this->cn));}
            if(!mysqli_select_db($this->cn,$this->db)) {die("Unable to communicate with the database $db: ".mysqli_error($this->cn));}
            mysqli_query($this->cn,"SET NAMES utf8");
	}
	
	//function for doing multiple queries
	public function do_operation($operation, $class = NULL)
	{
            $result = mysqli_query($this->cn, $operation) ;
            if(!$result) {$this->throw_sql_exception($class);}	
	}
	
	//function for obtain data from db in object form
	private function get_data($operation)
	{		
            $data = array(); 
            $result = mysqli_query($this->cn, $operation) or die(mysqli_error($this->cn));
            while ($row = mysqli_fetch_object($result))
            {
                    array_push($data, $row);
            }
            return $data;
	}
	
	//throw exception to web document
	private function throw_sql_exception($class)
        {
            $errno = mysqli_errno($this->cn); $error = mysqli_error($this->cn);
            $msg = $error."<br /><br /><b>Error number:</b> ".$errno;
            throw new Exception($msg);
        }
	
	//for avoid sql injections, this functions cleans the variables
	private function escape_string(&$data)
	{
            if(is_object($data))
            {
                foreach ($data->metadata() as $key => $attribute)
                {if(!is_empty($data->get($key))){$data->set($key,mysqli_real_escape_string($this->cn,$data->get($key)));}}
            }
            else if(is_array($data))
            {
                foreach ($data as $key => $value) 
                {if(!is_array($value)){$data[$key]=mysqli_real_escape_string($this->cn,$value);}}
            }
	}
	
	//function for add data to db
	public function insert($options,$object) 
	{
            switch($options['lvl1'])
            {																																																																																													
                case "user":
                switch($options['lvl2'])
                {
                    case "normal":
                        //
                        break;
                }
                break;
                case "camilo":
                switch($options['lvl2'])
                {
                    case "normal":
                        //
                        break;
                }
                break;
            
                case "clerk":
                switch($options['lvl2'])
                {
                    case "normal":
                        $id=mysqli_real_escape_string($this->cn,$object->get('id'));
                        $name=mysqli_real_escape_string($this->cn,$object->get('name'));
                        $salary=mysqli_real_escape_string($this->cn, ($object->get('salary')));
                        $boss=mysqli_real_escape_string($this->cn,$object->get('boss'));
                        $this->do_operation("INSERT INTO clerk (id, name, salary, boss) VALUES ('$id', '$name', '$salary', '$boss');");
                        break;
                }
                break;
                
                case "granjero":
                switch($options['lvl2'])
                {
                    case "normal":
                        $id=mysqli_real_escape_string($this->cn,$object->get('id'));
                        $nombre=mysqli_real_escape_string($this->cn,$object->get('nombre'));
                        $edad=mysqli_real_escape_string($this->cn, ($object->get('edad')));
                        $sexo=mysqli_real_escape_string($this->cn,$object->get('sexo'));
                        
                        $this->do_operation("INSERT INTO granjero VALUES ('$id', '$nombre', '$edad', '$sexo');");
                        break;
                }
                break;
            
                case "finca":
                switch($options['lvl2'])
                {
                    case "normal":
                        $id=mysqli_real_escape_string($this->cn,$object->get('id'));
                        $nombre=mysqli_real_escape_string($this->cn,$object->get('nombre'));
                        $vp=mysqli_real_escape_string($this->cn, ($object->get('valor_propiedad')));
                        $cv=mysqli_real_escape_string($this->cn,$object->get('cantidad_vacas'));
                        $cg=mysqli_real_escape_string($this->cn,$object->get('cantidad_gallinas'));
                        $granjero=mysqli_real_escape_string($this->cn,$object->get('granjero'));
                        
                        $this->do_operation("INSERT INTO finca VALUES ('$id', '$nombre', '$vp', '$cv', '$cg', '$granjero');");
                        
                        break;
                }
                break;
            
                default: break;
            }
	}
	
	//function for edit data from db
	public function update($options,$object) 
	{
            switch($options['lvl1'])
            {																																																																																																		
                case "user":
                switch($options['lvl2'])
                {
                    case "normal":
                        //
                        break;
                }
                break;
                
                case "clerk":
                switch($options['lvl2'])
                {
                    case "normal":
                        @$id_old = mysqli_real_escape_string($this->cn,$object->auxiliars['id_old']);
                        
                        $id_new = mysqli_real_escape_string($this->cn,$object->get('id'));
                        $name_new = mysqli_real_escape_string($this->cn,$object->get('name'));
                        $salary_new = mysqli_real_escape_string($this->cn, ($object->get('salary')));
                        $boss_new = mysqli_real_escape_string($this->cn,$object->get('boss'));
                        
                        $this->do_operation("UPDATE clerk SET id = '$id_new', name = '$name_new', "
                                . "salary = '$salary_new', boss = '$boss_new' WHERE id = '$id_old';");
                        break;
                }
                break;
            
                default: break;
            }
	}
	
	//function for delete data from db
	public function delete($options,$object)
	{
            switch($options['lvl1'])
            {																																																																																												
                case "user":
                switch($options['lvl2'])
                {
                    case "normal": 
                        //
                        break;
                }
                break;
                
                case "clerk":
                switch($options['lvl2'])
                {
                    case "normal":
                        $id=mysqli_real_escape_string($this->cn,$object->get('id'));
                        $this->do_operation("DELETE FROM clerk WHERE id = '$id';");
                        break;
                }
                break;
            
                case "finca":
                switch($options['lvl2'])
                {
                    case "normal":
                        $id=mysqli_real_escape_string($this->cn,$object->get('id'));
                        $this->do_operation("DELETE FROM finca WHERE id = '$id';");
                        break;
                }
                break;
            
                default: break;			  
            }
	}
	
	//function that returns an array with data from a operation
	public function select($option,$data)
	{
            $info = array();
            switch($option['lvl1'])
            {																																																																																																										
                case "user":
                switch($option['lvl2'])
                {
                    case "all": 
                        //
                        break;
                }

                break;

                case "clerk":
                    switch($option['lvl2'])
                    {
                        case "all" :
                            $info=$this->get_data("SELECT * FROM clerk;");
                            break;
                        case "by_boss":	
                            $boss=mysqli_real_escape_string($this->cn,$data['boss']);
                            $info=$this->get_data("SELECT * FROM clerk WHERE boss='$boss';");
                            break;
                        case "by_ide":	
                            $ide=mysqli_real_escape_string($this->cn,$data['id']);                            
                            $info=$this->get_data("SELECT * FROM clerk WHERE id='$ide';");
                            break;
                        case "count_by_ide":	
                            $ide=mysqli_real_escape_string($this->cn,$data['id']);                            
                            $info=$this->get_data("SELECT COUNT(*) AS contador FROM clerk WHERE id='$ide';");
                            break;
                    }
                break;

                case "boss":
                    switch($option['lvl2'])
                    {
                        case "all" :
                            $info=$this->get_data("SELECT * FROM boss;"); break;
                        case "one":	
                            $id=mysqli_real_escape_string($this->cn,$data['id']);
                            $info=$this->get_data("SELECT * FROM boss WHERE id='$id';");
                            break;
                        case "count_by_id":	
                            $id=mysqli_real_escape_string($this->cn,$data['id']); 
                            
                            $a = $id + 7;
                        
                            $info=$this->get_data("SELECT COUNT(*) AS aux FROM boss WHERE id='$id';");
                            break;
                    }
                break;
                
                case "granjero":
                    switch($option['lvl2'])
                    {
                        case "all" :
                            $info=$this->get_data("SELECT * FROM granjero;"); break;
                        case "by_nombre_id" :
                            $info=$this->get_data("SELECT id, nombre FROM granjero;"); break;
                        case "count_by_id":	
                            $ide=mysqli_real_escape_string($this->cn,$data['id']);                            
                            $info=$this->get_data("SELECT COUNT(*) AS contador FROM granjero WHERE id='$ide';");
                            break;
                        case "by_id":	
                            $id=mysqli_real_escape_string($this->cn,$data['id']);
                            $info=$this->get_data("SELECT * FROM granjero WHERE id='$id';");
                            break;
                    }
                break;
            
                case "finca":
                    switch($option['lvl2'])
                    {
                        case "all" :
                            $info=$this->get_data("SELECT * FROM finca;"); break;
                        case "by_id":	
                            $id=mysqli_real_escape_string($this->cn,$data['id']);
                            $info=$this->get_data("SELECT * FROM finca WHERE id='$id';");
                            break;
                        
                        // lolololol
                        case "count_by_id":	
                            $iden=mysqli_real_escape_string($this->cn,$data['id']);                            
                            $info=$this->get_data("SELECT COUNT(*) AS contador FROM finca WHERE id='$iden';");
                            break;
                        // lalalalla
                        
                        case "by_granjero":	
                            $granjero=mysqli_real_escape_string($this->cn,$data['granjero']);
                            $info=$this->get_data("SELECT * FROM finca WHERE granjero='$granjero';");
                            break;
                        case "galvac":	
                            $gal=mysqli_real_escape_string($this->cn,$data['cantidad_gallinas']);
                            $vac=mysqli_real_escape_string($this->cn,$data['cantidad_vacas']);
                            
                            $info=$this->get_data("SELECT * FROM finca "
                                    . "WHERE cantidad_gallinas > '$gal' "
                                    . "AND cantidad_vacas < '$vac';");
                            break;
                    }
                break;
            
                default: break;
            }
            return $info;
	}
	
	//close the db connection
	public function close()
	{
            if($this->cn){mysqli_close($this->cn);}
	}
	
}
//Este es desde mi branch :3
?>
