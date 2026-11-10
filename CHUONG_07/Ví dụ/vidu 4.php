<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "UPDATE khachhang SET namsinh='2009' WHERE makh='k013'";
$result = mysqli_query ($conn, $sql);
if ($result) {
    echo "Cập nhật thành công.";
} else
    {
        echo "Cập nhật thất bại";
    }
?>