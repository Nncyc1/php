<?php

include_once 'connection.php';
   
    class pacientes {
       
        private $db;
        private $connection;
       
        function __construct() {
            $this -> db = new DB_Connection();
            $this -> connection = $this->db->getConnection();
        }                                  

          public function does_paciente_exist($email,$password,$edad,$telefono,$sexo,$id_enfermedad,$direccion,$sangre,$CI)
    {
     $query = "insert into USERS (email, password, edad, telefono, sexo, id_enfermedad, direccion, sangre, CI) values ('$email','$password','$edad','$telefono','$sexo','$id_enfermedad','$direccion','$sangre','$CI')";
    
     $inserted = mysqli_query($this -> connection, $query);

     $json['success'] = 'Bienvenido/a '.$email;

     echo json_encode($json);
     mysqli_close($this->connection);
    }
    }
   
   
    $pacientes = new pacientes();
    if(isset($_POST['email'],$_POST['password'],$_POST['edad'],$_POST['telefono'],$_POST['sexo'],$_POST['id_enfermedad'],$_POST['direccion'],$_POST['sangre'],$_POST['CI'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $edad = $_POST['edad'];
        $telefono = $_POST['telefono'];
        $sexo = $_POST['sexo'];
        $id_enfermedad = $_POST['id_enfermedad'];
        $direccion = $_POST['direccion'];
        $sangre = $_POST['sangre'];
        $CI = $_POST['CI'];
        
        if(!empty($email) && !empty($password) && !empty($edad) && !empty($telefono) && !empty($sexo) && !empty($id_enfermedad) && !empty($direccion) && !empty($sangre) && !empty($CI)){
        
        
         
            $encrypted_password = md5($password);
            $pacientes-> does_paciente_exist($email,$password,$edad,$telefono,$sexo,$id_enfermedad,$direccion,$sangre,$CI);
           
        }else{
            echo json_encode("Usted debe llenar todos los requisitos");
            
        }
       
    }
                    
 
    
?>