<?php
ob_Start();
include '../shared/nav.php';
include '../shared/config.php';


$id=$_GET["id"];
$select="SELECT * FROM `courses` WHERE id =$id   ";
$s=mysqli_query ($conn ,$select);
$course = mysqli_fetch_assoc($s);




// ===== course reservation ====

if(isset($_POST['buynow'])){

  $studentid = $_SESSION['studentid'];

  if($studentid){

    $id=$_GET['id'];  // courseid
    
    // testing that he didn't take the course
    $select = " SELECT * FROM `taken` WHERE studentid = $studentid AND courseid = $id ";
    $sq = mysqli_query( $conn , $select );
    $numrows = mysqli_num_rows($sq);

    if($numrows > 0){
      echo "<p style='color:red;'>you already enrolled this course</p>";
    }else{
      $insert = "INSERT INTO `taken` VALUES ( $studentid , $id )";
      $i = mysqli_query( $conn , $insert );
      header('location:/team2/courses/profilepage.php');
    }  
    
  }else{

    header('location:/team2/admin/logincustomer.php');

  }

}


?>

<style>
body {
  background-image: url('hhh.jpg');
}
</style>

  <div style="height:300px;  background-image: linear-gradient( #e6e6e6,black); " >
    <?php foreach ($s as $select){ ?> 
  <h1 style="color:white; padding:50px; text-align:left;   font-size: 90px;   font-style: oblique;"><?php echo $course ["name"] ;?></h1>
 <h1 style="color:white; padding:-20px; padding-left:300px;  font-style: oblique;"> <?php echo $course ["price"] ;?>.EG <i class="	fas fa-money-bill-wave"></i>
 <del>5500 .EG</del></h1>

 
<div class="card m-3 " style="width: 20rem; left: 1200px; top:10px; margin-top:-250px !important; position:sticky; border: 1px solid black !important;
	outline: 1px solid black !important;
	outline-offset: 10px !important; ">
  <img src="upload/<?php echo $course['image']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $course["name"]; ?></h5>
   
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">HOURS NO. <i  style="color:blue; size:30px;padding-left:15px; "class="fas fa-user-clock"> <?php echo $course['hours_no']?></i> </li>
    <li class="list-group-item"> ARTICLES<i  style="color:blue;size:30px; padding-left:15px; "class="far fa-newspaper"> <?php echo $course['article_no']?></i></li>	
    <li class="list-group-item"><i  style="color:blue;size:30px; "class="	fas fa-certificate"> <?php echo "Certification when complete"; ?></i></li>
  </ul> 
  <div class="card-body">
    <!-- stars herrrrrrre-->
  <div class="star-rating align-items-center "><div class="stars-container"><div  style="color:orange;"class="stars-inactive">
   <i class="	fas fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star">

   </i><i class="fa fa-star"></i></div> <span class="score"> 4.5 </span> <span class="total-votes">
     (ratings 207)</span>  | <span class="students-enrolled">students enrolled 21,906</span></div> </div>
     
     <form method="POST">
     <button type="submit" name="buynow" class="btn btn-danger" onclick="return confirm(' Sure to Buy The Course ? ')" ><i class="	fas fa-shopping-cart "></i>  BUY NOW< </button>
     </form>
    
  </div></div>





  <?php
       $instructorid = $course['instructorid'];
       $sel = "SELECT * from `instructor` WHERE id = $instructorid ";
       $ss = mysqli_query( $conn , $sel);
       $row = mysqli_fetch_assoc($ss);

  ?>




  <div class="card" style="width: 20rem; left:1200px">
  <div class="card-body">
    <h4 class="card-title"> Instructor :</h4>
    <h5 class="card-subtitle mb-2 text-muted"><?php echo $row["instname"]; ?></h5>
    <p class="card-text"><?php echo $row["description"]; ?></p>
   
  </div>
</div>
</div></div>
<div style="padding-bottom: 60px;">
<h3><u style="margin:10px">Description :</u></h3>
<div style="width:60%;  margin:20px; border:  #e6e6e6 solid 1px;  ">

<h5 style="padding:15px;"><?php echo $course ["desc"] ;?></h5>

</div>
<div style="width:60%;  margin:20px; border:  #e6e6e6 solid 1px;  ">
 <h2 style="padding:10px; color:blue"><i class="	far fa-laugh-wink	"></i>What you'll learn ?</h2>

<br>
<i class="	fas fa-laptop-code"></i>How to develop algorithms for the statistical analysis of big data.<br>
<i class="	fas fa-laptop-code"></i>Knowledge of big data applications.<br>
<i class="	fas fa-laptop-code"></i> How to use fundamental principles used in predictive analytics.<br>
<i class="	fas fa-laptop-code"></i>Evaluate and apply appropriate principles, techniques and theories to large-scale data science problems.
</div>

</div>
</div>

<?php } ?>

</div>





<?php
include '../shared/footer.php';
include '../shared/script.php';
ob_end_flush();
?>