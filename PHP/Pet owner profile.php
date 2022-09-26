<?php 
ob_start();
session_start();

$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}else{
   
    $id =$_SESSION['Email'];
    $id2 = $_SESSION['Userrid'];
    $qry = "select * from Users where userid = $id2 or Email='$id' ";
    $run = $db -> query($qry);
    if(!empty($run->num_rows) && ($run->num_rows > 0)){
        while($row = $run -> fetch_assoc()){
            $Fname = $row['Fname'];
            $Lname = $row['Lname'];
            $Pnum = $row['Pnum'];
            $Email = $row['Email'];
            $Gend = $row['Gend'];
            $Pass = $row['Pass'];
            $Profile_Pic = $row['Profile_Pic'];
            $_SESSION['Profile_Pic'] =  $Profile_Pic;
}

    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Profile</title>
        <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

<!-- added 1 here -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo.svg">
        <title>Healed</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../HTML/Header and Footer.css">
        <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
        <script src="script.js"></script>

<!-- ended 1 here -->
<style>


div.signUpCam{
  position: relative;left: 41.5%; top: 131px;
    border-radius: 50%;
    width: 80px;
    height: 105px;
    margin-left: 50px;
    margin-bottom: 2%;
}
    

header .navbar  a{
  
  color:black ; 
 
}

</style>
    </head>

    <body class="addaservicepageback">

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
        <br><br><br><br><br><br>
        
   <div class="editMyProfFinalPos">
   
        
        <form method="post" action="Pet owner profile.php?id=<?php echo $_SESSION['Userrid'];?>" enctype="multipart/form-data">
        <div class="signUpCam" style="border-radius: 50%;">
               <img src="Contentttt/<?php echo $Profile_Pic;?>" style="position: relative; left: -46.5%;top: -53px;border-radius: 50%; width: 118%; height: 100px; margin-left: 50px;margin-bottom: 2%;" onclick="triggerClick()" id="addPetCirc3">
        <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 94.4%; top: 24.5%;"></a>
        <input type="file" name="ProfileImage" onchange="displayImage(this)" id="ProfileImage" style="display:none; Position: absolute;left: 47.4%; top: 134px;" >

               </div>
            

       
    
           <div class="firstCol">
            <h3 class="Heading" style="font-size: 2.5rem; margin-bottom: 1rem; position: relative; left: -38px;">My Profile</h3>
             <label sfor="Fname" style="font-size: 1.6rem;">First name</label>
             <br>
             <input type="text" name="Fname" id="Fname" value="<?php echo $Fname;?>" required="">  
             <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 87.4%; top:27.4%"></a>
             <br><br>  
                
             <label for="Pnum" style="font-size: 1.6rem;">Phone number</label>
             <br>
             <input style="color: gray;"  type="number" name="Pnum" id="Pnum" value="<?php echo $Pnum;?>" readonly required="" min="0500000000" max="0599999999"> 
           <!--  <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 87.4%; top:53.5%"></a>-->
             <br><br>
    
             <label for="Pass" style="font-size: 1.6rem;">Password</label>
             <br>  
             <input type="password" name="Pass" id="Pass1" value="<?php echo $Pass;?>" required="">
             <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 87.4%; top:79.5%"></a>
             <br><br>
    
             
           </div>
           
          
    
           <div class="secondCol">
              <br>
             <label for="Lname" style="font-size: 1.6rem;">Last name</label>
             <br>  
             <input type="text" name="Lname" id="Lname" value="<?php echo $Lname;?>"  required="">
             <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 87.4%; "></a>
             <br><br>
    
             <label for="Email" style="font-size: 1.6rem;">Email</label>
             <br>  
             <input style="color: gray;" type="email" name="Email" id="Email" placeholder="Enter Email" value="<?php echo $Email;?>" readonly required="">
             <br><br>
    
             <label for="Gend" style="font-size: 1.6rem;">Gender</label>
             <br>
             <select name="Gend" id="Gend" placeholder="Choose Gender" required="" disabled="true">
             <option value="hid" hidden ><?php echo $Gend;?></option>      
               <option value = "Male" > Male </option>
               <option value = "Female"> Female </option>
             </select>
             <br><br>
           </div>
           
           <br><br><br><br>

           <a href="../HTML/Home Pet Owner.php"><input type="button" name="Reg" id="Reg" value="Back" style="font-size: 2rem;"></a>
           <input type="submit" name="Reg" id="Reg" value="Save" style="font-size: 2rem;">

           <br><br>
           <a href="deleteProfile.php?id= <?php  echo $_SESSION['Userrid']; ?>" onclick = "return confirm('Are you sure?')"><button type="button" id="delAcc" style="font-size: 2rem;">Delete Account</button></a>
           
           

           <br><br>
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
          <a href="../HTML/Home Pet Owner.php">Home</a>
          <a href="Services Pet Owner.php">Services</a>
          <a href="../HTML/About us PetOwner.php">About US</a>
          <a href="Contact Clinic.php">Contact Us</a>
              
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
  
$Fname = $_POST['Fname'];
//$Phonenum = $_POST['Pnum'];
$Passowrd = $_POST['Pass'];
$Pass = md5($Passowrd);//encrypt the password before saving in the database

$Lastname = $_POST['Lname'];

if (!file_exists($_FILES['ProfileImage']['tmp_name']) || !is_uploaded_file($_FILES['ProfileImage']['tmp_name'])) 
{
    echo 'No upload';
    $imageprofile=$Profile_Pic;
      

    $qry="update Users set Fname = '$Fname' , Lname= '$Lastname' ,  Pass='$Pass' , Profile_Pic='$imageprofile'  where userid = $id2 or Email='$id' ; ";
   
$result=mysqli_query($db,$qry);

if($result){
   //echo '<script>alert("changes updated successfully.!!");</script>';
  header('location: ../HTML/Home Pet Owner.php');
    ob_end_flush();
    }else{
        echo mysqli_error($db);
    }

}
   

else
{
    echo 'upload';
    $imageprofile=$_FILES['ProfileImage']['name'];
$imageprofile_tem_loc=$_FILES['ProfileImage']['tmp_name'];
    // Your file has been uploaded

//$imageprofile = isset($_FILES['ProfileImage']) ? $_FILES['ProfileImage']['name'] : '$Profile_Pic';

 //$_SESSION['Profile_Pic']=$imageprofile;
$PDF_store='Contentttt/';

$MOVE2=move_uploaded_file($imageprofile_tem_loc, $PDF_store.$imageprofile);

$qry="update Users set Fname = '$Fname ' , Lname= '$Lastname' , Pass='$Passowrd' , Profile_Pic='$imageprofile' where userid = $id2 ; ";

  
$_SESSION['Profile_Pic'] =    $imageprofile;
$result=mysqli_query($db,$qry);
if($result){
   // echo '<script>alert("changes updated successfully.!!");</script>';
   header('location: ../HTML/Home Pet Owner.php');
    ob_end_flush();
    }else{
        echo mysqli_error($db);
    }

}

}
mysqli_close($db);

?>