<?php 
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../general/auth_Student.php';




if(isset($_POST['feedback'])){

  // getting customer [ id ] =>> to make feedback with his [ id ]
  $student_email = $_SESSION['student'];
  $select = "SELECT * FROM `student` WHERE email = '$student_email' ";
  $s = mysqli_query( $conn , $select );
  $row = mysqli_fetch_assoc($s);
  $student_id = $row['id'];
  
  $feed = $_POST['feed'];
  $insert = "INSERT INTO `feedback` VALUES ( NULL , '$feed', $student_id )";
  $i = mysqli_query( $conn , $insert );
  echo ' <div class="alert alert-warning alert-dismissible fade show alert-primary container-sm col-6 "  role="alert"  >
  <strong style="color:blue">THANK YOU!</strong> your opinion matters.
  <button type="button" class="close" aria-label="Close" data-dismiss="alert">
<span aria-hidden="true">&times;</span>
</button>
</div> ';
}


if(isset($_POST['back'])){
  header('location:/team2/index.php');
}

?>




<div style="background-image: url('hhh.jpg'); width:100%;  ">

<div class="card-group  container">
  <div class="card "  style="border:0px;" >
    <img src="9.jpeg"  alt="..." style="width:100%; margin:5px;">
    
   
    
  </div>
  <div class="card " style="border:0px;">
    <img src="2.jpg"alt="..." style="width:100%;  margin:5px;">
  
  </div>
  <div class="card" style="border:0px;" >
    <img src="10.jpeg"alt="..." style="width:100%;  margin:5px;"> 
  
  </div>
</div>



<div class="container col-7 mt-5 " style="  box-shadow: 0 0 17px #333; background-color:#DCDCDC; height:300px; font-family: 'Indie Flower', cursive;">
<form method="POST" class="form-outline my-2 mr-auto my-lg-0">
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><h3 >Your Feedback</h3></label>
    <textarea   required type="text"  name="feed" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Please Enter Your FeedBack"> </textarea>
  </div>

  <button type="submit" name='feedback' class="btn btn-info">Submit</button>
  <button type="submit" name="back" class="btn btn-secondary" >  Back Home Page </button>

</form>
</div>

<div class="card-group  container mt-5">
  <div class="card "  style="border:0px;" >
    <img src="1.jpg"  alt="..." style="width:100%; margin:5px;">
    
   
    
  </div>
  <div class="card " style="border:0px;">
    <img src="11.jpeg"alt="..." style="width:100%;  margin:5px;">
  
  </div>
  <div class="card" style="border:0px;" >
    <img src="12.jpeg"alt="..." style="width:100%;  margin:5px;"> 
  
  </div>
</div>



<?php
include '../shared/script.php';
include '../shared/footer.php';
ob_end_flush();

?>