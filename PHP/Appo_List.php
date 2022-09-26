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
<html>
<head>
   <meta charset="utf-8">
    <title>Availabel Appointments</title>
    <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
   
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
            bottom: -5.5%;
    left: 173px;
    width: 11%;
           
           
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

<body class="NBODY3">
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


    <section>

    <div class="CAPTION2" ><strong>Available Appointments</strong></div>

<div class="header_fixed3">
    <table>
        <thead>
         <tr>
             
                <th  class="HEADER" style="color: #030229;">S No</th>
                
                <th class="HEADER" style="background-color: white;"></th>
                <th class="HEADER" style="color: #030229;">Service Name</th>
                <th class="HEADER" style="background-color: white;"></th>
                    <th class="HEADER" style="background-color: white;"></th>   
              <!--  <th style="color: #030229;">breed</th>-->
            <!--<th style="color: #030229;">Service</th>      -->  
                 
            </tr>

        </thead>

        <tbody>

        <?php 
        $i=1;
        $qry = "select * from Services";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
$id = $row['Serviceid'];
  
$Q1="select * from Services,Manager_Services where Services.Picture_id = Manager_Services.MServicesid and Serviceid = $id ";

$run2 = $db -> query($Q1);
if(!empty($run2->num_rows) && ($run2->num_rows > 0)){
    while($row2 = $run2 -> fetch_assoc()){
        $Profile_Pic = $row2['Picture'];
       
}

}

        ?>
            <tr>
                <td><?php echo  $i++; ?></td>
                <td><img src="Contentttt/<?php echo $Profile_Pic;?>" style="height:50px; width=50px; border-radius: 50%;"></td>
                <td> <?php echo $row['Service_name'] ?> </td>
                
              <!-- View_Appo_details.php -->  
                <td> <a href="View_Appo_details.php?id= <?php echo $id;?>"><button>View</button></a>
                    
                </td>
                <td  class="DELET"><a href="DeletApp3.php?id= <?php echo $id; ?>" onclick = "return confirm('Are you sure?')"><button>delete</button></a>
                    
                </td>

            </tr>

            <?php 

}
}
?>

          <!--  <tr>
                <td>2</td>
              <td><img src="./image (3).svg" style="height:50px ;width:50px"></td>
                <td> Dentistry </td>
                
                
                <td> <a href="Appointments Details2.html"><button>View  </button></a>
                    
                                  
                </td>
                <td class="DELET"> <button>delete</button>
                    
                </td>                  
            </tr>

            <tr>
                <td>3</td>
                <td><img src="./image 10.14.50 PM.svg" style="height:50px ;width:50px"></td>
                <td> Cutting </td>
                
                
                <td> <a href="Appointments Details.html"><button>View  </button></a>
                    
                                   
                </td>
                <td class="DELET"> <button>delete</button>
                    
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td><img src="./image (2) 10.14.51 PM.svg"style="height:50px ;width:50px"></td>
                <td> Grooming </td>
                
                
                <td> <a href="Appointments Details.html"><button>View  </button></a>
                    
                                   
                </td>
                <td class="DELET"> <button>delete</button>
                    
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td><img src="./image (1) 10.14.50 PM.svg" style="height:50px ;width:50px"></td>
                <td> Grooming </td>
                
                
                <td> <a href="Appointments Details.html"><button>View  </button></a>
                    
                                 
                </td>
                <td class="DELET"> <button>delete</button>
                    
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td><img src="./image (1) 10.14.50 PM.svg" style="height:50px ;width:50px"></td>
                <td> Grooming </td>
                
                
                <td> <a href="Appointments Details.html"><button>View  </button></a>                    
                </td>
                <td class="DELET"> <button>delete</button>
                    
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td><img src="./image (3).svg"style="height:50px ;width:50px"></td>
                <td> Dentistry </td>
                
                
                <td> <a href="Appointments Details.html"><button>View  </button></a>                    
                </td>
                <td class="DELET"> <button>delete</button>
                    
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td><img src="./image (2).svg"style="height:50px ;width:50px"></td>
                <td> checkup </td>
                
                
                <td> <a href="Appointments Details.html"><button>View  </button></a>                    
                </td>
                <td class="DELET"> <button>delete</button>
                    
                </td>
            </tr>-->
        </tbody>
    </table>
</div>

<img class="BACKGROUND" src="../HTML/background.svg">

<div class="AddButtons">
 <a href="Set_Appo.php"><button class="SETApp">Set Appointment</button></a>
                    

 <div class="CAT2" ><img src="../images/image 10.09.42 PM.svg " width=" 60px" ;
    height=" 60px"></div>
    <a href="../HTML/Home Manager.php"><button class="SETApp3">Back</button></a>

</div>
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
            <a href="../HTML/Home Manager.html">Home</a>
            <a href="../HTML/Services Manager.html">Services</a>
            <a href="../HTML/About Us Manager.html">About US</a>
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



<!--Footer secton ends-->
</body>
</html>

<?php mysqli_close($db); ?>