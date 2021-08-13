<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../general/auth_admin.php';


//========== add instructor part ===========
if (isset($_POST['send'])) {
  $name =  $_POST['name'];
  $email =  $_POST['email'];
  $phone = $_POST['phone'];
  $decription = $_POST['description'];
  $insert = " INSERT INTO `instructor` VALUES ( NULL , '$name' , '$email', '$phone' , '$decription' ) ";
  $i= mysqli_query($conn , $insert);
  header("location:/team2/instructor/list_instructor.php");
}


$id = NULL;   // if i put this variable after [  if (isset($_GET['edit'])){  ] statement =>> error


//======== Update Part ========
$name = "";
$email = "";
$phone = "";
$description = "";
$update = false;
if (isset($_GET['edit'])){
    $update = true;
    $id = $_GET['edit'];
    $select = " SELECT * FROM `instructor` WHERE id = $id";
    $s = mysqli_query( $conn , $select );
    $row = mysqli_fetch_assoc($s);
    $name = $row['instname'];
    $email = $row['email'];
    $phone = $row['phone'];
    $description = $row['description'];
}   
    if (isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $description = $_POST['description'];
        $update = " UPDATE `instructor` SET `instname` = '$name' , email = '$email' , phone = '$phone' , description = '$description' WHERE  id = $id ";
        $s = mysqli_query( $conn , $update );
        header("location:/team2/instructor/list_instructor.php");
    }



?>




<div class="container col-6 mt-5">
<form method="POST">

    <div class="form-group">
      <label for="inputEmail4">Name</label>
      <input type="text" required name="name" value = "<?php echo $name; ?>" class="form-control" id="inputEmail4" placeholder="Name">
    </div>

    <div class="form-group">
      <label for="inputPassword4">E-mail</label>
      <input type="email" required name="email" value = "<?php echo $email; ?>" class="form-control" id="inputPassword4" placeholder="E-mail">
    </div>

    <div class="form-group">
      <label for="inputCity">Phone Number</label>
      <input type="text" required name="phone" value = "<?php echo $phone; ?>" class="form-control" id="inputCity" placeholder="Phone Number">
    </div>

    <div class="form-group">
      <label for="inputCity">Description</label>
      <input type="text" required name="description" value = "<?php echo $description; ?>" class="form-control" id="inputCity" placeholder="description">
    </div>
   
        <?php if($id): ?>
    <button type="submit" name="update" class="btn btn-info">Update</button>
        <?php else: ?>
    <button type="submit" name="send" class="btn btn-primary">Add</button>
        <?php endif; ?>


</form>
</div>



<?php 
include '../shared/script.php';
ob_end_flush();
?>

      