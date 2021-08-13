<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../general/auth_admin.php';

//testmessage( $conn , "connection");

$select = "SELECT * from news";
$s = mysqli_query ( $conn , $select);   





//====== Delete Part =======
if (isset($_GET['delete'])){
    $course_id = $_GET['delete'];
    $delete = "DELETE FROM `news` WHERE id = $course_id";
    $d = mysqli_query( $conn , $delete);
    header('location: /team2/news/list_news.php');
}




?>






<div class="container col-7 text-center my-5">
    <table class="table table-hover">
        <tr class="thead-dark">
            <th>ID</th>
            <th>News Content</th>
            <th>Title</th>
            <th>admin ID</th>
            <th>News Image</th>
            <th>Action</th>
        </tr>
            <?php foreach($s as $data){  ?>
        <tr>
            <td> <?php echo $data['id'] ?> </td>
            <td> <?php echo $data['content'] ?> </td>
            <td> <?php echo $data['title'] ?> </td>
            <td> <?php echo $data['admin_id'] ?> </td>
            <td> <img width="150" height="100" src="upload/<?php echo $data['image']; ?>"> </td>
            <td> 
                <a href="/team2/news/create_news.php?edit=<?php echo $data['id'] ?>"  class="btn btn-primary"> Update </a>
                <a href="/team2/news/list_news.php?delete=<?php echo $data['id'] ?>"  onclick="return confirm(' Sure To Delete ?! ')" class="btn btn-danger"> Delete </a>
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