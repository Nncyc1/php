<?php

include_once 'connection.php';

   
    class pacientes {
       
        private $db;
        private $connection;
       
        function __construct() {
            $this -> db = new DB_Connection();
            $this -> connection = $this->db->getConnection();
        }
       
        public function does_paciente_exist($email,$nuevo,$caso)
        {
            
            if($caso == 'password')
            {
                
            $query = "UPDATE USERS SET password='$nuevo' WHERE email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            
                                    $json['success'] = ' su nueva contraseña es '.$nuevo;
                                    echo json_encode($json);
                                    mysqli_close($this -> connection);             
                              
              }else{
                  if($caso == 'edad')
                  {
                      $query = "UPDATE USERS SET edad='$nuevo' WHERE email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            
                                    $json['success'] = ' su edad se ha actualizado '.$nuevo;
                                    echo json_encode($json);
                                    mysqli_close($this -> connection);    
                  }else{
                      if($caso == 'telefono')
                  {
                      $query = "UPDATE USERS SET telefono='$nuevo' WHERE email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            
                                    $json['success'] = ' su telefono se ha actualizado '.$nuevo;
                                    echo json_encode($json);
                                    mysqli_close($this -> connection);    
                  }else{
                      if($caso == 'sexo')
                  {
                      $query = "UPDATE USERS SET sexo='$nuevo' WHERE email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            
                                    $json['success'] = ' su sexo se ha actualizado '.$nuevo;
                                    echo json_encode($json);
                                    mysqli_close($this -> connection);    
                  }else{
                      if($caso == 'enfermedad')
                  {
                      $query = "UPDATE USERS SET enfermedad='$nuevo' WHERE email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            
                                    $json['success'] = ' su enfermedad se ha actualizado '.$nuevo;
                                    echo json_encode($json);
                                    mysqli_close($this -> connection);    
                  }else{
                      if($caso == 'direccion')
                  {
                      $query = "UPDATE USERS SET direccion='$nuevo' WHERE email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            
                                    $json['success'] = ' su direccion se ha actualizado '.$nuevo;
                                    echo json_encode($json);
                                    mysqli_close($this -> connection);    
                  }else{
                      if($caso == 'sangre')
                  {
                      $query = "UPDATE USERS SET sangre='$nuevo' WHERE email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            
                                    $json['success'] = ' su tipo de sangre se ha actualizado '.$nuevo;
                                    echo json_encode($json);
                                    mysqli_close($this -> connection);    
                  }else{
                      if($caso == 'CI')
                  {
                      $query = "UPDATE USERS SET CI='$nuevo' WHERE email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            
                                    $json['success'] = ' su CI se ha actualizado es '.$nuevo;
                                    echo json_encode($json);
                                    mysqli_close($this -> connection);    
                  }else{
                      $json['error'] = ' caso no probable '; 
                  }
				  }
                  }
                  }
                  }
                  }
                  }
				  }
				  
				  
              
              
    }
    }
   
    $paciente = new pacientes();
    
    if(isset($_POST['nuevo'],$_POST['email'],$_POST['caso'])) {
        
        $nuevo = $_POST['nuevo'];
        $email = $_POST['email'];
        $caso  = $_POST['caso'];      
              
        if(!empty($nuevo) && !empty($email)){
           
            $encrypted_password = md5($nuevo);
            $paciente-> does_paciente_exist($email,$nuevo,$caso);
           
        }else{
            echo json_encode("Usted deberia llenar ambos cuadros");
        }
       
    }
    
    
    
    
    

?>
