<?php 
include("templats/header.php");
include("db/conn.php");
?>
    <?php
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
    
        $query = "select * from students where id = '$id'";
            
        $result = mysqli_query($conn , $query);
            if(!$result){
                die("query not execute".mysqli_error());
                echo"error result";
            }else {
                $row = mysqli_fetch_assoc($result);
                
                
            }
        }

    if (isset($_POST['update-std'])) {
        if(isset($_GET['new-id'])){
            $idnew = $_GET['new-id'];
        }
        $fname = $_POST['f-name'];
        $lname = $_POST['l-name'];
        $age = $_POST['age'];
        
        $query = "update students set fname = '$fname' , lname = '$lname',age = '$age' where id = '$idnew'";
        $result = mysqli_query($conn , $query);
        if(!$result){
            die("query not execute".mysqli_error());
            echo"error result";
        }
        else {
            header("location:index1.php?update-ms=You have succcessfuly data ");
        }
    }        


?>





<div class="form-group">
    <form action="update1.php?new-id=<?php echo $id; ?>" method="post">
            <label>  FIRST NAME  </label>
            <input type="text" name ="f-name" class="form-control" value="<?php   echo $row['fname']   ?>">
            <label>  LAST NAME  </label>
            <input type="text" name ="l-name" class="form-control" value="<?php   echo $row['lname']   ?>">
            <label>  AGE  </label>
            <input type="text" name ="age" class="form-control" value="<?php   echo $row['age']   ?>">
            <div>
            <input type="submit" class="btn btn-primary " name = "update-std" value="UPDATE">
            </div>
    </form>
</div>  

<?php 
include("templats/footer.php");
?>