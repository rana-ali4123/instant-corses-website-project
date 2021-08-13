<?php 
 ob_start();
 include '../shared/nav.php';
 include '../shared/config.php';
 include '../general/auth_admin.php';



 //testmessage( $conn , "connection");

 $select = " SELECT * FROM `instructor` ";
 $s = mysqli_query( $conn , $select );



 //======== delete part =========

if(isset($_GET['delete'])){
  $instructor_id = $_GET['delete'];
  $delete = " DELETE  FROM `instructor` WHERE id = $instructor_id ";
  $d = mysqli_query( $conn , $delete );
  header("location:/team2/instructor/list_instructor.php");
}

 
 ?>
 
  
 
 
 <div class="container col-6 mt-5"> 
 <table class="table  table-hover">
 
   <thead class="thead-dark">
     <tr>
       <th scope="col">ID</th>
       <th scope="col">Name</th>
       <th scope="col">PHONE</th>
       <th scope="col">Description</th>
       <th scope="col">action</th>
     </tr>
   </thead>
 
   <tbody>
     
     <?php foreach ( $s as $data ) { ?>

     <tr>
       <td> <?php echo $data ['id']; ?> </td>
       <td> <?php echo $data ['instname']; ?> </td>
       <td> <?php echo $data ['phone']; ?> </td>
       <td> <?php echo $data ['description']; ?> </td>
       <td>
         <a href="/team2/instructor/add_instructor.php?edit=<?php echo $data['id']; ?>" class="btn btn-primary">Update</a>
         <a href="/team2/instructor/list_instructor.php?delete=<?php echo $data['id']; ?>"  onclick="return confirm(' Sure To Delete ?! ')" class="btn btn-danger">Delete</a>
        </td>
     </tr>

     <?php } ?>
 
       
   </tbody>
 </table>
 </div>
 

 <?php 
 include '../shared/script.php';
 include '../shared/footer.php';
 ob_end_flush();  
 ?>

