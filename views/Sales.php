<?php session_start();?>
<?php require "../controller/isLogin.php"?>
<?php //require "../controller/fatchMedicine-sales.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
    <link rel="stylesheet" href="../public/css/Sales.css">

</head>
<body>
<div class="container">
<iframe src="salesMedicine.php" class="firstFrame" width="60%" height="900px"></iframe>
<iframe src="printBill.php" class="SecondFrame" width="40%" height="900px" ></iframe>
</div>

<footer class="Footer">
    &copy;copyright <b>MEDSOFT</b>. All Rights Reserved <br> Design by 💙 <b>medsoft</b>
</footer>
</body>
</html>
