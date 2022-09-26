
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
    <title>Appointment List</title>
    <link rel="stylesheet" type="text/css" href="Nourah's.css">
   
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <script src="https://kit.fontawesome.com/cfd954b4b7.js" crossorigin="anonymous"></script>
<link rel="stylsheet" href="../CSS/all.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../images/logo.svg">
<title>Healed</title>

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="../HTML/Header and Footer.css">
<script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
<style>


button.SETApp3{
    border: none;
    padding: 7px 20px;
    border-radius: 20px;
    
    color: white;

    background-color: #635DAD;
            opacity: 62%;
            position: absolute;
            bottom: 75.5%;
    left: 173px;
    width: 10%;
           
           
}
button.SETApp3:hover{
    opacity: 100%;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 50, 0.3);
}
header .navbar  a{
  
  color:black ; 
 
}
</style>
</head>

<body class="NBODY">

      <!-- header section starts  -->

<header>

    <a href="../HTML/Home Manager.html" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

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

<section style="min-height:60vh;">
<a href="../HTML/Home Manager.php"><button class="SETApp3">Back</button></a>

    <div class="Tabeltitel" ><strong> Upcoming Appointments</strong></div>

    <div class="header_fixed4">

        <table>
            <thead>
                
                <tr>
                  
                    <th class="HEADER" style="color: #030229; background-color: white;">S No</th>
                    
                    <th class="HEADER" style="background-color: white;"></th> 
                    <th class="HEADER" style="color: #030229;background-color: white;">Pet name</th>
                    <th class="HEADER" style="color: #030229;background-color: white;">Service</th>    
                    <th class="HEADER" style="background-color: white;"></th>
                   
                    <th class="HEADER" style="background-color: white;"></th>
                </tr>
          
            </thead>
    
            <tbody>
            <?php 
        $i=1;
        $qry = "select * from Appointment where Status='yes'";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
$id = $row['Appointmentid'];
  

$Q1="select * from PETT,Appointment where PETT.Petid = Appointment.PETid and Appointmentid = $id ";

$run2 = $db -> query($Q1);
if(!empty($run2->num_rows) && ($run2->num_rows > 0)){
    while($row2 = $run2 -> fetch_assoc()){
        $Profile_Pic = $row2['Profile_Pic'];
}

}

        ?>
                <tr>
                    <td><?php echo  $i++; ?></td>
                    <td ><a href="View_Pet_Profile3.php?id=<?php echo $id;?>" style="box-shadow: 0 0 black;"> <img src="Contentttt/<?php echo $Profile_Pic;?>"  height="50px" width="50px"></a></td>
                    <td>  <?php echo $row['Pet_name'] ?> </td>
                 <td><?php echo $row['Service'] ?></td>
                    <td><a href="Upcoming_Appo_details_manager.php?id= <?php echo $id;?>"><button >View</button></a></td>
                    <td><a href="complet_appo.php?id= <?php echo $id;?>" onclick = "return confirm('Are you sure?')"><button >Complete</button></a></td>
                        <td> <a href="Contact Pet Owner.php?id= <?php echo $id;?>"><i class="fas fa-envelope"></i></a>
                    </td>
                </tr>
                <?php 

}
}
?>
             <!--   <tr>
                    <td>2</td>
                    <td ><a href="./MahaB Pet Profile Appointment List Manager 2.html"style="box-shadow: 0 0 black;"> <img src="./image (1).svg"  height="50px" width="50px"></a></td>
                    <td> Myla </td>
                <td> Dentistry</td>
                    <td> <a href="./Appointment Details Manager2.html"><button >View</button></a></td>
                        <td> <a href="Contact Pet Owner.html"><i class="fas fa-envelope"></i></a>
                        </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td ><a href="./MahaB Pet Profile Appointment List Manager.html"style="box-shadow: 0 0 black;"> <img src="./image (1).svg"  height="50px" width="50px"></a></td>
                    <td> Kiwi </td>
                <td> Checkup</td> 
                    <td> <a href="./Appointment Details Manager.html"><button >View</button></a></td>
                        <td> <a href="Contact Pet Owner.html"><i class="fas fa-envelope"></i></a>
                        </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td ><a href="./MahaB Pet Profile Appointment List Manager.html"style="box-shadow: 0 0 black;"> <img src="./image (1).svg"  height="50px" width="50px"></a></td>
                    <td> Kiwi </td>
                <td> Checkup</td>
                    <td> <a href="./Appointment Details Manager.html"><button >View</button></a></td>
                        <td> <a href="Contact Pet Owner.html"><i class="fas fa-envelope"></i></a>
                        </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td ><a href="./MahaB Pet Profile Appointment List Manager.html"style="box-shadow: 0 0 black;"> <img src="./image (1).svg"  height="50px" width="50px"></a></td>
                    <td> Cava </td>
                <td> Boarding</td>
                    <td> <a href="./Appointment Details Manager.html"><button >View</button></a></td>
                        <td> <a href="Contact Pet Owner.html"><i class="fas fa-envelope"></i></a>
                        </td>
                </tr>-->
              
            </tbody>
        </table>

    </div>
</section>
<section id="prevapptman">  <!--style="min-height: 50vh;"-->
    <div class="Tabeltitel2" ><strong>  Previous Appointments</strong></div>
   

    <div class="header_fixed5">

        <table>
            <thead>
                
                <tr>
                  
                    <th class="HEADER" style="color: #030229; background-color: white;">S No</th>
                    
                    <th class="HEADER" style="background-color: white;"></th> 
                    <th class="HEADER" style="color: #030229;background-color: white;">Pet name</th>
                    <th class="HEADER" style="color: #030229;background-color: white;">Service</th>    
                    <th class="HEADER" style="background-color: white;"></th>
                   
                    <th class="HEADER" style="background-color: white;"></th>
                    <th class="HEADER" style="background-color: white;"></th>
                </tr>
          
            </thead>
    
            <tbody>
            <?php 
        $i=1;
        $qry = "select * from Appointment where Status='Done'";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
$id = $row['Appointmentid'];
  
$Q1="select * from PETT,Appointment where PETT.Petid = Appointment.PETid and Appointmentid = $id ";

$run2 = $db -> query($Q1);
if(!empty($run2->num_rows) && ($run2->num_rows > 0)){
    while($row2 = $run2 -> fetch_assoc()){
        $Profile_Pic = $row2['Profile_Pic'];
}

}
        ?>
                <tr>
                    <td><?php echo  $i++; ?></td>
                    <td ><a href="View_Pet_Profile3.php?id=<?php echo $id;?>" style="box-shadow: 0 0 black;"> <img src="Contentttt/<?php echo $Profile_Pic;?>"  height="50px" width="50px"></a></td>
                    <td> <?php echo $row['Pet_name'] ?> </td>
                <td> <?php echo $row['Service'] ?></td> 
                    <td><a href="Upcoming_Appo_details_manager.php?id= <?php echo $id;?>"><button >View</button></a></td>
                        <td class="Approved"><a href="Feedback_manager.php?id= <?php echo $id ; ?>"><button style="font-size: xx-small;">Customer Feedback</button></a>
                        
                    </td>
                    <td><a href="Delet_prev_appo.php?id= <?php  echo $id; ?>" onclick = "return confirm('Are you sure?')"><i class="fas fa-times" style="font-size: x-large;"></i></a></td>

                </tr>
                <?php 

}
}
?>
             <!--   <tr>
                    <td>2</td>
                    <td ><a href="./MahaB Pet Profile Appointment List Manager 2.html"style="box-shadow: 0 0 black;"> <img src="./image (1).svg"  height="50px" width="50px"></a></td>
                    <td> Myla </td>
                <td> Dentistry</td>
                    <td> <a href="./Appointment Details Manager2.html"><button >View</button></a></td>
                        <td class="Approved"> <a href="Review Manager.html"><button style="font-size: xx-small;">Customer Feedback</button></a>
                        </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td ><a href="./MahaB Pet Profile Appointment List Manager.html"style="box-shadow: 0 0 black;"> <img src="./image (1).svg"  height="50px" width="50px"></a></td>
                    <td> Kiwi </td>
                <td> Checkup</td>  
                    <td> <a href="./Appointment Details Manager.html"><button >View</button></a></td>
                        <td class="Approved"> <a href="Review Manager.html"><button style="font-size: xx-small;">Customer Feedback</button></a>
                        </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td ><a href="./MahaB Pet Profile Appointment List Manager.html"style="box-shadow: 0 0 black;"> <img src="./image (1).svg"  height="50px" width="50px"></a></td>
                    <td> Cava </td>
                <td> Boarding</td>
                    <td> <a href="./Appointment Details Manager.html"><button >View</button></a></td>
                        <td class="Approved"> <a href="Review Manager.html"><button style="font-size: xx-small;">Customer Feedback</button></a>
                        </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td ><a href="./MahaB Pet Profile Appointment List Manager.html"style="box-shadow: 0 0 black;"> <img src="./image (1).svg"  height="50px" width="50px"></a></td>
                    <td> Myla </td>
                <td> Dentistry</td> 
                    <td> <a href="./Appointment Details Manager.html"><button >View</button></a></td>
                        <td class="Approved"> <a href="Review Manager.html"><button style="font-size: xx-small;">Customer Feedback</button></a>
                        </td>
                </tr>-->
              
            </tbody>
        </table>

    </div>

    
<div class="TwoTabelBG"><img  src="../HTML/image (1) 9.46.53 PM.svg"></div>
<div class="TwoTabelBG2"><img  src="../HTML/image 9.46.53 PM.svg"></div>
</section>
<!-- Footer secton starts -->
<div class="footer">
    <div class="box-container">
        <div class="box" id="footeraboutus">
            <h3>About Us</h3>
            <p>We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine..</p>
                
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
<?php mysqli_close($db); ?>