<?php
 
  session_start();
  
  if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header('location:/team2/index.php');
  }


  if (isset($_GET["search"])) {
    $searched = addSlashes($_GET["searched"]);
    header("location:/team2/courses/search.php?searched=" . $searched);
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altras Hasebat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="shared/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type ="text/css" href="login.css">
    <link rel="stylesheet" type ="text/css" href="signup.css">
    <style></style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

 
<nav class="navbar navbar-expand-lg navbar-dark mm" style=" background : linear-gradient(to right , rgb(255, 255, 255) 2% ,#333 , #444) !important;
;">
   <a class="navbar-brand" href="/team2/index.php">
      <img src="/team2/shared/images/copy.png" alt="" width="120px" height="auto">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/team2/index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <!-- authentication admin -->
        <?php if (isset($_SESSION['admin'])): ?>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            News
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/team2/news/create_news.php">Add News</a>
            <a class="dropdown-item" href="/team2/news/list_news.php">List News</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Instructors
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/team2/instructor/add_instructor.php">Add Instructor</a>
            <a class="dropdown-item" href="/team2/instructor/list_instructor.php">List Instructors</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Students
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/team2/student/liststudent.php">List Student</a>
          </div>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Courses
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/team2/courses/create_C.php" style="color:black !important"> Create Courses </a>
            <a class="dropdown-item" href="/team2/courses/list_c.php" style="color:black !important"> List Courses </a>
            <a class="dropdown-item" href="/team2/courses/st_with_course.php" style="color:black !important"> St Sel Course </a>

          </div>
        </li>


      <!-- show questions and answers for customers -->


      <!-- show questions and put answers for admins -->
          <li class="nav-item active">
            <a class="nav-link" href="/team2/FAQ/listquestions.php">List Questions </a>
          </li>


          <li class="nav-item active">
            <a class="nav-link" href="/team2/feedback/list_feed.php">List Feedback </a>
          </li>


           <?php else: ?>


          <li class="nav-item active">
            <a class="nav-link" href="/team2/FAQ/addquestions.php">Add Questions </a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="/team2/FAQ/showquestions.php">Show Questions </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/team2/feedback/feedback.php">Feedback </a>
          </li>

          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/team2/courses/profilepage.php">Profile </a>
          </li>


          <?php endif; ?>
          <li class="nav-item active">
            <a class="nav-link" href="/team2/news/news.php">News </a>
          </li>

          <form class="d-flex">
        <input class="form-control ml-2" type="search" name="searched" placeholder="Search For courses" aria-label="Search" required>
        <button class="btn btn-outline-info customButton ml-2" 
        name="search" style="border-color:white; color: white;" type="submit">Search</button>
      </form>

      </ul>

 
        
      <?php if(isset($_SESSION['admin']) || isset($_SESSION['student'])): ?>

        <form class="form-inline my-2 my-lg-0">
        <button type="submit" name="logout" class="btn btn-info my-2 my-sm-0" > Log Out </button>
      </form>

      <?php else: ?>

        <a class="btn btn-info my-2 my-sm-0 mr-3" href="/team2/admin/logincustomer.php" type="submit">LOG IN</a>
      <a class="btn btn-info my-2 my-sm-0 mr-3" href="/team2/signup/createstudent.php"> Sign Up </a>

      <?php endif; ?>


    </div>
  </nav>
