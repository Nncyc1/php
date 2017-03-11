<?php

include_once 'connection.php';

 class respuesta {
       
          
        private $db;
        private $connection;
       
        function __construct() {
            $this -> db = new DB_Connection();
            $this -> connection = $this->db->getConnection();
        }   
       
        public function does_respuesta_exist($email,$id_p,$res)
        {
        
			
			$query = "Select * from USERS where email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            while($consulta = mysqli_fetch_array($result))
            {
                       
                $id_u = $consulta['id'];
				 $json['success'] = ' sus datos son '.$consulta['email'];
        
            }
		
		
		
			$query = "INSERT INTO respuestas (id_users, id_seccion, respuesta) values ('$id_u','$id_p','$res')";
            $inserted = mysqli_query($this -> connection, $query);

                $json['success'] = 'respuesta aceptada su respuesta fue '.$res;
                echo json_encode($json);
                mysqli_close($this->connection);
        }
           
        
       
    }
   
$respuesta = new respuesta();

        if(isset($_POST['id_seccion'],$_POST['email'],$_POST['respuesta'])) {
            
        $res = $_POST['respuesta'];
        $email = $_POST['email'];
        $id_p = $_POST['id_seccion'];
               
        if(!empty($res) && !empty($email) && !empty($id_p)){
           
            if($res == ''){
                
            echo json_encode("Usted deberia ingresas alguna respuesta");
            
            
            }else{
  
            $respuesta-> does_respuesta_exist($email,$id_p,$res);
  
            }    
                     
        }else{
            
            echo json_encode("Usted deberia llenar ambos cuadros");
        }
       
    }
    
    
?>



?>