<?php
session_start();
if ($_SESSION['role'] != 'user') {
    header("Location: login.php");
}
?>
<h1>ผู้ใช้ทั่วไป (User)</h1>
<a href="logout.php">Logout</a>
