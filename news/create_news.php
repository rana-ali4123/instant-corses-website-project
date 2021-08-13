<?php 
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../general/auth_admin.php';
 

 //testmessage( $conn , "connection");


 
//======== create Part ========
 if(isset($_POST['send'])){
  // getting admin [ id ] =>> to enter it into the database =>> table [ approvedans ]
  $admin_email = $_SESSION['admin'];
  $select = "SELECT * FROM `admin` WHERE email = '$admin_email' ";
  $s = mysqli_query( $conn , $select );
  $row = mysqli_fetch_assoc($s);
  $admin_id = $row['id'];

  $imagename = $_FILES['image']['name'];
	$imagetype = $_FILES['image']['type'];
	$imagetmp = $_FILES['image']['tmp_name'];
  $location="upload/";
  move_uploaded_file( $imagetmp , $location . $imagename );

  $content = $_POST['content'];
  $title = $_POST['title'];
  $insert = "INSERT INTO `news` VALUES (NULL , '$content' , '$title' , $admin_id , '$imagename' )";
  $i = mysqli_query( $conn , $insert );
  header('location:/team2/news/list_news.php');
  
}





$id = NULL;   // if i put this variable after [  if (isset($_GET['edit'])){  ] statement =>> error

//======== Update Part ========
$content = "";
$title = "";
$update = false;
if (isset($_GET['edit'])){
    $update = true;
    $news_id = $_GET['edit'];
    $select = " SELECT * FROM `news` WHERE id = $news_id";
    $s = mysqli_query( $conn , $select );
    $row = mysqli_fetch_assoc($s);
    $content = $row['content'];
    $title = $row['title'];
}   
    if (isset($_POST['update'])){
        $content = $_POST['content'];
        $title = $_POST['title'];
        $update = " UPDATE `news` SET content = '$content' , title = '$title' WHERE  id = $news_id ";
        $s = mysqli_query( $conn , $update );
        header("location:/team2/news/list_news.php");
    }


  

 ?>




<div class="container col-6 mt-5 ">
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">News Content</label>
      <textarea type="text"  name="content" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Please Enter Your FeedBack"><?php echo $content; ?> </textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">News Title</label>
      <input type="text" name="title"  value="<?php echo $title; ?>" class="form-control" placeholder="Please Enter Your Name">
    </div>

    <?php if($update == false): ?>

    <div class="form-group">
      <label for="exampleInputEmail1">Course Image</label> <br>
      <input type="file" name="image" class="custom-file__input" id="field-upload" required  accept="upload/*">
    </div>
    
        <?php endif; ?>



        <?php if($update): ?>
    <button type="submit" name="update" class="btn btn-info"> update News </button>
        <?php else: ?>
    <button type="submit" name="send" class="btn btn-primary">Create News</button>
        <?php endif; ?>
    
</form>
</div>




 <?php 
 include '../shared/script.php';

 ob_end_flush(); 
 
 ?>

