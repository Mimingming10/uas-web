<?php
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $name = "database";

    $conn = mysqli_connect($host,$user,$passwd,$name);

    if (!$conn) {
        echo "Connection failed";
    }

?>