<?php
ob_start();
include '../shared/config.php';
include '../shared/nav.php';
include '../general/auth_admin.php';



$select ="  SELECT * from `feedback`";
$s= mysqli_query( $conn , $select) ;


//======== delete part =========

if(isset($_GET['delete'])){
    $feed_id = $_GET['delete'];
    $delete = "DELETE  FROM `feedback` WHERE id=$feed_id";
    $d = mysqli_query( $conn , $delete );
    header("location:/team2/feedback/list_feed.php");
}


?>




<div class="container col-7 text-center my-5">
<table class="table table-hover">
  <thead  class="table table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Feedback</th>
      <th scope="col">Student ID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php foreach($s as $data){ ?>
    <tr>
      <td> <?php echo $data['id']; ?> </td>
      <td> <?php echo $data['feedback']; ?> </td>
      <td> <?php echo $data['studentid']; ?> </td>
      <td>
        <a href="/team2/feedback/list_feed.php?delete=<?php echo $data['id']; ?>"  onclick="return confirm(' Sure To Delete ?! ')"  class="btn btn-danger"> Delete </a> 
      </td>
    </tr>
  <?php } ?>

</table>
</div>

<?php 
include '../shared/script.php';
include '../shared/footer.php';
ob_end_flush();
?>