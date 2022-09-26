<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}

$id = $_GET['id'];

$qry = "update Appointment set Status ='Done' where Appointmentid = $id";

//$qry2 = "select * from Appointment where Appointmentid = $id ";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
        $PetName = $row['Pet_name'];
        $Service = $row['Service'];
        $Date = $row['Date'];
        $Note = $row['Note'];
        $Time = $row['Time'];
        $status=$row['Status'];
       // $query3="INSERT INTO MPreviousAppointments (PET_NAME,SERVICES,DATE,NOTE,TIME,STATUS) VALUES ('".$PetName."','".$Service."','".$Date."','".$Note."','".$Time."','".$status."');";
       // $result=mysqli_query($db, $query3);
       // $query4="INSERT INTO UPreviousAppointments (PET_NAME,SERVICES,DATE,NOTE,TIME,STATUS) VALUES ('".$PetName."','".$Service."','".$Date."','".$Note."','".$Time."','". $status."');";
       // $result2=mysqli_query($db, $query4);

}

}

if(mysqli_query($db,$qry)){
    header('location:upcoming and previous manager.php');
    ob_end_flush();
}else{
    echo mysqli_error($db);
}

mysqli_close($db);
?>