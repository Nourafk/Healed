<?php 
session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <title>Pet List</title>
    <link rel="stylesheet" type="text/css" href="Nourah's.css">
   
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylsheet" href="../CSS/all.css">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../images/logo.svg">
<title>Healed</title>

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="../HTML/Header and Footer.css">
<script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
<style>

.header_fixed8{
background-color: white;
    box-shadow: 0 10px 20px 0 rgba(152, 131, 245, 0.2);
    width: 950px;
    height: 450px;
    border: 1px ;
    overflow: scroll;
    position: absolute;
    right: 250px;
    padding-left: 50px;
   
    bottom: 60px;
    border-radius: 20px;
    z-index: 2;
    text-align: center;}
    #Reg2{
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    background-color: #635DAD;
    opacity: 62%;
    color: white;
    cursor: pointer;
    position: relative;
    bottom: -550px;
}

#Reg2:hover{
    opacity: 100%;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 50, 0.3);
}


header .navbar  a{
  
  color:black ; 
 
}

</style>
</head>
<body class="NBODY2">
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
    <section>

    <div class="CAPTION" ><strong>My Pet List</strong></div>
<div class="header_fixed8">
    <table>
        <thead>
            <tr>
                
                <th class="HEADER" style="color: #030229; background-color: white;">S No</th>
                
                <th class="HEADER" style="background-color: white;"></th>
                <th class="HEADER" style="color: #030229; background-color: white;">Pet Name</th>
                <th class="HEADER" style="color: #030229; background-color: white;">breed</th>  
                <th class="HEADER" style="background-color: white;"></th>
                    <th class="HEADER" style="background-color: white;"></th>                
            

            </tr>
        </thead>

        <tbody>

        <?php 
        $PETOWNER=$_SESSION['Userrid'];
        $i=1;
        $qry = "select * from PETT where Userid=$PETOWNER";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
$id = $row['Petid'];
$Profile_Pic = $row['Profile_Pic'];
        ?>

      <tr>
      <td><?php echo  $i++; ?></td>
      <td><img src="Contentttt/<?php echo $Profile_Pic;?>" height="50px" width="50px"></td>
      <td> <?php echo $row['Pet_Name'] ?> </td>
      <td> <?php echo $row['Breed'] ?> </td>

       
      <td><a href="Edit_Pet_Profile.php?id=<?php echo $id;?>"><button >View</button></a>
                    
                    </td>
                    <td class="DELET"><a href="delete.php?id= <?php  echo $id; ?>" onclick = "return confirm('Are you sure?')"><button>delete</button></a>
                        
                    </td>
    </tr>

    <?php 

    }
}


    ?>

           <!-- <tr>
                <td>1</td>
                <td><img src="../HTML image (1).svg"  height="50px" width="50px"></td>
                <td> Lily </td>
                <td> Ragdoll </td>
                
                <td> <a href="../HTML MahaB Edit Pet Profile Page DD.html" ><button >View  </button></a>
                    
                </td>
                <td class="DELET"><a href="../HTML my pit list pet owner2.html">  <button>delete</button></a>
                    
                </td>

            </tr>

            <tr>
                <td>2</td>
                <td><img src="./image (1).svg"  height="50px" width="50px"></td>
                <td> Broc </td>
                <td> Chow Chow </td>
                
                <td> <a href="./MahaB Edit Pet Profile Page.html"><button >View  </button></a>
                    
                </td>
                                <td class="DELET"> <button>delete</button>
                    
                </td>                    
            </tr>

            <tr>
                <td>3</td>
                <td><img src="./image (1).svg"  height="50px" width="50px"></td>
                <td> Myla </td>
                <td> Finch </td>
               
                <td> <a href="./MahaB Edit Pet Profile Page.html"><button >View  </button></a>
                    
                </td>
                                    <td class="DELET"> <button>delete</button>
                    
                    </td> 
            </tr>
            <tr>
                <td>4</td>
                <td><img src="./image (1).svg"  height="50px" width="50px"></td>
                <td> Cava </td>
                <td> Schnoodle </td>
               
                <td> <a href="./MahaB Edit Pet Profile Page.html"><button >View  </button></a>
                    
                </td>
                                    <td class="DELET"> <button>delete</button>
                    
                    </td> 
            </tr>
            <tr>
                <td>5</td>
                <td><img src="./image (1).svg"  height="50px" width="50px"></td>
                <td> Kiwi </td>
                <td> Ragdoll </td>
               
                <td> <a href="./MahaB Edit Pet Profile Page.html"><button >View  </button></a>
                    
                </td>
                                <td class="DELET"> <button>delete</button>
                    
                </td> 
            </tr>
            <tr>
                <td>6</td>
                <td><img src="./image (1).svg"  height="50px" width="50px"></td>
                <td> Oreo </td>
                <td> Chow Chow </td>
                
                <td> <a href="./MahaB Edit Pet Profile Page.html"><button >View  </button></a>
                    
                </td>
                                <td class="DELET"> <button>delete</button>
                    
                </td> 
            </tr>
            <tr>
                <td>7</td>
                <td><img src="./image (1).svg"  height="50px" width="50px"></td>
                <td> Mellow </td>
                <td> Schnoodle </td>
                
                <td> <a href="./MahaB Edit Pet Profile Page.html"><button >View  </button></a>
                    
                </td>
                                <td class="DELET"> <button>delete</button>
                    
                </td> 
            </tr>
            <tr>
                <td>8</td>
                <td><img src="./image (1).svg"  height="50px" width="50px"></td>
                <td> lolly </td>
                <td> Finch </td>
                
                <td> <a href="./MahaB Edit Pet Profile Page.html"><button >View  </button></a>
                    
                </td>
                                <td class="DELET"> <button>delete</button>
                    
                </td> 
            </tr>-->
        </tbody> 
    </table>
</div>
<a href="../HTML/Home Pet Owner.php"><input type="button" name="Reg2" id="Reg2" value="Back"></a>

<img class="BACKGROUND" src="../HTML/background.svg">
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