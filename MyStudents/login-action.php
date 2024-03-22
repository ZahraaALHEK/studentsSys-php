<?php
include 'db/conn.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    
    
}
$query = "select * from users where username = '$username' and emailid = '$email'";
$result = mysqli_query($conn,$query);
if (!$result) {
    die("Query failed".mysqli_error());
 }else{
    $row = mysqli_num_rows($result);
    if ($row == 1) {
        $_SESSION['user'] = $username;
        header('location:index1.php');
    }
else {
    header('location:index.php?ms=your user name or email is invaliad');
 }
    
 }

?>