<?php 
ob_start();
session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

die('error in db'. mysqli_error($db));
}else{
    $id = $_GET['id'];
    $qry = "select * from PETT,Appointment where PETT.Petid = Appointment.PETid and Appointmentid = $id ";
    $run = $db -> query($qry);
    if(!empty($run->num_rows) && ($run->num_rows > 0)){
        while($row = $run -> fetch_assoc()){
            $PetName = $row['Pet_Name'];
            $Gender = $row['Gender'];
            $Breed = $row['Breed'];
            $Spayed = $row['Spayed'];
            $MH = $row['Medical_History'];
            $DOB = $row['DOB'];
            $PetID=$row['Petid'];
            $Profile_Pic = $row['Profile_Pic'];
}

    }
}


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
<!-- ended 2 here -->

<!-- section for whole code -->
<section style="text-align: center">
  
    <div class="signUpGirl">
        <div class="animalphot">
        <img src="Contentttt/<?php echo $Profile_Pic;?>" style=" position: relative; left: -0.5%;top: 57px;  border-radius: 50%;width: 16%; margin-left: 50px;margin-bottom: 2%;">
        </div>
    </div>


<div class="editPetFinalPos">
        <form method="post">
           
  
            <div class="leftAddPet">
            <h3 class="Heading" style="font-size: 2.5rem; margin-bottom: 1rem; position: relative; left: -105px;">Pet Profile</h3>
                <label for="Fname" style="position: relative;left: -68px; font-size: 1.6rem;" >Pet name</label>
                <br>
                <input type="text" name="Fname" id="Fname" value="<?php echo $PetName ;?>" readonly required=""style=" height: 30px;  width: 70%; outline: none; border-radius: 5px; position: relative;left: -68px;border-radius: 5px; 
    border: 1px solid #F0EFEF ;  background-color:#F0EFEF;  padding-left: 15; font-size: 12px;">  
                
                <br><br>  
                   
                <label for="Pnum"style="position: relative;left: -68px; font-size: 1.6rem;">Date of Birth</label>
                <br>
                <input style="color: gray; height: 30px;  width: 70%; outline: none;border-radius: 5px;  border: 1px solid #F0EFEF ; background-color:#F0EFEF; position: relative;left: -66px;padding-left: 15;  font-size: 12px;"  type="date" name="Pnum" id="Pnum" value="<?php echo $DOB ;?>"  readonly required="">  
                
                <br><br>
       
                <label for="Gend"style="position: relative;left: -68px; font-size: 1.6rem;">Gender</label>
                <br>
                <select name="Gend" id="Gend"  required="" disabled="true" style=" height: 30px;width: 70.2%;    outline: none; border-radius: 5px; border: 1px solid #F0EFEF ;background-color:#F0EFEF;padding-left: 15; font-size: 12px;margin-bottom: 1ex;position: relative;left: -64px;">
                <option value="hid" hidden ><?php echo $Gender;?></option>   
                   <option value = "Male" > Male </option>
                  <option value = "Female"> Female </option>
                </select>
               
                <br><br>
       
              </div>
             
              <div class="rightAddPet">
                <label for="Lname" style="font-size: 1.6rem;">Breed</label>
                <br>  
                <input style="color: gray; height: 30px; width: 123%; outline: none;border-radius: 5px;border: 1px solid #F0EFEF ;background-color:#F0EFEF;padding-left: 15; font-size: 12px;"  type="text" name="Breed" id="Lname"  value="<?php echo $Breed ;?>" readonly required="">
             
                <br><br>
        
                <label for="Gend" style="font-size: 1.6rem;">Spayed/Neutered Status</label>
                <br>
                <select name="Gend" id="Gend" required="" disabled="true" style="  height: 30px; width: 121.2%; outline: none;border-radius: 5px;border: 1px solid #F0EFEF ;background-color:#F0EFEF;padding-left: 15; font-size: 12px;margin-bottom: 1ex;">
                <option value="hid" hidden > <?php echo $Spayed;?></option>
                  <option value = "Spayed/Neutered" > Spayed/Neutered </option>
                  <option value = "Not Spayed/Neutered "> Not Spayed/Neutered </option>
                </select>
                <br><br>
       
                <label for="VaccList" style="font-size: 1.6rem;">Vaccination List</label>
             <br>
            
             <a href="displayContent.php?id=<?php  echo $PetID;?>" style="margin-left: 15%;">>Vaccination details</a>
             <br><br>
                <label for="Lname" style="font-size: 1.6rem;">Medical History</label>
                <br>  
                <textarea style="height: 100px; width: 158%; outline: none; border-radius: 5px;border: 1px solid #F0EFEF ;background-color:#F0EFEF;padding-left: 15; font-size: 12px; position: relative; left: -21px;" name="MedHist" id="MedHist" readonly> <?php echo $MH;?> </textarea>
                <br><br>
              </div>
   
              <br><br><br><br><br>
              <br><br><br><br><br>
      


            
         <input type="submit" name="Reg" id="Reg" value="Back" style="font-size: 2rem;">
           
           <br><br><br><br>


        </form>
  </div>
      </section>
      <!-- ended section for whole code -->

      <!-- added 3 here -->
    <!-- Footer section starts -->
<div class="footer">
    <div class="box-container">
        <div class="box" id="footeraboutus">
            <h3>About Us</h3>
            <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine.</p>
                
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
<!-- ended 3 here -->
    </body>
</html>

<?php  

if(isset($_POST['Reg'])){

   header('location: Request_List_Pet_Owner.php');
    ob_end_flush();
   
}
mysqli_close($db); 

?>