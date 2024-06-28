<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
   

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Tạo tài khoản thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
?>