<?php
 
ob_start();
include '../shared/config.php';
include '../shared/nav.php';

$searched = $_GET["searched"];

$select      = "SELECT * FROM `courses`  WHERE courses.name LIKE '%$searched%'";
$selectQuery = mysqli_query($conn, $select);
$numRows     = mysqli_num_rows($selectQuery);


?> 

<h1 class="text-center my-5">Search Results</h1>

<div class="container">
    <div class="displayedBooks row m-auto">
    <?php foreach($selectQuery as $selected){ ?>
    <div class="bookImage mx-auto mt-5">
            <a href="/team2/courses/coursepage.php?id=<?php echo $selected["id"]; ?>">
            <img style="width:250px; height: 300px;"src="upload/<?php echo $selected["image"];?>" alt=""></a>
            <p class="text-center bookInfo">Name: <?php echo $selected["name"] ?></p>
            <p class="text-center bookInfo">Price: <?php echo $selected["price"]; ?> L.E</p>
    </div>
    <?php } ?>
    </div>
    <?php if($numRows < 1){ ?>
        <div><h1 class="text-center outOfStock">No search reuslts found.</h1></div>
    <?php } ?>
</div>



