
<?php 
require_once('../phpmailer/PHPMailerAutoload.php');
ob_start();
session_start();

$db = mysqli_connect("localhost" , "root" ,"","healed");
$errors = [];
if(isset($_POST['resetM'])){
    $email=$_POST['Email'];
    $_SESSION['email']=$email;
  

    $emailCheckQuery ="Select * from Manager where Email ='$email'";
    $emailCheckResult = mysqli_query($db,$emailCheckQuery);

    if($emailCheckResult){
        if(mysqli_num_rows($emailCheckResult)>0){
            $code = rand(999999,111111);
            $updateQuery = "update Manager set code = '$code' where Email ='$email'";
            $updateResult =mysqli_query($db,$updateQuery);
            if($updateResult){
       
                $mail =new PHPMailer();
                $mail ->isSMTP();
                $mail ->SMTPAuth=true;
                $mail ->SMTPSecure = 'ssl';
                $mail ->Host ='smtp.gmail.com';
                $mail ->Port ='465';
                $mail ->isHTML();
                $mail ->Username= 'healedpetclinic@gmail.com';
                $mail ->Password = 'HHhh@1234';
                $mail ->SetFrom('no-reply@healed.com');
                $mail ->Subject = "Reset Your Password ";
                $mail ->Body =  "Your Verification code is $code ";
                $mail ->AddAddress($email);
        
                if($mail ->Send()){
               $message = " We Have Sent a verification code to your Email<br> '$email'";
                $_SESSION['message']=$message;
                header('location: VerifyEmailManager.php');
                }else{
                  $errors['otp_errors']='faild sending code';
                }
            }else{
                $errors['db_errors']='failed inserting data';
            }

        }else{
            $errors['invalidEmail'] = "Invalid Email Address";
        }
    }

}

if(isset($_POST['verifyEmail'])){
    $_SESSION['message']="";
    $otpVerify = mysqli_real_escape_string($db,$_POST['otpVerify']);
    $verifyQuery = "Select * from Manager where code ='$otpVerify'";
    $runVerifyQuery = mysqli_query($db,$verifyQuery);
    if($runVerifyQuery){
        if(mysqli_num_rows($runVerifyQuery)>0){
            $newQuery ="update Manager set code = '0'";
            $run = mysqli_query($db,$newQuery);
            header("location: NewPassManager.php");
        }else{
            $errors['verficication_error']="Invalid Verification Code";

        }
    }else{
        $errors['db_error']="Failed while checking Verification code from database ";

    }

    
}
if(isset($_POST['ChangePass'])){
    $password = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);


    if( strlen($password) < 8|| !$number ||  !$uppercase || !$specialChars || !$lowercase ){
        $errors['password_error'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    }else{


        if($password  != $confirmpassword){
            $errors['password_error'] = 'Password not matched';
        }else{
            $password = md5($_POST['newpassword']); 
            $email= $_SESSION['email'];
            $code =0;
            $updatePassword ="UPDATE Manager SET Pass = '$password' WHERE Email = '$email'";
            $runVerifyQuery = mysqli_query($db,$updatePassword) or die("Query Failed");
            session_unset();
            session_destroy();
            header('location: Login page admin.php');
       
        }
    }

}
?>