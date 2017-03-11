<?php

include_once 'connection.php';

 class encuesta {
       
          
        private $db;
        private $connection;
       
        function __construct() {
            $this -> db = new DB_Connection();
            $this -> connection = $this->db->getConnection();
        }   
       
        public function does_encuesta_exist($pregunta)
        {
            $query = "INSERT INTO seccion (pregunta) values ('$pregunta')";
            $inserted = mysqli_query($this -> connection, $query);

                $json['success'] = 'Pregunta creada '.$pregunta;
                echo json_encode($json);
                mysqli_close($this->connection);
        }
           
        
       
    }
   
$encuesta = new encuesta();

        if(isset($_POST['pregunta'])) {
            
        $pregunta = $_POST['pregunta'];
               
        if(!empty($pregunta)){
           
            if($pregunta == ''){
                
            echo json_encode("Usted deberia llenar ambos cuadros");
            
            
            }else{
  
            $encuesta-> does_encuesta_exist($pregunta);
  
            }    
                     
        }else{
            
            echo json_encode("Usted deberia llenar ambos cuadros");
        }
       
    }
    
    
?>