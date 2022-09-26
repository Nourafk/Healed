
<?php include_once ('authControllerManager.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../images/logo.svg">
    <title>Rest Password </title>
    <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="Header and Footer.css">
     <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
  <style>
       .PassField{
            height: 50px;
            width: 500px;
            outline: none;
            border-radius: 20px;
            border: 1px solid #ebebee;
            background-color: #F0EFEF;
            padding-left: 20px;
            font-size: 12px;
            position: relative;
            top: 50px;
     
        }

    .label{
        position: relative;
    bottom: 0;
    top: 120px;
    }
   

header .navbar  a{
  
  color:black ; 
 
}

      </style>
   
   
</head>
<body>
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
  
  <section class="ResetPage">
   
   <div id="Base">
   <div class="Dogpic" >
      <img id ="Dog" src="../HTML/Dog.svg" alt="Dog pic" width="90px" height="90px" >
      <div id ="Heading">
         <p class="Heading" style="font: size 3rem weight 300;">Reset<p> 
      </div>


      
   </div>
   <form action="VerifyEmailManager.php" method="POST">
   <div class= "ResetPasswordfield">
   <?php
   if(isset($_SESSION['message'])){
       ?>
       <p id='msg'><?php echo $_SESSION['message']; ?></p>
       <?php
   }?>
   <?php
   if($errors>0){
       foreach($errors AS $displayErrors){
           ?>
           <p id='msg'><?php echo $displayErrors;?></p>
           <?php
       }
   }
   ?>
       <label class="Heading" style="font-size: 2rem;font-weight: 300;">Verification Code</label>

      <input class = "field1" name="otpVerify" type="number" placeholder="Verification Code" required>
      </div>
      <div class="Resetbutton">
      <a href='ResetPassManager.php'><input class="button" type="button"  value="Back" ></a>
      <input class="button" type="submit" name="verifyEmail" value="Verify Password" >
</div>
   </form>

   </div>
   
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
            <a href="./LnadingPage.html">Home</a>
            
            <a href="./LnadingPage.html#Services">Services</a>
          <a href="./LnadingPage.html#Aboutus">About Us</a>
          <a href="./LnadingPage.html#contact us">Contact Us</a>
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
