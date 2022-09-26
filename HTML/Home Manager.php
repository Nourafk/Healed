<?php 
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.svg">
    <title>Healed</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./LandingPage.css">
    <link rel="stylesheet" href="./Header and Footer.css">

    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
    

    <style>
#profile{
    font-size: 2rem;

}
#profile i{
    margin: 0rem 0;
    margin-right: 1rem;
    border-radius: 50%;
    background:rgb(255, 240, 227);
 
    font-size: 2rem;
    height:4rem;
    width:4rem;
    line-height: 4rem;
    text-align: center;
    z-index: 10001;

}

 
header .navbar  a{
  
  color:black ; 
 
}


</style>
</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="./Home Manager.html" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <ul class="nav-list">
            <li  ><a href="../HTML/Home Manager.php">Home</a>
                <ul class="sub-menu" id="sub-menu-arrow"> 
                  <li > <a href="../PHP/Add_service.php">Add a New Service</a></li>
                  <li><a href="../PHP/Appo_List.php">Set a New Appointment</a></li>
                  <li><a href="../PHP/Request_List_Manager.php">View Requests List</a></li>
  
                  <li><a href="../PHP/upcoming and previous manager.php">View Appointments List</a> </li>
          
                </ul>
              </li>
          
            
           <li><a href="../PHP/Services_Manager.php">Services</a></li> 
           <li><a href="../HTML/About Us Manager.php">About Us</a></li> 
           <li class="move-right-btn" ><a href="#"id="profile"><img height="50rem" src="../PHP/Contentttt/<?php echo $Profile_Pic ?>" class="profile-pic">  </a>
                <ul class="sub-menu" id="sub-menu-arrow2"> 
                    <li ><a href="#">View Profile</a></li>
                    <li><a href="../HTML/LnadingPage.php">Sign Out</a></li>
            
                  </ul></li>
          </ul>
        
        <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->


    </nav>

</header>

<!-- header section ends -->
<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <div class="writtenContent" >
        <h3>Start Your Journey With A <span>CLICK!</span></h3>
       
       <div class="options">
        <span class="optionsspan1"><img src="../images/Parrot.svg" alt="">
        <a href="../PHP/Add_service.php" class="btn ">Add a New Service</a> 
        
        <p>
          <a href="../PHP/Appo_List.php" class="btn ">Set a New Appointment</a> 
       </p> </span>

       <span class="optionsspanright"><img src="../images/sleepingcat.svg" alt="">
        <a href="../PHP/Request_List_Manager.php" class="btn ">View requests list</a> 
        
        <p>
          <a href="../PHP/upcoming and previous manager.php" class="btn ">View Appointments list</a> 
       </p> </span>
       
           
 </div> 
        </div>
        <div class="image">
            <img src="../images/dog&cat.svg" alt="">
        </div>

    </div>

</section> 

<!-- home section ends  -->

<!-- Footer section starts -->
<div class="footer">
    <div class="box-container">
        <div class="box" id="footeraboutus">
            <h3>About Us</h3>
            <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
                
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="./Home Manager.html">Home</a>
            <a href="./Services Manager.html">Services</a>
            <a href="./About Us Manager.html">About US</a>
                
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