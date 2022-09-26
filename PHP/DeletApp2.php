<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}

$id = $_GET['id'];

$qry2 = "update Appointment set Status ='No' where Appointmentid = $id";
//$qry = "delete from Appointment where Appointmentid = $id";

if(mysqli_query($db,$qry2) /*&& mysqli_query($db,$qry)*/){
    header('location: Request_List_Manager.php');
    ob_end_flush();
}else{
    echo mysqli_error($db);
}

mysqli_close($db);
?>