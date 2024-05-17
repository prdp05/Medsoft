<?php
require('../php-config/Connection.php');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    print_r($_POST);
    if (isset($_POST['batchNumberArr'])){
        foreach ($_POST['batchNumberArr'] as $item){
            $qty = (int) $item['quentity'];
            $bid = $item['bid'];
            $sql = "UPDATE medicinebatch SET QUANTITY = QUANTITY-$qty where B_SN = $bid";
            $conn->query($sql);
        }
    }

}
