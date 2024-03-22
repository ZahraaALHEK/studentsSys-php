<?php
include 'db/conn.php';
if(isset($_POST['add-std'])){
echo 'yes it is passed';
    $fname = $_POST['f-name'];
    $lname = $_POST['l-name'];
    $age = $_POST['age'];
    

    if ($fname == "" || empty($fname)) {
        header('location:index1.php?message=you need to fill in first name!');
    }
    else {
        $query = "INSERT INTO `students` (`id`, `fname`, `lname`, `age`) VALUES (NULL, '$fname', '$lname', '$age');";
        $result = mysqli_query($conn,$query);
        if (!$result) {
            die("query faild".mysqli-error());
        }else{

            header('location:index1.php?ins-m=your data is insert');
        }
    }
}
?>