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

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Edit Appointment Request </title>
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
    <div class = "part1"><br><br><br>
        <div class="title">  Edit Request </div>
           <form method="post">
              <div class ="appointment-details"> 
    
                <div class = "input-box">
                    <lable class = "details"> Pet <br>
                        <select  name= "petname" class = "field1" >
                        <option value="" selected hidden required=""><?php echo $PetName;?> </option>
                    <?php   
$PETOWNER=$_SESSION['Userrid'];
$qry = "select Pet_Name,Petid from PETT where Userid=$PETOWNER";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
?>

<option value=<?php echo $row['Petid'] ?> > <?php echo $row['Pet_Name'] ?> </option>
<?php 

}
}
?>
                            </select>
                    </div>
    
                <div class = "input-box">
                    <lable class = "details"> Note <br>
                        <textarea name= "note" class = "field2" ><?php echo $Note;?></textarea>
                           
                    </lable>
                    <a href="">   <img class = "back8"  width="40px" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 52%; top:45% "></a>
                </div>
    
                <div class = "input-box">
                    <lable class = "details"> Service <br>
                        <select name= "service" class = "field1">
                        <option value="hid" hidden ><?php echo $Service;?></option>   
                            </select>
                    </lable>
                </div>
    
                <div class = "input-box">
                    <lable class = "details"> Time <br>
                        <input type="time"value="<?php echo $Time ;?>">
            </lable>
            </div>
    
    
                <div class = "input-box" >
                    <lable class = "details"> Date <br>
                        <input type="date" value="<?php echo $Date ;?>">
                </lable> 
                </div>
        
    
               </div>
               <br>
               <div class="button1">
                <input name="SAVE"  type = "submit"  value ="Save" class="button" style="  font-size:250% ; position: absolute; 
                left:45%;">
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
            <a href="../HTML/Home Pet Owner.html">Home</a>
            <a href="../HTML/Services Pet Owner.html">Services</a>
            <a href="../HTML/About us PetOwner.html">About US</a>
            <a href="../HTML/Contact Clinic.html">Contact Us</a>
                
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
$id = $_GET['id'];
if(isset($_POST['SAVE'])){

 $Note = $_POST['note'];
$PETNAME=$_POST['petname'];

$QUERY="select Pet_Name from PETT where Petid= $PETNAME";
if($RESULT = mysqli_query($db, $QUERY)){ 
    while ($row = $RESULT->fetch_assoc()) { 
    $PetName = $row['Pet_Name'];
$qry = "update Appointment set Note = '$Note' , Pet_name='$PetName', PETid = $PETNAME where Appointmentid = $id ";

if(mysqli_query($db,$qry)){
   // echo '<script>alert("changes updated successfully.!!");</script>';
   header('location: Request_List_Pet_Owner.php');
    ob_end_flush();
    }else{
        echo mysqli_error($db);
    }

}}}
mysqli_close($db);
?>