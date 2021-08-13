<?php 
 ob_start();
 include '../shared/nav.php';
 include '../shared/config.php';
 include '../general/auth_admin.php';



 //testmessage( $conn , "connection");

 $select = "  SELECT student.id AS `sid` , courses.id as cid , firstname , lastname , `name`
              FROM `student` JOIN `taken` 
              ON student.id = taken.studentid
              JOIN `courses`
              on courses.id = taken.courseid
              
              ";
 $s = mysqli_query( $conn , $select );
 //$sel = mysqli_fetch_assoc($s);




 //======== delete part =========

if(isset($_GET['courseid'])){
  $studentid = $_GET['studentid'];
  $courseid = $_GET['courseid'];
  $delete = " DELETE  FROM `taken` WHERE studentid = $studentid AND courseid = $courseid ";
  $d = mysqli_query( $conn , $delete );
  header("location:/team2/courses/st_with_course.php");
}


 ?>
 
  
 
 
 <div class="container col-6 mt-5"> 
 <table class="table  table-hover">
 
   <thead class="thead-dark">
     <tr>
       <th scope="col"> Student ID </th>
       <th scope="col"> Student Name </th>
       <th scope="col"> Course taken </th>
       <th scope="col"> Action </th>
     </tr>
   </thead>
 
   
   <tbody>
     
    <?php foreach ( $s as $data ) { ?>

     <tr>
       <td> <?php echo $data ['sid']; ?> </td>
       <td> <?php echo $data ['firstname'] . " " . $data['lastname']; ?> </td>
       <td> <?php echo $data ['name']; ?> </td>
       <td>
         <a href="/team2/courses/st_with_course.php?courseid=<?php echo $data['cid']; ?>&studentid=<?php echo $data['sid']; ?>"  onclick="return confirm(' Sure To Delete ?! ')" class="btn btn-danger">Delete</a>
       </td>
     </tr>

    <?php } ?>
 
   </tbody>

 </table>
 </div>
 

 <?php 
 include '../shared/footer.php';
 include '../shared/script.php';
 ob_end_flush();

 ?>

