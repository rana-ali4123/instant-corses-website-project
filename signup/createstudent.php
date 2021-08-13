<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';


if (isset($_POST['send'])) {
  $firstname =  $_POST['firstname'];
  $lastname =  $_POST['lastname'];
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $age = $_POST['age'];

   //Check if email is registered before
   $checkEmail = "SELECT * FROM `student` where email = '$email' ";
   $emailQuery = mysqli_query($conn, $checkEmail);
   
   $emailRows  = mysqli_num_rows($emailQuery);

   if($emailRows > 0){
    echo ' <div class="alert alert-warning alert-dismissible fade show alert-danger container-sm col-5 " role="alert" >
    The email address is <strong>already used</strong> before. Please use another email address.
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span>
    </button>
    </div> ';
  }else{
  
  if ($pass !== $cpass ) {
      /*here is alert to password confirm error! */
      echo ' <div class="alert alert-warning alert-dismissible fade show alert-danger container-sm col-5 " role="alert" >
      <strong>NOT SAME PASSWORD!</strong> You should check in on some of password field below.
      <button type="button" class="close" aria-label="Close" data-dismiss="alert">
<span aria-hidden="true">&times;</span>
</button>
    </div> ';
  }else{
    $insert = "INSERT INTO `student` VALUES (NULL , '$firstname' , '$pass' , '$phone' , '$email' , $age , '$lastname' , '$cpass' , NULL , NULL)";
    $i= mysqli_query($conn , $insert);
    
    header("location:/team2/admin/logincustomer.php");
  } 
 }
 
} 

?>



<div class="container">
<div class="header">
 <h1 class="color:red;">SignUp</h1>
</div>
<div class="main">
 <form method="POST">
     <span>
         <i class="fas fa-user"></i>
         <input type="text" required name="firstname" placeholder="First Name" name="">
     </span><br>
     <span>
         <i class="	fas fa-user-alt"></i>
         <input type="text" required name="lastname" placeholder="Last Name" name="">
     </span><br>
     <span>
         <i class="fas fa-mail-bulk"></i>
         <input type="text" required name="email" placeholder="E-mail" name="">
     </span><br>
     <span>
         <i class="fas fa-user-lock"></i>
         <input type="password" required minlength="6" name="password" placeholder="Password" name="">
         <small id="emailHelp"  style="color:gray;" > <br>At least 6 characters*.</small>
     </span><br>
     <span>
         <i class="fas fa-user-check"></i>
         <input type="password" required name="cpassword" placeholder="Confirm Password" name="">
     </span><br>
     <span>
         <i class="fas fa-user-circle"></i>
         <input type="numbers" required name="age" placeholder="Age" name="">
     </span><br>
     <span>
         <i class="fas fa-phone-alt"></i>
         <input type="numbers" required name="phone" placeholder="Phone Number" name="">
     </span><br>
     <button type="submit" name="send">SignUp</button>
 </form>
</div>    
</div>






 




<?php 
include '../shared/script.php';
ob_end_flush();
?>