
<?php 
ob_start();
session_start();

$db = mysqli_connect("localhost" , "root" ,"","healed");

if(!$db){

  die('error in db'. mysqli_error($db));
}else{

  $Q1="select * from AboutUs where AboutId = 1";
  $run = $db -> query($Q1);
  if(!empty($run->num_rows) && ($run->num_rows > 0)){
      while($row = $run -> fetch_assoc()){
          $AboutD = $row['AboutDescription'];
          $CardPic1=$row['CardPic_1'];
          $CardPic2=$row['CardPic_2'];
          $CardPic3=$row['CardPic_3'];
          $CardD1 = $row['CardDescription_1'];
          $CardD2 = $row['CardDescription_2'];
          $CardD3 = $row['CardDescription_3'];
          

  }
}
/*$AboutDesc = $_POST['AboutUs-P'];
$CardDc1 = $_POST['cardDescription1'];
$CardDc2 = $_POST['cardDescription2'];
$CardDc3 = $_POST['cardDescription3'];*/
}
$PETOWNER=$_SESSION['Managerid'];

$qry = "select * from Manager where Managerid=$PETOWNER";
$run = $db -> query($qry);
if(!empty($run->num_rows) && ($run->num_rows > 0)){
    while($row = $run -> fetch_assoc()){

$Profile_Pic = $row['Profile_Pic'];}}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.svg">
    <title>About Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./test.css">
  
        <link rel="stylesheet" href="./Header and Footer.css">

    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
 
<style>
header .navbar  a{
  
  color:black ; 
 
}

</style>
</head>

<body>
    <!-- header section starts  -->

    <header>

      <a href="./Home Manager.html" class="logo"><img src="../images/logo.svg" alt="logo" height="50rem" ><span>ealed</span></a>

      <input type="checkbox" id="menu-bar">
      <label for="menu-bar" class="fas fa-bars"></label>
  
      <nav class="navbar">
        <ul class="nav-list">
            <li  ><a href="../HTML/Home Manager.php">Home</a>
                <ul class="sub-menu" id="sub-menu-arrow"> 
                  <li > <a href="../PHP/Add_service.php">Add a New Service</a></li>
                  <li><a href="../PHP/Appo_List.php">Set a New Appointment</a></li>
                  <li><a href="../PHP/Request_List_Manager.php">View Requests List</a></li>
  
                  <li><a href="../PHP/upcoming and previous manager.php">View Appointments List</a> </li>
          
                </ul>
              </li>
          
            
           <li><a href="../PHP/Services_Manager.php">Services</a></li> 
           <li><a href="../HTML/About Us Manager.php">About Us</a></li> 
           <li class="move-right-btn" ><a href="#"id="profile"> <img height="50rem" src="../PHP/Contentttt/<?php echo $Profile_Pic ?> " ></a>
                <ul class="sub-menu" id="sub-menu-arrow2"> 
                    <li ><a href="#">View Profile</a></li>
                    <li><a href="../HTML/LnadingPage.html">Sign Out</a></li>
            
                  </ul></li>
          </ul>
          <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
  
  
      </nav>
  
  
  </header>
  
  <!-- header section ends -->

<!-- Services secton starts -->
<section class="Services" id="Services">
<form action='About Us Manager.php' method ='post' enctype="multipart/form-data">
    <h1 class="heading">About Us </h1>
   <!--<p id='AboutUs-P' class="AboutUs-P">We are a full-service animal hospital that offers a wide selection of comprehensive veterinary services to maintain your pet's health, from routine exams and vaccinations to dental care, geriatric care, surgery, and internal medicine. </p>-->
    <textarea name='AboutUs-P' class='AboutUs-P' id='AboutUs-P' readonly="" ><?php echo  $AboutD ?></textarea>

    <div class="box-container">
        
            <ul class="cards">
                <li class="Aboutuscard">
                 <!-- <a href="" class="card">-->
                 <div class="card">
                    <img src="<?php echo  "content2/".$CardPic1 ?>"  id='adPic1' class="card__image" alt=""  />
                    <input type="file" name="Aboutimg1" style="display:none"  id="AboutUsImage1" value=<?php echo  "content2/". $CardPic1 ?>>
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <div class="card__header-text">
                          
                          <h3 class="card__title">Our Pet Care Philosophy</h3> 
                          
                              
                        </div>
                      </div>
                      <textarea class='cardDescription' id='cardDescription1' name='cardDescription1'readonly="" ><?php echo  $CardD1 ?></textarea>
                    </div>
                    
 
                 <!-- </a>-->
</div>
                  
                </li>
                <li class="Aboutuscard">
                      <!-- <a href="" class="card">-->
                      <div class="card">
                      <img id='adPic2' src="<?php echo  "content2/".$CardPic2 ?>" class="card__image" alt=""   />
                      <input type="file" name="Aboutimg2" style="display:none"  id="AboutUsImage2" >
                      <div class="card__overlay">
                        <div class="card__header" >
                          <svg class="card__arc" xmlns="http://www.w/2000/svg" ><path /></svg>                     
                          <div class="card__header-text">
            
                            <h3 class="card__title">Why Trust Us?</h3>            
                          </div>
                        </div>
                        <textarea class='cardDescription' id='cardDescription2' name='cardDescription2' readonly="" ><?php echo  $CardD2 ?></textarea>
   
                      </div>
                    <!-- </a>--> 
                    </div>    
                  </li>
                  <li class="Aboutuscard">
                <!-- <a href="" class="card">-->
                <div class="card">
                      <img src="<?php echo  "content2/".$CardPic3 ?> " id='adPic3'  class="card__image" alt=""   />
                      <input type="file" name="Aboutimg3" style="display:none"  id="AboutUsImage3" >
                      <div class="card__overlay">
                        <div class="card__header">
                          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                          <div class="card__header-text">
                            <h3 class="card__title">Where To find us?</h3>            
                          </div>
                        </div>
                        <textarea class='cardDescription' id='cardDescription3'name='cardDescription3' readonly="" ><?php echo  $CardD3 ?></textarea>
                      </div>
                      <!-- </a>-->   
                      </div>  
                  </li>

                </ul>
        </div>
        <input class="button" type="button" name="EditBtn" value="Edit" onclick='editFunc()'>
        <input class="button" type="submit" name="SaveBtn" value="Save" onclick='SaveFunc()'>
</form>
</section>


<!-- Services secton ends -->

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


<script>
function editFunc(){

  document.getElementById("AboutUs-P").readOnly = false;
  document.getElementById("AboutUs-P").style.cursor='text';
  CardDesc1=document.getElementById("cardDescription1");
  CardDesc2=document.getElementById("cardDescription2");
  CardDesc3=document.getElementById("cardDescription3");
  AboutImage1 =document.getElementById('#AboutUsImage1');
  AboutImage2 =document.querySelector('#AboutUsImage2');
  AboutImage3 =document.querySelector('#AboutUsImage3');
  CardDesc1.readOnly = false;
  CardDesc2.readOnly = false;
  CardDesc3.readOnly = false;
  CardDesc1.style.cursor='text';
  CardDesc2.style.cursor='text';
  CardDesc3.style.cursor='text';


document.querySelector('#adPic1').onclick=function (){

  document.querySelector('#AboutUsImage1').click();
}
document.querySelector('#adPic2').onclick=function (){

  document.querySelector('#AboutUsImage2').click();
}
document.querySelector('#adPic3').onclick=function (){

  document.querySelector('#AboutUsImage3').click();
}
  document.querySelector('#AboutUsImage1').onchange=function (){

  displayImage1(this);
}
document.querySelector('#AboutUsImage2').onchange=function (){

  displayImage2(this);
}
document.querySelector('#AboutUsImage3').onchange=function (){

  displayImage3(this);
}

function displayImage1(e){
    if(e.files[0]){
var reader = new FileReader();
reader.onload = function(e){
  document.querySelector('#adPic1').setAttribute('src', e.target.result);
}
reader.readAsDataURL(e.files[0]);
    }
}
function displayImage2(e){
    if(e.files[0]){
var reader = new FileReader();
reader.onload = function(e){
  document.querySelector('#adPic2').setAttribute('src', e.target.result);
}
reader.readAsDataURL(e.files[0]);
    }
}
function displayImage3(e){
    if(e.files[0]){
var reader = new FileReader();
reader.onload = function(e){
  document.querySelector('#adPic3').setAttribute('src', e.target.result);
}
reader.readAsDataURL(e.files[0]);
    }
} 

}
function SaveFunc(){

  document.getElementById("AboutUs-P").readOnly = true;
  document.getElementById("AboutUs-P").style.cursor='default';
  CardDesc1=document.getElementById("cardDescription1");
  CardDesc2=document.getElementById("cardDescription2");
  CardDesc3=document.getElementById("cardDescription3");
  CardDesc1.readOnly = true;
  CardDesc2.readOnly = true;
  CardDesc3.readOnly = true;
  CardDesc1.style.cursor='default';
  CardDesc2.style.cursor='default';
  CardDesc3.style.cursor='default';
  AboutImage1 =document.querySelector('#AboutUsImage1');
  AboutImage2 =document.querySelector('#AboutUsImage2');
  AboutImage3 =document.querySelector('#AboutUsImage3');
  AboutImage1.readOnly = true;
  AboutImage2.readOnly = true;
  AboutImage3.readOnly = true;

}
</script>

<!--Footer secton ends-->

</body>


</html>
<?php   


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
       die( "<p>Could not connect to database</p>" );

    if ( !mysqli_select_db( $database, "healed") )
       die( "<p>Could not open URL database</p>" );

       $AboutDescription = $_POST['AboutUs-P'];
       $CardDesc1 = $_POST['cardDescription1'];
       $CardDesc2 = $_POST['cardDescription2'];
       $CardDesc3 = $_POST['cardDescription3'];
       
       //$query="INSERT INTO `AboutUs`( `AboutDescription`, `CardDescription_1`, `CardPic_1`, `CardDescription_2`, `CardPic_2`, `CardDescription_3`, `CardPic_3`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]');";


       if(isset($_POST['SaveBtn'])){
       
        $ImageName1= $_FILES['Aboutimg1']['name'];
        $target1 = "content2/". $ImageName1;
        if(move_uploaded_file($_FILES['Aboutimg1']['tmp_name'], $target1)){
          $CardPic1=$ImageName1;
        }else{
          $ImageName1=$CardPic1;
        }
       $ImageName2= $_FILES['Aboutimg2']['name'];
        $target2 = "content2/".$ImageName2;
        if(move_uploaded_file($_FILES['Aboutimg2']['tmp_name'], $target2)){
          $CardPic2=$ImageName2;
        } else{
          $ImageName2=$CardPic2;
        }
        $ImageName3= $_FILES['Aboutimg3']['name'];
        $target3 = "content2/". $ImageName3;
        if(move_uploaded_file($_FILES['Aboutimg3']['tmp_name'], $target3)){
          $CardPic3=$ImageName3;

        } else{
          $ImageName3=$CardPic3;
        }
        echo '<script>alert("jgggkgkg");</script>';
        //$query="INSERT INTO AboutUs (AboutDescription,CardDescription_1,CardPic_1,CardDescription_2,CardPic_2,CardDescription_3,CardPic_3) VALUES ('".$AboutDescription."','".$CardDesc1."','".' $CardPic1'."','".$CardDesc2."','".'$CardPic2'."','".$CardDesc3."', 'hhh');";
        $qry2 ="update AboutUs set AboutDescription='$AboutDescription', CardDescription_1='$CardDesc1',CardPic_1='$ImageName1', CardDescription_2 = '$CardDesc2',CardPic_2='$ImageName2',CardDescription_3='$CardDesc3',CardPic_3='$ImageName3' where AboutId = 1 "; 

   
    $result=mysqli_query($database,$qry2);
 

  if($result){
        header("location: About Us Manager.php");
ob_end_flush();}
    else{
                  echo "An error occured while inserting into the Services table.";}
    }
}

mysqli_close($db);
?>

