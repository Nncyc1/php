

<?php

include_once 'connection.php';
   
    class pacientes {
       
        private $db;
        private $connection;
       
        function __construct() {
            
            $this -> db = new DB_Connection();
            $this -> connection = $this->db->getConnection();
        }
       
        public function does_paciente_exist($email,$password)
        {
            $query = "Select * from USERS where email='$email' and password = '$password' ";
            $result = mysqli_query($this->connection, $query);
                       
            if(mysqli_num_rows($result)>0){
                                {
                                    $json['success'] = ' Bienvenido '.$email;
                                    echo json_encode($json);
                                    mysqli_close($this -> connection);
                                   
                                }
                              
            }else{
                $query = "insert into PACIENTES (email, password) values ( '$email','$password')";
                $inserted = mysqli_query($this -> connection, $query);
                if($inserted == 1 ){
                    $json['success'] = ' Cuenta creada con exito';
                }else{ 
                    $json['error'] = ' La clave es incorrecta';
                    }
                echo json_encode($json);
                mysqli_close($this->connection);
            }
           
        }
       
    }
   
   
    $paciente = new pacientes();
    if(isset($_POST['email'],$_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
       
        if(!empty($email) && !empty($password)){
           
            $encrypted_password = md5($password);
            $paciente-> does_paciente_exist($email,$password);
           
        }else{
            echo json_encode("Usted deberia llenar ambos cuadros");
        }
       
    }
    
    
    
    
    

?>






