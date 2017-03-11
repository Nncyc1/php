<?php

include_once 'connection.php';
$db = new DB_Connection();
$con = $db->getConnection();
 $sql = "select * from seccion";
 $res = mysqli_query($con,$sql);
 $response = array();

 while($row=mysqli_fetch_array($res)) {

    array_push($response,array('pregunta'=>$row['pregunta']));

 }

 echo json_encode(array('result'=>$response));

      mysqli_close($con);

?>﻿
