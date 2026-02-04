<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
}
?>
<h1>ผู้ดูแลระบบ (Admin)</h1>
<a href="logout.php">Logout</a>
