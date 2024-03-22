<?php
include("templats/header.php");
include("db/conn.php");
session_start();
?>

    <h1> LOGIN</h1>
<form action="login-action.php" method="post">
    <div class="form-group">
       <div>
       <label for="">User Name</label>
        <input type="text" name="username" class="form-control">
       </div>   
       <div>
       <label for="">Email</label>
        <input type="text" name="email" class="form-control">
       </div>  
        <div class="m-3">
        <input type="submit" name="login" value="login" class="btn btn-success">
        </div>
    </div>


</form>



<?php
if (isset($_GET['ms'])) {
    echo $_GET['ms'];
}
include('templats/footer.php');
?>