<?php 
 ob_start();
 include '../shared/nav.php';
 include '../shared/config.php';
 include '../general/auth_admin.php';

 //testmessage( $conn , "connection");


 
//======== create Part ========
 if(isset($_POST['send'])){
  $name = $_POST['name'];
  $description = $_POST['desc'];
  $price = $_POST['price'];
  $hours_no=$_POST['hours_no'];
  $article_no=$_POST['article_no'];
  $instid = $_POST['instid'];
 
	$imagename = $_FILES['image']['name'];
	$imagetype = $_FILES['image']['type'];
	$imagetmp = $_FILES['image']['tmp_name'];
  $location="upload/";
  move_uploaded_file( $imagetmp , $location . $imagename );

  $insert = "INSERT INTO `courses` VALUES ( NULL , '$name' , '$description' , '$price' , '$imagename' , '$hours_no' , '$article_no' , $instid )";
  $i = mysqli_query( $conn , $insert );
  header('location:/team2/courses/list_C.php');
  
}


$id = NULL;   // if i put this variable after [  if (isset($_GET['edit'])){  ] statement =>> error


//======== Update Part ========
$name = "";
$description = "";
$price = "";
$hours_no = "";
$article_no = "";
$update = false;  // important
if (isset($_GET['edit'])){
    $update = true;
    $id = $_GET['edit'];
    $select = " SELECT * FROM `courses` WHERE id = $id";
    $s = mysqli_query( $conn , $select );
    $row = mysqli_fetch_assoc($s);

    $name = $row['name'];
    $description = $row['desc'];
    $price = $row['price'];
    $hours_no = $row['hours_no'];
    $article_no = $row['article_no'];
    $instid = $row['instructorid'];
  }  
    if (isset($_POST['update'])){
        $name = $_POST['name'];
        $description = $_POST['desc'];
        $price = $_POST['price'];
        $hours_no = $_POST['hours_no'];
        $article_no = $_POST['article_no'];
        $instid = $_POST['instid'];
        $update = "UPDATE `courses` SET `name` = '$name', `desc` = '$description', `price` = '$price', `hours_no` = '$hours_no', `article_no` = '$article_no' , instructorid = $instid WHERE id = $id";
        $s = mysqli_query($conn, $update);
        header("location:/team2/courses/list_c.php");
    }



 ?>







<div class="container col-6 mt-5 ">
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">Course Name</label>
      <input type="text" name="name" required  value="<?php echo $name ; ?>" class="form-control" placeholder="Course Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <input type="text" name="desc" required  value="<?php echo $description; ?>" class="form-control" placeholder="Course Description">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="text" name="price" required  value="<?php echo $price; ?>" class="form-control" placeholder="Course Price">
    </div>
    
      <div class="form-group">
      <label for="exampleInputEmail1">Number of Hours</label>
      <input type="text" name="hours_no" required  value="<?php echo $hours_no; ?>" class="form-control" placeholder="Hours No.">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Number of Articles</label>
      <input type="text" name="article_no" required  value="<?php echo $article_no; ?>" class="form-control" placeholder="Article No.">
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">Instructor</label> <br>
      <select name="instid" id="" class = "form-control">
            <?php
                $sel = "SELECT * FROM `instructor` ";
                $sss = mysqli_query( $conn , $sel);
                foreach( $sss as $inst){
            ?>
      <option value="<?php echo $inst['id'] ?>"><?php echo $inst['instname'] ?></option>
                  <?php } ?>
      </select>
    </div>



            <?php if($update == false): ?>
    <div class="form-group">
      <label for="exampleInputEmail1">Course Image</label> <br>
      <input type="file" name="image" class="custom-file__input" id="field-upload" required value="<?php echo $c_image; ?>" accept="upload/*">
    </div>
            <?php endif; ?>

 
          <?php if($id): ?>
    <button type="submit" name="update" class="btn btn-info"> update Course </button>
          <?php else: ?>
    <button type="submit" name="send" class="btn btn-primary">Create Course</button>
          <?php endif; ?>

<br><br><br>
    
</form>
</div>


<?php 
 include '../shared/script.php'; 
 ob_end_flush();
?>

