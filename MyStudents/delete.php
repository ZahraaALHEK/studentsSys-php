<?php
include('db/conn.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];


$query= "delete from students where id = '$id'";
$result = mysqli_query($conn,$query);
if (!$result) {
   die("Query failed".mysqli_error());
}else{
    header('location:index1.php?delete-ms=you have delete the record');
}


}
?>