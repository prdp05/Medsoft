<?php
global $conn;
require "../php-config/Connection.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = trim($_REQUEST['fname']) ;
    $lname = trim($_REQUEST['lname']);
    $fullname = $fname." ".$lname;

    $uname = $_REQUEST['uname'];

    $password = trim($_REQUEST['password']);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $phone = trim($_REQUEST['phone']);
    $email = trim($_REQUEST['email']);
    $gender = $_REQUEST['gender'];

    $pic = $_REQUEST['pic'];


    $sql = "INSERT INTO users(`FULLNAME`, `USERNAME`, `PASSWORD`, `PHONENUMBER`, `EMAIL`, `GENDER`)
                VALUES('$fullname','$uname', '$hashedPassword', '$phone', '$email', '$gender') ";

    $done = $conn->query($sql);

    if ($done){
        header("Location: ../views/Login.php?registered='1'");
    } else{
        echo "Failed to register";
    }

    $conn->close();
}
