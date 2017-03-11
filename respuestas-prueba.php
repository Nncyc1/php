<?php

include_once 'connection.php';

 class respuesta {
       
          
        private $db;
        private $connection;
       
        function __construct() {
            $this -> db = new DB_Connection();
            $this -> connection = $this->db->getConnection();
        }   
       
        public function does_respuesta_exist($res)
        {
            $query = "INSERT INTO respuestas (respuesta) values ('$res')";
            $inserted = mysqli_query($this -> connection, $query);

                $json['success'] = 'respuesta aceptada su respuesta fue '.$res;
                echo json_encode($json);
                mysqli_close($this->connection);
        }
           
        
       
    }
   
$respuesta = new respuesta();

        if(isset($_POST['respuesta'])) {
            
        $res = $_POST['respuesta'];
                      
        if(!empty($res)){
           
            if($res == ''){
                
            echo json_encode("Usted deberia ingresas alguna respuesta");
            
            
            }else{
  
            $respuesta-> does_respuesta_exist($res);
  
            }    
                     
        }else{
            
            echo json_encode("Usted deberia llenar ambos cuadros");
        }
       
    }
    
    
?>



?>