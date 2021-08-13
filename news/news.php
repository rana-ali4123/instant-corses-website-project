
<?php
//include("/xampp/htdocs/company/configur.php");
include '../shared/nav.php';
include '../shared/config.php';
 ?>



<style>
body {
  background-image: url('hhh.jpg');
}
</style>

<video style=" margin:40px; border: 1px solid black !important;
	outline: 1px solid black !important;
	outline-offset: 15px !important;
" width="90%" height="300px" controls>
  <source src="vid.mp4" type="video/mp4">
 
</video>
 
<?php
    $select= " SELECT * FROM `news` ";
    $selectQuery = mysqli_query( $conn , $select );
?> 

<div class= "container" style="width:100%;"> <div class="row">

  <?php foreach($selectQuery as $selected){ ?> 
     
      
 
   <div class="col m-3"  style="width:30%;">
    <div class="card" style="width:300px; border:1px solid black; min-height:700px; max-height:700px;">
 <img src="upload/<?php echo $selected["image"]; ?>" class="card-img-top"  style ="height:250px">
    <div class="card-header"><?php echo $selected["title"]; ?></div>
      <div class="card-body" style="background-color:#e6e6e6;">
        <h5 class="card-title"><?php echo $selected["title"]; ?></h5>
        <p class="card-text"><?php echo $selected["content"] ?></p>
       
      </div>
    </div>
  </div> 
  
  <?php } ?>
 
</div>
</div>  
  </div>


<?php
include '../shared/script.php';
include '../shared/footer.php';

ob_end_flush();
?>