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
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../images/logo.svg">
    <title>Set Available Appointment </title>
    <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="../HTML/Header and Footer.css">
     <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/3473b55fc1.js" crossorigin="anonymous"></script>
 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>

   <style>

#addPetCirc3{
   
    border-radius: 50%;
    width: 140px;
    height: 140px;
    margin-left: 190px;
}

header .navbar  a{
  
  color:black ; 
 
}

}


   </style>
</head>
<body>
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
  <section class="AppointmentSec">
     <div class="PageBase">
<div class="PageRows">

<h3 class="Heading" style="font-size: 3rem;">Set Available Appointments</h3>
<form action='Set_Appo.php' method ='post' enctype="multipart/form-data">
  <div class= "ServiceSelect">
   <lable class = "LablM"> Service <br>
      <select name= "petname" class = "fieldselect" aria-placeholder="Choose Service" id="service" onchange="getpic();">
         <option value="" disabled selected hidden>Choose Service</option>
        <?php   

$qry = "select MServicesid,Picture,Service_NAME from Manager_Services";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){
?>

<option value=<?php echo $row['MServicesid'] ?> <?php $Path=$row['Picture']?> > <?php echo $row['Service_NAME'] ?> </option>
       <!--  <option class="op"> Grooming And Bathing </option>
          <option class="op"> Dentistry </option>
          <option class="op"> Boarding </option>-->

          <?php 

}
}
?>
          </select>
   </lable>
   
     
  </div>
  
  


     

     <label>
     <img src="../images/camera2.svg" id="addPetCirc3" > 
                 <!--  <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 72.4%; top:40px"></a>-->
                <!-- <input type="file" name="ProfileImage" onchange="displayImage(this)" id="ProfileImage" style=" display:none; Position: absolute;left: 47.4%; top: 134px;" >-->
</label>

  

</div>
<div class="PageRows">

   
     <div class= "DateSelect" >
   <lable class = "LablM">Date <br>
      <input type="Date" id="dateS" required name="DATE">
     </lable>
     </div>

 
  <div class="TimeSelect" >
   <lable class = "LablM"> Time <br>
     <input type="time" id="timeS" required name="TIME">
     </lable>
    
  </div>

     
     
   
   </div>
   <img  src="Parrot.svg" class="parrotimg">
   <div class="ButtonRow">
   <a href='Appo_List.php'> <input class="button" type="button"  value="Back"></a>
         
         <input class="button" type="submit" name="set_Appointment" value="Add Appointment">
         
   </div>

   </div>
   
</form>
  
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
<script>
    function displayImage(e){
      window.alert('jjbbnm');
      if(e.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
               var hh= document.querySelector('#camera').setAttribute('src',e.target.result);
                hh.className='newpic';
                window.alert('jjj');
            }
            reader.readAsDataURL(e.files[0]);

        }
    }

    function getpic(){
    let select= document.querySelector('#service');
    let img= document.querySelector('#addPetCirc3');
    var SERVICEID=select.options[select.selectedIndex].value;
   // alert(SERVICEID); 

  
  $.post("json.php",
{name: SERVICEID}, function(data){
    var Resonse = $.parseJSON(data);
  //  $("#display").append(Resonse[0].Activity);
//alert(Resonse[0].Picture);
   img.src='Contentttt/'+Resonse[0].Picture;



} );
               
            }

    </script>


</html>

<?php   


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
       die( "<p>Could not connect to database</p>" );

    if ( !mysqli_select_db( $database, "healed") )
       die( "<p>Could not open URL database</p>" );

       $Service = $_POST['petname'];
       $Date = $_POST['DATE'];
       $Time = $_POST['TIME'];
       //$Picture =  $_POST['camera'];
       if(isset($_POST['set_Appointment'])){
        $profileImageName = time().'_'.$_FILES['profileImage']['name'];
        $target = 'Contentttt/'.$profileImageName;
        move_uploaded_file($_FILES['profileImage']['tmp_name'], $target);   
        $QUERY="select Service_NAME from Manager_Services where MServicesid= $Service ";
        $RESULT = mysqli_query($database, $QUERY);
    

      
        while ($row = $RESULT->fetch_assoc()) { 
            $PicName = $row['Service_NAME'];
    $query="INSERT INTO Services (Service_name,Date,Time,Picture_id) VALUES ('". $PicName."','".$Date."','". $Time."', $Service);";}
    $result=mysqli_query($database, $query);

    if($result){
        header("location: Appo_List.php");
ob_end_flush();}
    else{
        echo "An error occured while inserting into the Services table.";}
}

mysqli_close($db);}
?>

