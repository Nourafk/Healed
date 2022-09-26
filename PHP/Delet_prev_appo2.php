<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}

$id = $_GET['id'];

$qry = "update Appointment set Status ='Complete' where Appointmentid = $id ";
if(mysqli_query($db,$qry)){
    header('location: upcoming and previous pet owner.php');
    ob_end_flush();
}else{
    echo mysqli_error($db);
}

mysqli_close($db);
?>