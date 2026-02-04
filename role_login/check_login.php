<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users 
        WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['role'] = $row['role'];

    if ($row['role'] == 'admin') {
        header("Location: admin.php");
    } elseif ($row['role'] == 'user') {
        header("Location: user.php");
    } elseif ($row['role'] == 'customer') {
        header("Location: customer.php");
    } elseif ($row['role'] == 'employee') {
        header("Location: employee.php");
    }
} else {
    echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
}
?>
