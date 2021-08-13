<?php 
ob_start();
include '../shared/config.php';
include '../shared/nav.php';
include '../general/auth_student.php';


if(isset($_POST['send'])){
 
  

  // getting customer [ id ] =>> to make feedback with his [ id ]
  $student_id = $_SESSION['studentid'];
  
    $question = $_POST['question'];
    $insert = "INSERT INTO `questions` VALUES ( NULL , '$question' , $student_id , 0 )";
    $i= mysqli_query($conn , $insert);
    echo ' <div class="alert alert-warning alert-dismissible fade show alert-primary container-sm col-6 "  role="alert"  >
    <strong style="color:blue">DONE!</strong> go to FAQ and waiting your Answer.
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
  <span aria-hidden="true">&times;</span>
  </button>
  </div> ';

    // getting id of question 
    $sel_last_ques = " select * from `questions` where id = (select max(id) from `questions`)";
    $query = mysqli_query( $conn , $sel_last_ques );
    $row = mysqli_fetch_assoc($query);
    $question_id = $row['id'];
     
    if(isset($_SESSION['adminid'])){
      $adminid = $_SESSION['adminid'];
      // insert column into table [ approvedans ]
    $insert = " INSERT INTO `approvedans` VALUES ( NULL , NULL , $question_id , $adminid )";
   
   $query = mysqli_query( $conn , $insert );
   
   header("location:team2/FAQ/listquestions.php");
   
      
    }
   
   
}


?>



<div style=" width:100%; overflow:hidden; font-family: 'Indie Flower', cursive; "><img src="5.jpeg" style="width:50%; height:650px;">
<div class="container col-6" style="float:right;  height:450px; top:150px;  box-shadow: 0 0 17px #333; background-color:#DCDCDC; padding:70px;">
<form class="form-outline my-2 mr-auto my-lg-0" method="POST">
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><h2>Your Question</h2></label>
    <textarea  required name="question" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Question"></textarea>
  </div>
  <button type="submit" name='send' class="btn btn-primary">submit</button>

</form>
<style> body{background-image:url('q5.png');
}</style>
</div>


<?php
include '../shared/script.php';
ob_end_flush(); 
?>