<?php
//session_start();
//require('../php-config/connection.php');
//
////print_r($sql);
//
//if($_SERVER['REQUEST_METHOD']=='POST'){
//    $medId = $_REQUEST['medId'] ;
//    $quantity = intval($_REQUEST['quantity']);
//    $discount =intval(0 &&  $_REQUEST['discount'])  ;
//    $remark = " " &&  $_REQUEST['remark'] ;
//}
//$soldDataSql = $conn->query("SELECT * FROM medicines INNER JOIN medsoft.soldmedicine s on medicines.SN = s.MED_ID");
//
////     Insert into database or perform any necessary actions
//$sql = "INSERT INTO soldmedicine( QUANTITY, DISCOUNT, REMARK, MED_ID) VALUES ( '$quantity', '$discount', '$remark', '$medId')";
//$done = $conn->query($sql);
//
////// Check if quantity, discount, and remark are set in POST data
////if(isset($_POST['quantity']) && isset($_POST['discount']) && isset($_POST['remark'])) {
////    // Retrieve quantity, discount, and remark from POST data
////    $quantity = $_POST['quantity'];
////    $discount = $_POST['discount'];
////    $remark = $_POST['remark'];
////}
///

session_start();
require('../php-config/connection.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required fields are set in $_POST
    if (isset($_POST['medId'], $_POST['quantity'])) {
            $medId = $_REQUEST['medId'] ;
             $quantity = intval($_REQUEST['quantity']);
            $discount =intval( $_REQUEST['discount'])  ;
            $remark = $_REQUEST['remark']  ;

        // Insert data into the database
        $sql = "INSERT INTO soldmedicine(QUANTITY, DISCOUNT, REMARK, MED_ID) VALUES  ('$quantity','$discount',  '$remark', '$medId')";

        if ($conn->query($sql) === TRUE) {
            // Data insertion successful
            header("Location: ../views/sales-medicine.php?success=1");
            exit();
        } else {
            // Error in data insertion
            header("Location: ../views/sales-medicine.php?success=0");
            exit();
        }
    } else {
        // If any required field is missing
        header("Location: ../views/sales-medicine.php?success=0");
        exit();
    }
} else {
    // Handle other HTTP request methods (if needed)
    header("Location: ../views/sales-medicine.php?success=0");
    exit();
}

// Close database connection
$conn->close();

