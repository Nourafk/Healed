<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}

$id = $_GET['id'];

$qry = "delete from PETT where Petid = $id";

if(mysqli_query($db,$qry)){
    header('location:Pet_List.php');
    ob_end_flush();
}else{
    echo mysqli_error($db);
}

mysqli_close($db);
?>