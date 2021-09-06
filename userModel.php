<?php
require("dbconnect.php");
function getName(){
    global $conn;
    $sql = "select * from `user` where `identity` = 1";
    $result = mysqli_query($conn, $sql) or die("DB Error: Cannot retrieve message.");
    $count = 0;
    $members = array();
    while ($row = mysqli_fetch_assoc($result)){
        $members[$count] = $row;
        $count = $count + 1;
    }
    $result -> close();
    $nam = rand(0,$count-1);
    $name = "";
    $name = $members[$nam]['name'];
    return $name;
}
?>