<?php
session_start();
if ($_SESSION['role'] != 'employee') {
    header("Location: login.php");
}
?>
<h1>พนักงาน (Employee)</h1>
<a href="logout.php">Logout</a>
