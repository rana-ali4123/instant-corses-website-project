<?php
include '../shared/nav.php';
include '../shared/config.php';

?>


<?php

$select="SELECT * FROM `courses`  ";
$s=mysqli_query ($conn , $select );

?> 

<style>
body {
  background-image: url('hhh.jpg');
}
</style>

<div class= "container-fluied mt-5  ml-5" > <div class="row">
  <?php foreach($s as $select) { ?> 
     
      
 
  <div class="col m-3"  style="width:30%;">
    <div class="card" style="width:300px; border:1px solid black; min-height:500px; max-height:500px;">
    <img src=" upload/<?php echo $select['image']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $select["name"] ;?></h5>
        <p class="text-center ">Price: <?php echo $select["price"]; ?> L.E</p>
        <a href="/team2/courses/coursepage.php?id=<?php echo $select["id"]; ?>" class="btn btn-primary"> 
         Show Description</a>
    </div>
  </div>  
  </div>
  <?php } ?>
</div>

 
</div>
</body>
</html>

<?php
include '../shared/script.php';
include '../shared/footer.php';

?>




<?php 

/*


*/

?>