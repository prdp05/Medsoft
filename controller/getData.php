<?php
session_start();
require('../php-config/Connection.php');

//$sql = $conn->query("SELECT * FROM medicines INNER JOIN medsoft.soldmedicine s on medicines.SN = s.MED_ID");

$sql = "SELECT * FROM medicines
INNER JOIN medicinebatch ON medicines.SN = medicinebatch.MED_ID
INNER JOIN soldmedicine ON medicines.SN = soldmedicine.MED_ID";
$done = $conn -> query($sql);

$soldmedicine = array();

$done = $conn->query($sql);
if ($done->num_rows > 0) {
    while ($row = $done->fetch_assoc()) {
        $soldmedicine[] = $row;
    }
}


// Return data as JSON
//echo json_encode($soldmedicine);

// Close connection
//mysqli_close($conn);

$jsonData = json_encode($soldmedicine);
header('Content-Type: Application/json');
echo $jsonData;


?>