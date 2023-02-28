<?php
include 'config.php';
session_start();
// if(!empty($_SESSION['email']))
// {
//     echo $_SESSION['email'];
// }
// echo $pass_value;
if(isset($_POST['submit_reset'])){
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $renewpassword = $_POST['renewpassword'];
    if($newpassword != $renewpassword){
        echo '<script> alert ("Password doesnot match");</script>';
	    echo'<script>window.location.href="updatePass.php";</script>';
    }
    else{
        $insert = "UPDATE `admin` SET `pass`='$newpassword'";
        mysqli_query($conn,$insert);
        echo '<script> alert ("Password updated successfully");</script>';
	    echo'<script>window.location.href="admin-profile.php";</script>';
    }
}
?>