<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "INSERT INTO khachhang VALUES('K011','Nguyễn Cao Tường Vy','2007','0356199142','Vĩnh Lợi')";
$result = mysqli_query ($conn, $sql);
if ($result) {
    echo "Mẫu tin đã được thêm.";
} else
    {
        echo "Không thêm được";
    }
?>
