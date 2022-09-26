<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}

$id = $_GET['id'];

$qry = "delete from Users where userid = $id";

if(mysqli_query($db,$qry)){
    header('location: ../HTML/LnadingPage.php');
    ob_end_flush();
}else{
    echo mysqli_error($db);
}

mysqli_close($db);
?>

