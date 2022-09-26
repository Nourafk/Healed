<?php 
//start
ob_start();
session_start();
//connect
$db = mysqli_connect("localhost" , "root" ,"","healed");
//initialize
$errors = array();
// LOGIN USER
if (isset($_POST['log'])) {
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Pass = mysqli_real_escape_string($db, $_POST['Pass']);
  
    if (empty($Email)) {
        array_push($errors, "Email is required");
    }
    if (empty($Pass)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $Pass = md5($Pass);
        $query = "SELECT * FROM Users WHERE Email='$Email' AND Pass='$Pass'";
        $results = $db -> query($query);
        if(!empty($results->num_rows) && ($results->num_rows > 0)){
            while($row = $results -> fetch_assoc()){
                $imageprofile = $row['Profile_Pic']; 
                $Profileid = $row['userid'];          
    }
    if (mysqli_num_rows($results) == 1) {
        $_SESSION['Email'] = $Email;
        $_SESSION['Profile_Pic'] = $imageprofile;
        $_SESSION['Userrid'] = $Profileid;
        $_SESSION['success'] = "You are now logged in";
        }
       
            header('location: ../HTML/Home Pet Owner.php');
          }else {
           // echo '<script>alert("Wrong username/password combination")</script>';
            array_push($errors, "Wrong username/password combination");
          }
       
    }
  }
  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Log in</title>
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
    <body >

<!-- added 2 here -->
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <ul class="nav-list">
            <li  ><a href="../HTML/LnadingPage.php">Home</a>
              
            </li>
          
            
           <li><a href="../HTML/LnadingPage.php#Services">Services</a></li> 
           <li><a href="../HTML/LnadingPage.php#Aboutus">About Us</a></li> 
            <li><a href="../HTML/LnadingPage.php#contact us">Contact Us</a></li>
            
          </ul>
        
        <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->


    </nav>

</header>

<!-- header section ends -->
<!-- ended 2 here -->

<!-- section for whole code -->
<section class="loginpage" style="text-align: center;">
       <div class="loginFinalPos">

        <form method="post" action="Login page pet owner.php" style="position:relative; top:-85px;">
        <?php include('errors.php'); ?>
            <br><br>
            <h3 class="Heading" style="font-size: 3rem; margin-bottom: 1rem; position: relative;">Log in</h3>
            <br>
           <a href="Login page admin.php"> <button type="button" class="loginTypeButtonNotChosen" style="font-size: 2rem;">Manager</button></a>
            <button type="button" class="loginTypeButtonChosen" style="font-size: 2rem;">Pet Owner</button>
            <br><br>
  
            <br>
            <label for="Uname" style="font-size: 1.6rem;">Email</label>
            <br>
            <input class="input-box" type="email" name="Email" id="Uname" placeholder="Enter Email" required=>    
            <br><br>     
            <label for="Pass" style="font-size: 1.6rem;">Password</label>
            <br>  
            <input class="input-box" type="Password" name="Pass" id="Pass" placeholder="Enter Password" required=>    
            <br><br>
            <input type="checkbox" id="check"> <label for="check" style="font-size: 1.3rem;">Remember me</label><br> 
            <a class="loginLink" href="ResetPassPetOwner.php" style="font-size: 1.3rem;">Forget Password?</a>
            <br><br>
            
            <input type="submit" name="log" id="log" value="Log in" style="font-size: 2rem;">
            <br><br>
            <p style="font-size: 1.3rem;">Don't have account yet? <a class="loginLink" href="Sign up page.php">New Account</a></p>
        </form> </div>
    </section>
    <!-- ended section for whole code -->

    <!-- added 3 here -->
    <!-- Footer secton starts -->
    <div class="footer">
        <div class="box-container">
            <div class="box" id="footeraboutus">
                <h3>About Us</h3>
                <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
                    
            </div>
            <div class="box">
                <h3>Quick links</h3>
                <a href="../HTML/LnadingPage.php">Home</a>
                
                <a href="../HTML/LnadingPage.php#Services">Services</a>
              <a href="../HTML/LnadingPage.php#Aboutus">About Us</a>
              <a href="../HTML/LnadingPage.php#contact us">Contact Us</a>
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
<!-- ended 3 here -->

    </body>
</html>
