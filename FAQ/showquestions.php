<?php
include("../shared/nav.php");
include("../shared/config.php");



$data="";

       // $answer = "";


?>




<!-- FAQ BG -->
<style>
* {
    margin: 0;
    padding: 0;
}

.banner {
    position: relative;
    width: 90%;
    margin: 0 auto;
}

.banner img {
    width: 100%;
}

.heaging {
    color: white;
    position: absolute;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 3rem;
}

.faq{
    display: grid;
    width:25%;
   max-height:550px;
    grid-template-columns: 1fr 4fr 4fr 4fr 1fr;
    grid-template-rows: 0.5fr 0.5fr 3fr;
	grid-template-areas: 
    ". . . . ."
	". ques1 ques2 ques3 ."
    ". ans1 ans2 ans3 .";
    grid-gap: 5px;
    margin-top: 10px;
    display: inline-table;
 margin-left:50px;

 
}

.ques1{
    grid-area: ques1;
    font-weight: 700;

}


.ans1{
    grid-area: ans1;
    font-size: 20px;
}


</style>


<style>
body {
  background-image: url('hhh.jpg');
}
</style>

<div style="width:1519; height:550px;  background-image: url('f.jpeg');">
    <h1 class="heading"> FAQ! <h1>
</div>






<!-- showen FAQ -->

<?php
                  
    $ss = " SELECT * FROM `questions` LEFT JOIN `approvedans` on questions.id = approvedans.questid WHERE `is_approved` = 1";
    
    $data = mysqli_query( $conn , $ss );
    foreach( $data as $row ){
                                  ?>
  <section class="faq">
  
    <h2 class="ques1"> <i class="fas fa-quote-left"></i> <?php echo $row['question']; ?> </h2><br>  <p class="ans1">  <?php echo $row['approved'] ?>.</p> 
    
                     
</section>


<?php } ?>




<?php include("../shared/script.php");
 include("../shared/footer.php");
?>




