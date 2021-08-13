<?php 
 ob_start();
 include '../shared/nav.php';
 include '../shared/config.php';

 //testmessage( $conn , "connection");


 

if (isset($_POST['send'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = "SELECT * FROM `admin` WHERE email = '$username' and password = '$password' ";
    $s = mysqli_query( $conn , $select );
    $numrows = mysqli_num_rows($s);

    if ($numrows > 0){
        $m= mysqli_fetch_assoc($s);
        $_SESSION['adminid'] = $m['id'];    // adminid
        $_SESSION['admin'] = $username;     // adminemail
        header('location:/team2/admin/home_admin.php');
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
                     <input type="email" placeholder="Email" name="username">
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
 include '../shared/footer.php';

 ob_end_flush(); ?>

