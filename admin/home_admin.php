<!DOCTYPE HTML>

<?php
 
  session_start();
  
  if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header('location:/team2/index.php');
  }

?>
<html>

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title> Admin Home</title>
    <style>
        a {
            color: grey;
        }
    </style>
</head>

<body>

    <div class="d-flex justify-content-around mt-5 text-center">

        <div class="flex-shrink-0 p-3 bg-white ml-5 pl-5" style="width: 25%;">
            <a href="#" class=" text-secondary d-flex align-items-center pb-3 mb-3 ml-3 color-black text-decoration-none border-bottom display-3 " >INSTANT</a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-block btn-outline-warning rounded collapsed" data-bs-toggle="collapse" data-bs-target="#news-collapse">
                        News
                    </button>
                    <div class="collapse mt-2" id="news-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/team2/news/create_news.php" class="link-dark rounded">Add News</a></li>
                            <li><a href="/team2/news/list_news.php" class="link-dark rounded">View News</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-block btn-outline-warning align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#instructors-collapse" aria-expanded="false">
                        Instructors
                    </button>
                    <div class="collapse mt-2" id="instructors-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/team2/instructor/add_instructor.php" class="link-dark rounded">Add Instructor</a></li>
                            <li><a href="/team2/instructor/list_instructor.php" class="link-dark rounded">View Instructors</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-block btn-outline-warning align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#students-collapse" aria-expanded="false">
                        Students
                    </button>
                    <div class="collapse mt-2" id="students-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                            <li><a href="/team2/student/liststudent.php" class=" link-dark rounded">View Students</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-block btn-outline-warning align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#courses-collapse" aria-expanded="false">
                        Courses
                    </button>
                    <div class="collapse mt-2" id="courses-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/team2/courses/create_C.php" class="link-dark rounded"> Create Course </a></li>
                            <li><a href="/team2/courses/list_c.php" class="link-dark rounded">View Courses</a></li>
                            <li><a href="/team2/courses/st_with_course.php" class="link-dark rounded">St Sel Courses</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <a href="/team2/FAQ/listquestions.php" class="btn btn-block btn-outline-warning align-items-center rounded collapsed">
                        List Questions</a>

                </li>
                <li class="mb-1">
                    <a href="/team2/feedback/list_feed.php" class="btn btn-block btn-outline-warning align-items-center rounded collapsed">
                        List Feedbacks</a>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <form method="POST">
                    <a  href="/team2/index.php"name="logout" class="btn btn-block btn-outline-dark align-items-center rounded">
                        Log Out</a>
                    </form>
                </li>
        </div>
        <div class="mt-5">
            <img src="./form1.jpeg" alt="Instant" width="75%"  >
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>