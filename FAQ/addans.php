<?php 
 ob_start();
 include '../shared/nav.php';
 include '../shared/config.php';
 include '../general/auth_admin.php';

 //testmessage( $conn , "connection");





/*

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
}

if(isset($_POST['back'])){
  header('location:/team2/index.php');
}

*/



//====== receiving [ question id ] from page [ listquestions.php ] ========
// $ans = "";
 if (isset($_GET['id'])){
    $s_id = $_GET['id'];
    $select = "SELECT * FROM questions LEFT JOIN approvedans on approvedans.questid = questions.id where questions.id = $s_id";

    $s = mysqli_query($conn , $select);
    $fetch = mysqli_fetch_assoc($s);
    $question = $fetch['question'];
    $ans = $fetch['approved'];
    $ques_id = $fetch['id'];
 }





//======== add answer into DB ========
 if(isset($_POST['answer'])){

  // getting admin [ id ] =>> to enter it into the database =>> table [ approvedans ]
  $admin_email = $_SESSION['admin'];
  $select = "SELECT * FROM `admin` WHERE `email` = '$admin_email' ";
  $s = mysqli_query( $conn , $select );
  $row = mysqli_fetch_assoc($s);
  $admin_id = $row['id'];

  $s_id = $_GET['id'];
  $selectAnswer = "SELECT * FROM approvedans WHERE questid = $s_id";
  $selectQuery = mysqli_query($conn, $selectAnswer);
  $numrows = mysqli_num_rows($selectQuery);
// adding answer and changing [ admin id ] =>> table [ approved ans ]
$r = $_POST['response'];
if($numrows > 0){
  $update = "UPDATE `approvedans` SET `approved` = '$r' , `adminid` = $admin_id where `questid` = $s_id"; // error =>> it must be [ update query ] not [ insert query ]
  $i = mysqli_query($conn , $update);
}
else{
  // changined value of [ isapproved ] column into 1
  $insertAnswer = "INSERT INTO `approvedans` VALUES (NULL, '$r', $s_id, $admin_id)";
  $insertQuery = mysqli_query($conn, $insertAnswer);
    $update = " UPDATE `questions` SET `is_approved` = 1 where id = $s_id"; // error =>> it must be [ update query ] not [ insert query ]
    $i = mysqli_query($conn , $update);
  
}


 header('location:/team2/FAQ/listquestions.php');
  
}


?>




<div class="container col-6 mt-5 ">
<form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1"><?php  echo $question ;?></label>
      <input type="text" name="response" value="<?php echo $ans; ?>"class="form-control" placeholder="Answer">
    </div>

    <button type="submit" name="answer" class="btn btn-primary"> Add Answer </button>    
</form>
</div>




 <?php 
  include '../shared/script.php';
  include '../shared/footer.php';
 ob_end_flush();
 ?>

