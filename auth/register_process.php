<?php
include '../db/connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO admin (name, email, password)
          VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $query)) {
    header("Location: ../index.php");
} else {
    echo "Registration failed";
}
?>
