<?php 
ob_start();
include '../shared/config.php';
include '../shared/nav.php';
include '../general/auth_admin.php';



$select ="  SELECT questions.id , question , approved , is_approved , adminid
            FROM `questions` LEFT JOIN `approvedans`
            ON questions.id = approvedans.questid ";
$s= mysqli_query( $conn , $select) ;


//======== delete part =========

if(isset($_GET['delete'])){
    $q_id = $_GET['delete'];
    $delete = "DELETE  FROM  `approvedans` WHERE questid=$q_id";
    $d = mysqli_query($conn , $delete);
    $delete = "DELETE  FROM  `questions` WHERE id=$q_id";
    $d = mysqli_query($conn , $delete);
    header("location:/team2/FAQ/listquestions.php");
    
}


//======= show part =========
$update = false;
if(isset($_GET['show'])){
  $update = true;
  $q_id = $_GET['show'];
  $update = " UPDATE `questions` SET `is_approved` = 1 WHERE id = $q_id ";
  $u = mysqli_query( $conn , $update );
  header("location:/team2/FAQ/listquestions.php");

}




//======= hide part =========
$update = false;
if(isset($_GET['hide'])){
  $update = true;
  $q_id = $_GET['hide'];
  $update = " UPDATE `questions` SET `is_approved` = 0 WHERE id = $q_id ";
  $u = mysqli_query( $conn , $update );
  header("location:/team2/FAQ/listquestions.php");

}

?>




<div class="container col-11 text-center my-5">
<table class="table table-hover">
  <thead  class="table table-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Question</th>
      <th scope="col">Answer</th>
      <th scope="col">approved value</th>
      <th scope="col">admin ID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php foreach($s as $data){ ?>
    <tr>
      <td> <?php echo $data['id']; ?> </td> <!-- [ id ] = question id -->
      <td> <?php echo $data['question']; ?> </td>
      <td> <?php echo $data['approved']; ?> </td>
      <td> 
        <?php 
          $status = $data['is_approved']; 
          if( $status == 0 ){
            echo "hidden";
          }else{
            echo "shown";
          }
        ?> 
      </td>
      <td> <?php echo $data['adminid']; ?> </td>

      <td>
        <a href="/team2/FAQ/addans.php?id=<?php echo $data['id']; ?>"  class="btn btn-primary mr-2"> Answer </a>
        <a href="/team2/FAQ/listquestions.php?show=<?php echo $data['id']; ?>"  class="btn btn-success mr-2"> Show </a>
        <a href="/team2/FAQ/listquestions.php?hide=<?php echo $data['id']; ?>"  class="btn btn-dark mr-2"> Hide </a>
        <a href="/team2/FAQ/listquestions.php?delete=<?php echo $data['id']; ?>" onclick="return confirm(' Sure To Delete ?! ')"   class="btn btn-danger"> Delete </a>


      </td>
    </tr>
  <?php } ?>

</table>
</div>



<?php  
include '../shared/footer.php';
include '../shared/script.php';
ob_end_flush();

?>