<?php

include_once 'connection.php';


    class search {
       
        private $db;
        private $connection;
       
        function __construct() {
            $this -> db = new DB_Connection();
            $this -> connection = $this->db->getConnection();
        }
       
        public function does_search_exist($email)
        {
            $query = "Select * from USERS where email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            while($consulta = mysqli_fetch_array($result))
            {
                       
                $id_u = $consulta['id'];
                                             
            }
           
            $query = "select seccion.pregunta,respuestas.Respuesta from seccion inner join respuestas on respuestas.id_seccion=seccion.id";
            
            $result = mysqli_query($this->connection, $query);
            
                                    
            while($consulta = mysqli_fetch_array($result))
            {
                                                             
           $json['success'] =  'su pregunta  '.$consulta['pregunta'].' su respuesta fue '.$consulta['Respuesta'];
                
           echo json_encode($json);
           
          
                                    
                              
            }
            
            mysqli_close($this->connection);
            
        }
        
       
    }
   
   
    $search = new search();
    if(isset($_POST['email'])) 
        
        {
        
        $email = $_POST['email'];
               
        if(!empty($email)){
           
            $search-> does_search_exist($email);
           
        }else{
            echo json_encode("Inserte su usuario para poder buscar");
        }
       
    }
  



?>


