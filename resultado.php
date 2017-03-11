

<?php

include_once 'connection.php';
   
    class resultado {
       
        private $db;
        private $connection;
       
        function __construct() {
            $this -> db = new DB_Connection();
            $this -> connection = $this->db->getConnection();
        }
       
        public function does_resultado_exist($uno,$dos,$tres,$cuatro)
        {
            
			
		$query = "insert into RESPUESTAS (uno, dos, tres, cuatro) values ( '$uno','$dos','$tres','$cuatro')";
                
                $inserted = mysqli_query($this -> connection, $query);
               
               
                mysqli_close($this->connection);
           
        }
       
    }
   
   
    $resultado = new resultado();
    if(isset($_POST['uno'],$_POST['dos'],$_POST['tres'],$_POST['cuatro'])) {
        
        $uno = $_POST['uno'];
        $dos = $_POST['dos'];
        $tres = $_POST['tres'];
        $cuatro = $_POST['cuatro'];
               
        if(!empty($uno) && !empty($dos) && !empty($tres) && !empty($cuatro) ){
                    
          $resultado-> does_resultado_exist ($uno,$dos,$tres,$cuatro);
           
        }else{
            echo json_encode("Usted deberia llenar ambos cuadros");
        }
       
    }
    
?>






