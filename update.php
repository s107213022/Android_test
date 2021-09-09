<?php
    require("dbconnect.php");
    $account = $_GET['a'];
    $password = $_GET['p'];
    
    echo $password;

    $sql = "update user set password = '$password' where account = $account;";
    mysqli_query($conn, $sql) or die("DB Error: Cannot retrieve message."); //執行SQL
    $msg = "Password updateded";
?> 