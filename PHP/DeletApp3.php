<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}

$id = $_GET['id'];

//$qry2 = "update Appointment set Status ='No' where Appointmentid = $id";
$qry = "delete from Services where Serviceid = $id";

if(mysqli_query($db,$qry) /*&& mysqli_query($db,$qry)*/){
    header('location: Appo_List.php');
    ob_end_flush();
}else{
    echo mysqli_error($db);
}

mysqli_close($db);
?>