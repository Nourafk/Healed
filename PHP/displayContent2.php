<?php 
ob_start();
session_start();

$db = mysqli_connect("localhost" , "root" ,"","healed");
$PETOWNER=$_SESSION['Managerid'];

$qry = "select * from Manager where Managerid=$PETOWNER";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){

$Profile_Pic = $row['Profile_Pic'];}}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pet Profile</title>
        <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">

<!-- added 1 here -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo.svg">
        <title>Healed</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../HTML/Header and Footer.css">
        <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
<!-- ended 1 here -->
<style> 
header .navbar  a{
  
  color:black ; 
 
}
</style>
    </head>

    <body class="petprofbackg">

<!-- added 2 here -->
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <ul class="nav-list">
            <li  ><a href="../HTML/Home Manager.php">Home</a>
                <ul class="sub-menu" id="sub-menu-arrow"> 
                  <li > <a href="Add_service.php">Add a New Service</a></li>
                  <li><a href="Appo_List.php">Set a New Appointment</a></li>
                  <li><a href="Request_List_Manager.php">View Requests List</a></li>
  
                  <li><a href="upcoming and previous manager.php">View Appointments List</a> </li>
          
                </ul>
              </li>
          
            
           <li><a href="Services_Manager.php">Services</a></li> 
           <li><a href="../HTML/About Us Manager.php">About Us</a></li> 
           <li class="move-right-btn" ><a href="#"id="profile"><img height="50rem" src="Contentttt/<?php echo $Profile_Pic ?> " ></a>
                <ul class="sub-menu" id="sub-menu-arrow2"> 
                    <li ><a href="#">View Profile</a></li>
                    <li><a href="../HTML/LnadingPage.php">Sign Out</a></li>
            
                  </ul></li>
          </ul>
        <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->


    </nav>

</header>

<!-- header section ends -->

  <section>
  <?php 

     $id = $_GET['id'];
    $Q1 = "select Content from PETT where Petid = $id ";
    $QUERY=mysqli_query($db, $Q1);
    while($info=mysqli_fetch_array($QUERY)){
        // Store the file name into variable
$file = 'Contentttt/'.$info['Content'].'';
//$filename = 'filename.pdf';
  
// Header content type
header('Content-type: application/png');
  
header('Content-Disposition: inline; filename="Contentttt/'.$info['Content'].'"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
ob_clean();
flush();

// Read the file
readfile($file);

        
        ?>

 <!--<embed type="application/pdf" src="Content/" style="width: 663px; height: 527px;  position: relative;right: -286px;">-->
  <?php
    }
    ?>


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
