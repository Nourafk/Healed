<?php

$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}else{
    $var1 = $_POST['name'];
    $QUERY="select Picture from Manager_Services where MServicesid = '$var1'";
    $RESULT = mysqli_query($db, $QUERY);

    $json_Array = array();

    while ($row = $RESULT->fetch_assoc()) { 
        $json_Array []= $row;
      }
    
      $json = json_encode( $json_Array );
      header("Content-Type: text/plain");
      print $json;
}


?>