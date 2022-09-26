<?php 
ob_start();
session_start();

$db = mysqli_connect("localhost" , "root" ,"","healed");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> New Appointment Request </title>
    <link rel = "stylesheet" type = "text/css" href ="../HTML/mystyle.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.svg">
    <title>Healed</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../HTML/Header and Footer.css">
    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>

    <style>
        header .navbar  a{
  
  color:black ; 
 
}
    </style>
</head>

<body class="Noura">

   <!-- header section starts  -->

<header>

    <a href="#" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <ul class="nav-list">
            <li  ><a href="../HTML/Home Pet Owner.php">Home</a>
              <ul class="sub-menu" id="sub-menu-arrow"> 
                <li > <a href="Add_New_Pet.php">Add a New Pet</a></li>
                <li><a href="Pet_List.php">View Pet List</a></li>
                <li><a href="Request_List_Pet_Owner.php">View Requests List</a></li>

                <li><a href="upcoming and previous pet owner.php">View Appointments List</a> </li>
        
              </ul>
            </li>
          
            
           <li><a href="Services Pet Owner.php">Services</a></li> 
           <li><a href="../HTML/About us PetOwner.php">About Us</a></li> 
            <li><a href="Contact Clinic.php">Contact Us</a></li>
            <li class="move-right-btn" ><a href="#"id="profile"><?php if(isset($_SESSION['Profile_Pic'])){ ?> <img height="50rem" src="Contentttt/<?php echo $_SESSION['Profile_Pic']; ?>" class="profile-pic">  <?php } else { ?> <i class="fa-solid fa-user" ></i>  <?php } ?></a>
                <ul class="sub-menu" id="sub-menu-arrow2"> 
                    <li ><a href="Pet owner profile.php">View Profile</a></li>
                    <li><a href="../HTML/LnadingPage.php">Sign Out</a></li>
            
                   

                  </ul></li>
          </ul>
        
        <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->


    </nav>

</header>

<!-- header section ends -->
<section class="requestbg">
<div class = "part1">
    <div class="title"> New Appointment Request </div>
       <form method="post" action="Add_Appointment.php">
          <div class ="appointment-details"> 

            <div class = "input-box">
                <lable class = "details"> Pet <br>
                    <select  required name= "petname" class = "field1" value="Choose" >
                        <option value="" selected hidden>Choose a pet</option>
<?php   
$PETOWNER=$_SESSION['Userrid'];
$qry = "select Pet_Name,Petid from PETT where Userid=$PETOWNER";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
?>
                        <option value=<?php echo $row['Petid'] ?> > <?php echo $row['Pet_Name'] ?> </option>
                       <!-- <option value="brock"> Brock </option>
                        <option> Myla </option>
                        <option> cava </option>
                        <option> Kiwi </option>
                        <option> Oreo </option>
                        <option> Mellow </option>
                        <option> lolly </option>




                        <option >  </option>-->
                        <?php 

}
}
?>
                        </select>
                </lable>
            </div>

            <div class = "input-box">
                <lable class = "details"> Note <br>
                    <textarea name= "note" class = "field2"> </textarea>
                       
                </lable>
            </div>

            <div class = "input-box">
                <lable class = "details"> Service <br>
                    <select  required name= "service" class = "field1">
                        <option value="" selected hidden>Choose a service</option>
                        <?php   

$qry = "select Service_NAME,MServicesid from Manager_Services";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
?>

                        <option value=<?php echo $row['MServicesid'] ?> > <?php echo $row['Service_NAME'] ?> </option>
                      <!--  <option > Dentistry</option>
                        <option > Boarding</option>-->
                        <?php 

}
}
?>
                        </select>
                </lable>
            </div>

            <div class = "input-box">
                <lable class = "details"> Time <br>
                <select  required name="TIME" class = "field1">
                        <option value="" selected hidden>Choose a Time</option>
                        <?php   

$qry = "select DISTINCT Time from Services";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
?>

                        <option value=<?php echo $row['Time'] ?> > <?php echo $row['Time'] ?> </option>

                        <?php 

}
}
?>
                        </select>
                  <!--  <input  required type="time" name="TIME">-->
             </lable></div>


            <div class = "input-box" >
                <lable class = "details"> Date <br>
                <select  required name="DATE" class = "field1">
                        <option value="" selected hidden>Choose a Date</option>
                        <?php   

$qry = "select DISTINCT Date from Services";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
?>

                        <option value=<?php echo $row['Date'] ?> > <?php echo $row['Date'] ?> </option>

                        <?php 

}
}
?>
                        </select>
               <!--    <input  required type="date" name="DATE">-->
            </lable>
            </div>
    

           </div>
        
           <div class="button1">
            <input type = "submit"  value ="Send" class="button" style=" font-size:250% ; position: absolute; 
            left:35%; bottom: -15%; ">
             <img class = "back2" src ="../images/girl1.svg">
            </div>
            <div>
                <a href="Appo_List.php">
                <input type = "button"  value ="Back" class="button" style=" font-size:250% ; position: absolute; 
            left:55%; bottom: -15%; ">
                </a>
            </div>
          
</form>
<br> <br><br> <br> 
<br><br><br><br><br><br><br><br>
</div>







</section>
<!-- Footer section starts -->
<div class="footer">
    <div class="box-container">
        <div class="box" id="footeraboutus">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
                Nulla quis sem at nibh elementumn.</p>
                
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="../HTML/Home Pet Owner.php">Home</a>
            <a href="Services_Manager.php">Services</a>
            <a href="../HTML/About us PetOwner.php">About US</a>
            <a href="Contact Pet Owner.php">Contact Us</a>
                
        </div>
        <div class="box">
            <h3>Find Us</h3>
            <div class="info">
                <i class="fa-brands fa-facebook-f"></i>
                 <a href="#">Facebook</a>
            </div>
            <div class="info">
                
                <i class="fab fa-instagram"></i>
                            <a href="#">Instagram</a>
            </div>
            <div class="info">

                <i class="fa-brands fa-twitter"></i>
                            <a href="#">Twitter</a>
            </div>
                
        </div>
        <div class="box">
            <h3>Contact Information</h3>
            <div class="info">
                <i class="fas fa-phone"></i>
                <p>+123-456-789 <br> +111-222-3333</p>
            </div>
                <div class="info">
                    <i class="fas fa-envelope"></i>
                    <p>healedpetclinic@gmail.com<br>healedpetclinic@gmail.com</p>
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Riyadh, Saudi Arabia - 13315</p>
                </div>
                
        </div>
        
    </div>
    <h1 class="credit">&copy; copyright @ 2022 by KSU Engineers</h1>
</div>



<!--Footer section ends-->

   
</body>

</html>


<?php    


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
       die( "<p>Could not connect to database</p>" );

    if ( !mysqli_select_db( $database, "healed") )
       die( "<p>Could not open URL database</p>" );

     //  $result = $_POST['petname'];
     //  $result_explode = explode('|', $result);
     //  $PetName=$result_explode[0];
       $PETID=$_POST['petname'];
       //$PetName = $_POST['petname'];
       $QUERY="select Pet_Name from PETT where Petid= $PETID";
       $RESULT = mysqli_query($database, $QUERY);
       

      
   
       $Service = $_POST['service'];
       $Date = $_POST['DATE'];
       $Note = $_POST['note'];
       $Time = $_POST['TIME'];

       $QUERY2="select Service_NAME from Manager_Services where MServicesid= $Service";
     if($RESULT2 = mysqli_query($db, $QUERY2)){

       while ($row2 = $RESULT2->fetch_assoc()) { 
           $PicName2 = $row2['Service_NAME'];
    
    while ($row = $RESULT->fetch_assoc()) { 
        $PetName = $row['Pet_Name'];
    $query="INSERT INTO Appointment (Pet_name,Service,Date,Note,Time,Status,PETid ,SERVICEID) VALUES ('".$PetName."','". $PicName2."','".$Date."','".$Note."','".$Time."','".''."', $PETID,$Service);";}}


    $result=mysqli_query($database, $query);

    if($result){
        header("location: Request_List_Pet_Owner.php");
ob_end_flush();}
    else{
        echo "An error occured while inserting into the Appointment table.";}
}
mysqli_close($db);

}

   

?>