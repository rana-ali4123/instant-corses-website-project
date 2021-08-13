<?php

ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../general/auth_admin.php';
//testmessage( $conn , "connection");

$select = "SELECT courses.id as 'cid' , courses.name as 'cname' , `desc` , price , `image` , hours_no , article_no , instructor.id as 'iid' , instname
            from `courses` INNER JOIN `instructor`
            on instructor.id = courses.instructorid
            ";
$s = mysqli_query ( $conn , $select);   



//====== Delete Part =======
if (isset($_GET['delete'])){
    $course_id = $_GET['delete'];
    $delete = "DELETE FROM `courses` WHERE id = $course_id";
    $d = mysqli_query( $conn , $delete);
    header('location: /team2/courses/list_c.php');
}

?>






<div class="container col-10 text-center my-5">
    <table class="table table-hover">
    <thead  class="table table-dark">
        <tr >
            <th>ID</th>
            <th>Course Name</th>
            <th>description</th>
            <th>price</th>
            <th>Hours No.</th>
            <th>Article No.</th>
            <th>instructor name</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
</thead>
            <?php foreach($s as $data){  ?>
        <tr>
            <td> <?php echo $data['cid']; ?> </td>
            <td> <?php echo $data['cname']; ?> </td>
            <td> <?php echo $data['desc'] ;?> </td>
            <td> <?php echo $data['price']; ?> </td>
            <td> <?php echo $data['hours_no']; ?> </td>
            <td> <?php echo $data['article_no']; ?> </td>
            <td> <?php echo $data['instname']; ?> </td>
            <td> <img width="150" height="100" src="upload/<?php echo $data['image']; ?>"> </td>
            <td> 
                <a href="/team2/courses/list_c.php?delete=<?php echo $data['cid'] ?>" onclick="return confirm(' Sure To Delete ?! ')" class="btn btn-danger"> Delete </a>
                <a href="/team2/courses/create_c.php?edit=<?php echo $data['cid'] ?>"  class="btn btn-primary"> Update </a>
            </td>
        </tr>
            <?php }  ?>

    </table>
</div>



<?php 
include '../shared/script.php';
include '../shared/footer.php';
ob_end_flush();
?>
