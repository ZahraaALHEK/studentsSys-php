<?php
    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","mystudents");
    $conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
    if (!$conn) {
        die("Connection failed");
    }
?>