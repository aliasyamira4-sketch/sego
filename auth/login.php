<?php
session_start();
include '../db/connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
        $_SESSION['admin'] = $row['email'];
        header("Location: ../admin/dashboard.php");
    } else {
        echo "Wrong password";
    }
} else {
    echo "Email not found";
}
?>

