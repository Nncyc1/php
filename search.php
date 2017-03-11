<?php

include_once 'connection.php';

    class pacientes {
       
        private $db;
        private $connection;
       
        function __construct() {
            $this -> db = new DB_Connection();
            $this -> connection = $this->db->getConnection();
        }
       
        public function does_paciente_exist($email)
        {
            $query = "Select * from USERS where email='$email'";
            $result = mysqli_query($this->connection, $query);
                       
            while($consulta = mysqli_fetch_array($result))
            {
                       
                $json['success'] = ' sus datos son '.$consulta['email'].' '.$consulta['password'].' '.$consulta['edad'].' '.$consulta['telefono'].' '.$consulta['sexo'].' '.$consulta['id_enfermedad'].' '.$consulta['direccion'].' '.$consulta['sangre'].' '.$consulta['CI'];
                    
                 echo json_encode($json);
        
            }
           
        }
       
    }
   
   
    $paciente = new pacientes();
    if(isset($_POST['email'])) 
        
        {
        
        $email = $_POST['email'];
               
        if(!empty($email)){
           
            $paciente-> does_paciente_exist($email);
           
        }else{
            echo json_encode("Inserte su usuario para poder buscar");
        }
       
    }
  




?>