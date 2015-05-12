<?php
    class clerk extends object_standard {
        
        //attribute variables
        protected $id;
        protected $name;
        protected $salary;
        protected $boss;

        //components
        var $components = array();

        //auxiliars for primary key and for files
        var $auxiliars = array();

        //data about the attributes
        public function metadata() {
            return array("id" => array(), "name" => array(), "salary" => array(),
            "boss" => array("foreign_name" => "b_c", "foreign" => "boss", "foreign_attribute" => "id"));
	}

        /*public function metadata() {
            return array("id" => array(), "name" => array(), "salary" => array());
        }*/

        public function primary_key() {
            return array("id");
        }

        public function relational_keys($class, $rel_name) {
            switch($class) 
            {
                case "boss":
                    switch($rel_name) {
                        case "b_c":
                            return array("boss");
                            break;
                    }
                    break;
                default:
                    break;
            }
	}
        
        /*public function relational_keys($class, $rel_name) {
            switch($class) {
                default:
                break;
            }
        }*/
        
        public static function salary_max($personas) {
            
            $mayor = $personas[1];
            
            for ($i = 2; $i <= 4; $i++) {
                if ($personas[$i]->get("salary") > $mayor->get("salary")) {
                    $mayor = $personas[$i];
                }
            }
            return $mayor;
        }
        
        public static function salary_min($personas) {
            
            $mini = $personas[1];
            
            for ($i = 2; $i <= 4; $i++) {
                if ($personas[$i]->get("salary") < $mini->get("salary")) {
                    $mini = $personas[$i];
                }
            }
            return $mini;
        }
        
        public static function salary_prom($personas) {
            
            $sum = 0;
            for ($i = 1; $i <= 4; $i++){ $sum = $sum + $personas[$i]->get("salary");}
            
            return $sum / 4;
        }
    }
?>