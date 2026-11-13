<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "DELETE FROM khachhang WHERE makh='k011'";
$result = mysqli_query ($conn, $sql);
if ($result) {
    echo "Xoá thành công.";
} else
    {
        echo "Xoá thất bại";
    }
?>