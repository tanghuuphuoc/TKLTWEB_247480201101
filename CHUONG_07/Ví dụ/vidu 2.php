<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT makh, tenkh FROM khachhang";
$result = mysqli_query ($conn, $sql);
while ($row = mysqli_fetch_assoc($result))
{
    echo("Mã khách hàng:".$row['makh']." Tên khách hàng :".$row['tenkh']."<br/>");
}
mysqli_free_result ($result);
mysqli_close($conn);
?>
