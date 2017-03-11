<?php

 $host = 'localhost'; 
 $user = 'root'; 
 $pass = ''; 
 $db = 'test2'; 
 
 $con = mysqli_connect($host,$user,$pass,$db); 
 
 if(!$con) {
     
     die("Error ".mysqli_connect_error()); 
     
 } 
 
 $sql = "select * from seccion"; 
 $res = mysqli_query($con,$sql); 
 $response = array(); 
 
 while($row=mysqli_fetch_array($res)) {
     
    array_push($response,array('pregunta'=>$row['pregunta']));
        
 } 
 
 echo json_encode(array('result'=>$response)); 
 
      mysqli_close($con);  

?>﻿
    
