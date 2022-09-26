
<?php 
ob_start();
session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

die('error in db'. mysqli_error($db));
}else{
 $id = $_GET['id'];
  
 $qry = "select * from Appointment,Manager_Services where Appointment.SERVICEID = Manager_Services.MServicesid and Appointmentid = $id ";
 $run = $db -> query($qry);
    if(!empty($run->num_rows) && ($run->num_rows > 0)){
        while($row = $run -> fetch_assoc()){
            $PetName = $row['Pet_name'];
            $Service = $row['Service'];
            $Date = $row['Date'];
            $Time = $row['Time'];
            $PIC= $row['Picture'];
    }
}

}

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../images/logo.svg">
    <title>Appointment Details  </title>
    <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="../HTML/Header and Footer.css">
     <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/3473b55fc1.js" crossorigin="anonymous"></script>
   <style> 
header .navbar  a{
  
  color:black ; 
 
}
</style>
</head>
<body>   <!-- header section starts  -->

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
  <form action="#" method="post">
<section class="AppointmentSec">
     <div class="PageBase">
<div class="PageRows">

<h3 class="Heading" style="font-size: 3rem;">Appointment Details</h3>
<h1 class="Heading" style="font-size: 1.7rem;">Pet Name: <span style="color: gray;"><?php echo $PetName;?></span> </h1>
<form action="#">
  <div class= "ServiceSelect">
   <lable class = "LablM"> Service <br>
      <input style="color: gray;" type="text" class = "fieldselect" value="<?php echo $Service ;?>" >
   </lable>
     
  </div>
  <div class="circle2">
   <div id="circle2">
   <img src="Contentttt/<?php echo $PIC;?>" style=" border-radius: 50%; width: 140px;height: 140px;margin-left: 200px;float: left;">
     </div>
  </div>

</div>
<div class="PageRows">

   
     <div class= "DateSelect" >
   <lable class = "LablM">Date <br>
      <input style="color: gray;" type="text" id="dateS" value="<?php echo  $Date ;?>" >
     </lable>
     </div>

 
  <div class="TimeSelect" >
   <lable class = "LablM"> Time <br>
     <input style="color: gray;" type="text" id="timeS" value="<?php echo  $Time;?>" >
     </lable>
    
  </div>

     
     
   
   </div>
   <div class="BackButtonDetails">
    <button name="BACK"><a class="button">Back</a></button>
      </div>
    </div>
   
</form>
<div class="GirlDogimg"><img src="../HTML/girl and dog.svg" width="300px"></div>
</form>
</section>

<!-- Footer secton starts -->
<div class="footer">
   <div class="box-container">
       <div class="box" id="footeraboutus">
           <h3>About Us</h3>
           <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
               
       </div>
       <div class="box">
           <h3>Quick links</h3>
           <a href="#">Home</a>
           <a href="#">Services</a>
           <a href="#">About US</a>
           <a href="#">Contact Us</a>
               
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
 
 
 
 <!--Footer secton ends-->
</body>

</html>

<?php  

if(isset($_POST['BACK'])){

   header('location: upcoming and previous pet owner.php');
    ob_end_flush();

}
mysqli_close($db);
?>