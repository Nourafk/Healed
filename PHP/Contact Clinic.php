<?php 
ob_start();
session_start();

/*$db = mysqli_connect("localhost" , "root" ,"","healed");

$error = '';
$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;

}
if(isset($_POST["send"]))
{
	
	if(empty($_POST["message"]))
	{
		$error .= '<p><label class="text-danger">Message is required</label></p>';
	}
	else
	{
		$message = clean_text($_POST["message"]);
	}
	if($error == '')
	{
		require 'PHP/classphpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		//$mail->Username = 'xxxxxxxxxx';					//Sets SMTP username
		//$mail->Password = 'xxxxxxxxxx';					//Sets SMTP password
		$mail->SMTPSecure = '';							//Sets connection prefix. Options are "", "ssl" or "tls"
		//$mail->From = $_POST["email"];					//Sets the From email address for the message
		//$mail->FromName = $_POST["name"];				//Sets the From name of the message
		$mail->AddAddress('Nouraalkho@gmail.com', 'Name');		//Adds a "To" address
		//$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML				
		$mail->Subject = "contact us";				//Sets the Subject of the message
		$mail->Body = $_POST["message"];				//An HTML or plain text message body
		if($mail->Send())								//Send an Email. Return true on success or false on error
		{
			$error = '<label class="text-success">Thank you for contacting us</label>';
		}
		else
		{
			$error = '<label class="text-danger">There is an Error</label>';
		}
		
		$message = '';
	}
}
/*
$to = "Nouraalkho@gmail.com";
$subject = "Contact Clinic";
$msg= $_POST["message"];


mail($to,$subject,$msg);
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.svg">
    <title>Contact Clinic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script src="https://kit.fontawesome.com/cfd954b4b7.js" crossorigin="anonymous"></script>


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./Header and Footer.css">
    <link rel="stylesheet" href="./contact template.css">
    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
    

<style>
header .navbar  a{
  
  color:black ; 
 
}

</style>
</head>

<body>
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


 <!-- Contact Us section starts  -->
<section class="contactus" id="contact us">
    <div class="image">
        <img src="../images/CONTACTUSS.svg" alt="">
    </div>
    
    <form action="Home Pet Owner.html" method ="post">
        <h1 class="heading">Contact Clinic</h1>
        <div class="inputbox">
            <label >Email Us:</label>
            <br><br><br>
            <div><img class = "back6" src ="../images/Emailicon.svg" width="33px" >
                <a href="mailto:healedpetclinic@gmail.com"style="font-size:18px; position: absolute; bottom: 8%; 
                left: 10%; font-s;"> healedpetclinic@gmail.com </a>
                </div>
        </div>

        <div class="inputbox">
            <label >Call Us:</label>
            <br><br><br>
            <div><img class = "back6" src ="../images/phone icon.svg">
                <a href="tel:123-456-789 "style="font-size:18px; position: absolute; bottom: 8%; 
                left: 10%; font-s;"> 123-456-789 </a>
        </div> 
        
    </div>

      <a href="../HTML/Home Pet Owner.php">
      <center>  <input type="button" class="btn" value="Back">  </center>
                </a>
    </form>

</section>



<!-- Contact Us section ends  -->

<!-- Footer section starts -->
<div class="footer">
    <div class="box-container">
        <div class="box" id="footeraboutus">
            <h3>About Us</h3>
            <p>We are a full-service animal hospital that offers a wide selection of 
                comprehensive veterinary services to maintain your pet's health, from routine 
                exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
                
        </div>
        <div class="box">
            <h3>Quick links</h3>
            <a href="./Home Pet Owner.html">Home</a>
            <a href="./Services Pet Owner.html">Services</a>
            <a href="./About us PetOwner.html">About US</a>
            <a href="./Contact Clinic.html">Contact Us</a>
                
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






<!--<!DOCTYPE html>>
<html>
    <head>
        <meta charset="utf-8">
        <title> Contact Clinic </title>
        <link rel = "stylesheet" type = "text/css" href ="mystyle.css">
    </head>

<body class="Noura">

    <div class = "part2">
        <div class="title"> Contact Clinic </div> <br>
           <form action="#">
              <div class ="contact"> 
    
                <div class = "input-box">
                    <lable class = "details"> Email Us: <br>
                        <textarea name= "email" class = "field2" > Message </textarea>
                                            
                    </lable>
                </div>
    
               </div>
            
               <div class="button2">
                <input type = "submit"  value ="Send"class="button">
                </div>
                <br><br>
                <div>
                    <p > Call Us: </p> 
                    <p style=" text-indent: 25px;  position: absolute; bottom: 176px;"> +96655555 </p>
                    <img class = "back6" src ="./phone icon.svg">
                    
                </div>
                <br><br><br><br>
            
              
              
    </form>
    </div>
    <img class="BACKGROUND3" src="./background.svg">
    <div>
        <img class = "back3" src ="./doctor.svg">
        <img class = "back4" src ="./table.svg">
        <img class = "back5" src ="./girl and dog.svg">
       
    </div>
    </body>

    <footer>

    </footer>
</html> -->


