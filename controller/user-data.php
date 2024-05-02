<?php
// Start the session
require '../php-config/Connection.php';
if (isset($_SESSION['userId'])) {
    $sn = $_SESSION['userId'];
    $sql = "SELECT * FROM `users` WHERE `SN` ='$sn' ";
    $done = $conn->query($sql);
    if ($done){
        $row = $done->fetch_assoc();
    }
}

