<?php

if(isset($_SESSION['admin'])){

}else{
    header('location:/team2/admin/loginadmin.php');
}

?>