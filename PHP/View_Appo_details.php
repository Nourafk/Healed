<?php 
ob_start();
    session_start();
$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

    die('error in db'. mysqli_error($db));
}else{
    $id = $_GET['id'];
    $Q1="select * from Services,Manager_Services where Services.Picture_id = Manager_Services.MServicesid and Serviceid = $id ";
    $run = $db -> query($Q1);
    if(!empty($run->num_rows) && ($run->num_rows > 0)){
        while($row = $run -> fetch_assoc()){
            $service = $row['Service_name'];
            $Date = $row['Date'];
            $Time = $row['Time'];
            $picture=$row['Picture'];
            //$picture22=$row['Picture_id'];
            
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
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../images/logo.svg">
    <title>Appointment Details </title>
    <link rel="stylesheet" type="text/css" href="../HTML/mystyle.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="../HTML/Header and Footer.css">
     <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/3473b55fc1.js" crossorigin="anonymous"></script>
   <script src="script.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
<style>


#addPetCirc3{
    position: relative;
    left: 283.5%;
    top: -31px;
    border-radius: 50%;
    width: 101%;
    /* display: block; */
    margin-left: 50px;
    margin-bottom: 2%;
}
.fieldselect{
    width: 300px;
    height: 50px;
    background: #F0EFEF;
    border: #f7f7f7;
    border-radius: 15px;
    padding-left: 0px;
    box-shadow : none; 
   text-indent: 15px;
   color: #403e63;
}
#dateS {
    width: 300px;
    height: 50px;
    background: #F0EFEF;
    border-radius: 15px;
    border: none;
    text-indent: 15px;
    color: #403e63;
    position: relative;
    left: -8%;
}
.button {
    border: none;
    padding: 7px 80px;
    border-radius: 20px;
    background-color: #635DAD;
    opacity: 62%;
    color: white;
    position: relative;
    top: -75px;
float:right;
margin-right: 100px;
    left: 150px;
}

    .ServiceSelect {
    float: left;
    width: 116px;
    margin-top: 50px;
    position: relative;
    font-size: 1.5em;
    top: -44px;
}
#edit{
    position: absolute;
    left: 37em;

}
#edit1{
    position: absolute;
    left: 15em;
   top: 2em;
}
#edit2{
position: absolute;
    left: 21em;
    top: 2em;
}

header .navbar  a{
  
  color:black ; 
 
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

<h3 class="Heading" style="font-size: 3rem;">Appointment Details</h3>

<form method="post" >

  <div class= "ServiceSelect">
   <lable class = "LablM" style=" position: relative;top: -6px;">  <br>

           
            <img src="Contentttt/<?php echo $picture;?>"  id="addPetCirc3" > 
                 <!--  <a href="#"><img class = "back8" src ="../HTML/edit icon.svg" style=" Position:absolute; left: 72.4%; top:40px"></a>-->
               <!--  <input type="file" name="ProfileImage" onchange="displayImage(this)" id="ProfileImage" style=" display:none; Position: absolute;left: 47.4%; top: 134px;" >-->

    

        
<label style="position: relative;left: 12%;">Service

   <select name="service" class = "fieldselect" id="service" onchange="getpic();" >
   <option value="" selected hidden required="" > <?php echo $service;?> </option>
   <?php   
$qry = "select Service_NAME,MServicesid,Picture from Manager_Services";
$run3 = $db -> query($qry);
if(!empty($run3->num_rows) && ($run3->num_rows > 0)){
    while($row3 = $run3 -> fetch_assoc()){
?>

<option value=<?php echo $row3['MServicesid']?>> <?php echo $row3['Service_NAME']?></option>
<?php 

}
}
?>

</select>
<img id='edit2' src="../images/edit icon.svg">
   </lable>


<div class="PageRows">

   
     <div class= "DateSelect"  style=" position: relative; top: -45%;">
   <lable class = "LablM" style="position: relative; left: 218%;top: -7px;">Date <br>
      <input style="color: gray;position: relative; left: -42%;"  required="" type="Date" id="dateS" value="<?php echo $Date ;?>" name="DATE" >
     </lable>
     
     <img id='edit' src="../images/edit icon.svg"></div>

  
 
  <div class="TimeSelect" style="     position: relative;top: -29%;" ><img id='edit1' src="../images/edit icon.svg">
   <lable class = "LablM"  style=" position: relative;left: 10%; top:20%"> Time <br>
     <input style="color: gray;" type="time" required="" id="timeS" value="<?php echo $Time ;?>" name="TIME" >
     
     </lable>
  
  </div>

     
   
   </div>

   <div class="BackButtonDetails">
   <a href='Appo_List.php'><input type='button' class='button' name="BACK" value='Back'></a>
    <button style="background: none;" name="BACK"><a class="button" >Save</a></button>
      </div>
    </div>
   
</form>
<div class="GirlDogimg"><img src="../HTML/girl and dog.svg" width="300px"></div>
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
           <a href="./Home Manager.html">Home</a>
           <a href="./Services Manager.html">Services</a>
           <a href="./About Us Manager.html">About US</a>
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
 
 
 
 <!--Footer secton ends-->
</body>


<script>
function getpic(){
    let select= document.querySelector('#service');
    let img= document.querySelector('#addPetCirc3');
    var SERVICEID=select.options[select.selectedIndex].value;
   // alert(SERVICEID); 

  
               $.post("json.php",
{ name: SERVICEID}, function(data){
    var Resonse = $.parseJSON(data);
  //  $("#display").append(Resonse[0].Activity);
//alert(Resonse[0].Picture);
   img.src='Contentttt/'+Resonse[0].Picture;



} );
               
            }
            
         
    </script>

</html>

<?php  
 
if(isset($_POST['BACK'])){
   $ss=$service;
    $Service = $_POST['service'];
    $Date = $_POST['DATE'];
    $Time = $_POST['TIME'];

    $QUERY="select Service_NAME from Manager_Services where MServicesid= $Service ";
    if($RESULT = mysqli_query($db, $QUERY)){
        while($row = $RESULT->fetch_assoc()){ 
            $ss= $row['Service_NAME'];}}

   $id = $_GET['id'];
$qry2 ="update Services set Service_name='$ss', Date='$Date',Time='$Time', Picture_id = $Service where Serviceid = $id "; 

$result=mysqli_query($db, $qry2);
if($result){
    //echo '<script>alert("changes updated successfully.!!");</script>';
     header('location: Appo_List.php');
       ob_end_flush();
       }else{
           echo mysqli_error($db);
       }


}
mysqli_close($db); 

?>