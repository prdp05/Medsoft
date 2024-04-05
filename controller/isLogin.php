<?php
if (!isset($_SESSION['userId'])) {
    header("Location: ../views/Login.php");
    exit();
}
