<?php 
 ob_start();
 include '../shared/nav.php';
 include '../shared/config.php';
 include '../general/auth_admin.php';



 //testmessage( $conn , "connection");

 $select = " SELECT * FROM `student` ";
 $s = mysqli_query( $conn , $select );



 //======== delete part =========

if(isset($_GET['delete'])){
  $student_id = $_GET['delete'];
  $delete = " DELETE  FROM `student` WHERE id = $student_id ";
  $d = mysqli_query( $conn , $delete );
  header("location:/team2/student/liststudent.php");
}


 ?>
 
  
 
 
 <div class="container col-6 mt-5"> 
 <table class="table  table-hover">
 
   <thead class="thead-dark">
     <tr>
       <th scope="col">ID</th>
       <th scope="col">First Name</th>
       <th scope="col">Last Name</th>
       <th scope="col">Email</th>
       <th scope="col">Pass</th>
       <th scope="col">Con Pass</th>
       <th scope="col">Phone</th>
       <th scope="col">Age</th>
       <th scope="col">Delete</th>
     </tr>
   </thead>
 
   <tbody>
     
    <?php foreach ( $s as $data ) { ?>

     <tr>
       <td> <?php echo $data ['id']; ?> </td>
       <td> <?php echo $data ['firstname']; ?> </td>
       <td> <?php echo $data ['lastname']; ?> </td>
       <td> <?php echo $data ['email']; ?> </td>
       <td> <?php echo $data ['password']; ?> </td>
       <td> <?php echo $data ['cpassword']; ?> </td>
       <td> <?php echo $data ['phone']; ?> </td>
       <td> <?php echo $data ['age']; ?> </td>
       <td>
         <a href="/team2/student/liststudent.php?delete=<?php echo $data['id']; ?>"  onclick="return confirm(' Sure To Delete ?! ')" class="btn btn-danger">Delete</a>
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

