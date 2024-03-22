<?php 
include("templats/header.php");
include("db/conn.php");
session_start();
?>
        <div class="box1">
            <h2>All Students
            <p class="text-muted">
             welcome <?php
            echo $_SESSION['user'];
            ?></p></h2>
        
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
             Add Student
            </button>
        </div>
        <?php
            if (isset($_GET['message'])) {
                echo "<h6>" . $_GET['message'] ."</h6>";
                }
            if (isset($_GET['ins-m'])) {
                 echo "<h6>" . $_GET['ins-m'] ."</h6>";
             }
            if(isset($_GET['update-ms'])){
             echo "<h6>" . $_GET['update-ms'] ."</h6>";
            }
            if(isset($_GET['delete-ms'])){
             echo "<h6>" . $_GET['delete-ms'] ."</h6>";
                 }
            ?>
        <!--table-->
        <table class="table table-hover table-border table-striped">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    FIRST NAME
                </th>
                <th>
                    LAST NAME
                </th>
                <th>
                    AGE
                </th>
                <th>
                    UPDATE
                </th>
                <th>
                    DELETE
                </th>
            </tr>
            <!--from db-->
            <?php 
            $query = "select * from students ";
            $result = mysqli_query($conn , $query);
            if(!$result){
                die("query not execute");
            }else {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                     <tr>
                <td>
                    <?php  echo $row['id'];    ?>
                </td>
                <td>
                    <?php   echo $row['fname'];   ?>
                </td>
                <td>
                    <?php   echo $row['lname'];   ?>
                </td>
                <td>
                    <?php   echo $row['age'];   ?>
                </td>
                <td>
                    <a href="update1.php?id=<?php  echo $row['id'];    ?>" class="btn btn-success">Update</a>
                </td>
                <td >
                    <a href="delete.php?id=<?php  echo $row['id'];    ?>" class="btn btn-danger">Delete</a></td>
                    <?php
                }
            }
            ?>
        </table>

<!-- Modal -->
<form action="insert.php" method="post" >
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD A STUDENT</h5>
       <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>--> 
      </div>
      <div class="modal-body">
        <!--form-->
        
         <div class="form-body">
            <label>  FIRST NAME  </label>
            <input type="text" name ="f-name" class="form-control">
            <label>  LAST NAME  </label>
            <input type="text" name ="l-name" class="form-control">
            <label>  AGE  </label>
            <input type="text" name ="age" class="form-control">



         </div>   
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary " name = "add-std" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>
<?php 
include("templats/footer.php");
?>