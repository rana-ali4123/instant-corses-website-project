<?php
include '../shared/nav.php';
include '../shared/config.php';
include '../general/auth_student.php';




 //======= shwon part =========
    if(isset($_SESSION['student'])){
      $id = $_SESSION["studentid"];
      $select = "SELECT * FROM `student` WHERE id = $id";
      $selectTakenCourses = "SELECT * FROM `taken` left join `courses` on taken.courseid = courses.id where studentid = $id";
      $takenCoursesQuery = mysqli_query($conn, $selectTakenCourses);
      $s= mysqli_query($conn ,$select); 
      
      $fetchCourses = mysqli_fetch_assoc($takenCoursesQuery);
      $data = mysqli_fetch_assoc($s);
      $firstname = $data['firstname'];
      $lastname = $data['lastname'];
      $age = $data['age'];
      $phone = $data['phone'];
      $linked = $data['linkedin'];
      $github = $data['github'];
    }


    //======== edit part =========

    if(isset($_POST['edit'])){
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $age = $_POST['age'];
      $phone = $_POST['phone'];
      $linked = $_POST['linked'];
      $github = $_POST['github'];


      $update = "UPDATE `student` SET firstname = '$firstname' , lastname = '$lastname' , age = '$age' , phone = '$phone' , linkedin = '$linked' , github = '$github' WHERE id = $id";
      $u = mysqli_query( $conn , $update );
      

    }

  ?>






<style type="text/css">
body{
    background:#eee;    
}
.main-box.no-header {
    padding-top: 20px;
}
.main-box {
    background: #FFFFFF;
    -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
    box-shadow: 1px 1px 2px 0 #CCCCCC;
    margin-bottom: 16px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.table a.table-link.danger {
    color: #e74c3c;
}
.label {
    border-radius: 3px;
    font-size: 0.875em;
    font-weight: 600;
}
.user-list tbody td .user-subhead {
    font-size: 0.875em;
    font-style: italic;
}
.user-list tbody td .user-link {
    display: block;
    font-size: 1.25em;
    padding-top: 3px;
    margin-left: 60px;
}
a {
    color: #3498db;
    outline: none!important;
}
.user-list tbody td>img {
    position: relative;
    max-width: 50px;
    float: left;
    margin-right: 15px;
}

.table thead tr th {
    text-transform: uppercase;
    font-size: 0.875em;
}
.table thead tr th {
    border-bottom: 2px solid #e7ebee;
}
.table tbody tr td:first-child {
    font-size: 1.125em;
    font-weight: 300;
}
.table tbody tr td {
    font-size: 0.875em;
    vertical-align: middle;
    border-top: 1px solid #e7ebee;
    padding: 12px 8px;
}
a:hover{
text-decoration:none;
}
</style>
               








<form method="POST" action="">

<div class="container">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="student" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $firstname ;?>  </h4>
                      <p class="text-secondary mb-1"><?php echo $age ;?></p>
                      <p class="text-muted font-size-sm"><?php echo  $phone ;?></p>
                      <i style="font-size:30px" class="fab fa-linkedin"><?php echo $linked ;?></i>
                      <br>
                      <i style="font-size:30px" class="fab fa-github-square"> <?php echo $github ;?></i>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                
                    <input type="text" name = "firstname" value=" <?php echo $firstname; ?>" class="col-sm-9 text-secondary"> 
                    </div>
                  </div>
                  

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                  
                    <input type="text" name="lastname" value=" <?php echo $lastname;?>" class="col-sm-9 text-secondary"> 
                    </div>
                  </div>


                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Age</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                  
                    <input type="text" name = "age"  value=" <?php echo $age;?>" class="col-sm-9 text-secondary"> 
                    </div>
                  </div>


                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                  
                    <input type="text" name = "phone"  value=" <?php echo $phone;?>" class="col-sm-9 text-secondary"> 
                    </div>
                  </div>
                  
                 

                  <div class="form-section--fake-label border-top">
                  Links:
                  </div>
                 
                  
                  <div class="form-field-container  labeled form-section labeled--sr-only" id="form-item-linkedin_profile"> 
                    <label class="control-label " for="id_linkedin_profile">LinkedIn</label>
                     <div id="tooltip-reference-linkedin_profile" class="tooltip-reference pos-r ">
                       <div class="controls "> 
                         <div class="input-group">
                           <span  style="border:1px black solid ; background-color:#CCCCCC" class="input-group-addon">http://www.linkedin.com/</span> 
                           <input type="text" name="linked" value = "<?php echo $linked; ?>" class="textinput textInput form-control" placeholder="LinkedIn Profile" maxlength="128" id="id_linkedin_profile">
                         </div> 
                        </div> 
                      
                      </div>
                   </div>

                   <div class="form-field-container  labeled form-section labeled--sr-only" id="form-item-linkedin_profile"> 
                    <label class="control-label " for="id_linkedin_profile">GitHub</label>
                     <div id="tooltip-reference-linkedin_profile" class="tooltip-reference pos-r ">
                       <div class="controls "> 
                         <div class="input-group">
                           <span  style="border:1px black solid ; background-color:#CCCCCC" class="input-group-addon">http://www.github.com/</span> 
                           <input type="text" name="github" value = "<?php echo $github; ?>" class="textinput textInput form-control" placeholder="GitHub Profile" maxlength="128" id="id_linkedin_profile">
                         </div> 
                        </div> 
                        
                      </div>
                   </div>
                 
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
      <!-- edit button -->
                    <button type="submit" name="edit" class="btn btn-primary"> Edit </button>

                  </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>


    </form>


    <div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>Course</span></th>
                                <th><span>Hours No.</span></th>
                               
                               
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($takenCoursesQuery as $data) { ?>
                                <tr>
                                    <td>
                                     <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                     <a href="#" class="user-link"><?php echo  $data['name'];?></a>
                                        
                                    </td>
                                    
                                    <td class="text-center">
                                        <span class="label label-default"><?php echo  $data['hours_no'];?></span>
                                    </td>
                                </tr>
                                <?php }?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div> 

 <!--<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" value="John"><br><br>
  <input type="submit" value="Submit">
</form>-->
<?php
include '../shared/script.php';

?>

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

<script type="text/javascript">

</script>




<?php 
include '../shared/script.php';
include '../shared/footer.php';
?>





