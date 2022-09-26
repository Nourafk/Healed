
<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}else{
    $id = $_GET['id'];
    $qry = "select * from Appointment where Appointmentid = $id ";
    $run = $db -> query($qry);
    if(!empty($run->num_rows) && ($run->num_rows > 0)){
        while($row = $run -> fetch_assoc()){
            $PetName = $row['Pet_name'];
            $Service = $row['Service'];
            $Date = $row['Date'];
            $Note = $row['Note'];
            $Time = $row['Time'];
}

    }
}

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
    <title> View Appointment Request </title>
    <link rel = "stylesheet" type = "text/css" href ="../HTML/mystyle.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.svg">
 

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


<body class = "Noura">

    <!-- header section starts  -->

<header>

    <a href=".../HTML/Home Manager.html" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

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

<section class="requestbg">
    <div class = "part1">
        <div class="title"> Appointment Request </div>
        <form method="post">
              <div class ="appointment-details" > 
    
                <div class = "input-box">
                    <lable class = "details"> Pet <br>
                        <input disabled name= "petname" class = "field1" value="<?php echo $PetName ;?>">
                    </lable>
                </div>
    
                <div class = "input-box">
                    <lable class = "details"> Note <br>
                        <textarea disabled name= "note" class = "field2" ><?php echo $Note;?></textarea>
                    </lable>
                </div>
    
                <div class = "input-box">
                    <lable class = "details"> Service <br>
                        <input disabled name= "service" class = "field1" value="<?php echo $Service;?>">
                    </lable>
                </div>
    
                <div class = "input-box">
                    <lable class = "details"> Time <br>
                        <input  disabled type="time"name= "time" class = "field1" value="<?php echo $Time ;?>"> 
                    </lable>
                    </div>
    
    
                <div class = "input-box" >
                    <lable class = "details"> Date <br>
                        <input disabled type="date"name= "Date" class = "field1" value="<?php echo $Date ;?>">  
                    </lable>
                </div>
        
    
               </div>

               <div class="button1">
                <input name="SAVE" type = "submit"  value ="Back" class="button" style="  font-size:250% ; position: absolute; 
                left:45%;">
               </div>
                </div>
    </form>
    <br><br><br>
    <br><br><br>
    </div>



</section>

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
            <a href="../HTML/Home Manager.html">Home</a>
            <a href="../HTML/Services Manager.html">Services</a>
            <a href="../HTML/About Us Manager.html">About US</a>
                
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

if(isset($_POST['SAVE'])){




   header('location: Request_List_Manager.php');
    ob_end_flush();
   
}
mysqli_close($db);

?>