<?php
require '../php-config/Connection.php';
require '../controller/user-data.php';

if (isset($_REQUEST['userId'])) {
    $sn = $_REQUEST['userId'];
    $deleteUser = "DELETE * FORM `user'  WHERE `SN` ='$sn' ";
    $result = $conn->query($deleteUser);
    if ($result){
        echo "Deleted Successfully!";
    }
}

//$deleteUser = "DELETE * FORM `user'  WHERE `SN` ='$sn' ";
//$result = $conn->query($deleteUser);

?>