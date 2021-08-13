<?php 
 ob_start();
 include '../shared/nav.php';
 include '../shared/config.php';


 //testmessage( $conn , "connection"); 
 

if (isset($_POST['send'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM `student` WHERE email = '$email' AND `password` = '$password' ";
    $s = mysqli_query( $conn , $select );
    $numrows = mysqli_num_rows($s);

    if ($numrows > 0){

        $m= mysqli_fetch_assoc($s);
        $_SESSION['studentid'] = $m['id'];  // studentid
        $_SESSION['student'] = $email;   // student email
        header('location:/team2/index.php');
    }else{
        echo " <div class=' text-center mt-5' style = 'color:red; font-size:20;' > invalid email or password please try again </div> ";
    }
} 

?>


 <!--<img src="form1.jpeg"  -->


 <div class="container">
            <div class="header">
             <h1 class="">LogIn</h1>
            </div>
        <div class="main">
             <form method="POST">
                 <span>
                     <i class="fas fa-user"></i>
                     <input type="email" placeholder="Eamil" name="email">
                 </span><br>
                 <span>
                     <i class="fas fa-lock"></i>
                     <input type="password" placeholder="Password" name="password">
                 </span><br>
                 <button type="submit" name="send" >Login</button>
             </form>
        </div>    
        </div>


<?php
include '../shared/script.php';
ob_end_flush(); 

?>

