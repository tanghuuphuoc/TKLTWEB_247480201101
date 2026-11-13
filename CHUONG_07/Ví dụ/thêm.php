<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập dữ liệu</title>
</head>
<body>
    <form method="post"action="insertdata.php">
        Mã khách hàng:<input type="test"name="txtmakh"value=""><br>
        Họ tên:<input type="test"name="txttenkh"value=""><br>
        Năm sinh:<input type="test"name="txtnamsinh"value=""><br>
        Điện thoại:<input type="test"name="txtdienthoai"value=""><br>
        Địa chỉ:<input type="test"name="txtdiachi"value=""><br>
        <button type="submit">Insert</button>
    </form>
    <h1> Hiển thị</h1>
    <?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM khachhang";
if ($result = mysqli_query($conn, $sql)) {
    if(mysqli_num_rows ($result) > 0) {
        while ($row = mysqli_fetch_array($result)){
               echo $row['makh'];
               echo $row['tenkh'];
               echo $row['namsinh'];
               echo $row['dienthoai'];
               echo $row['diachi'] . "<br>";
        }

           mysqli_free_result($result);
}
else
{
echo "No Records";
}
}
else{
echo "Truy vấn thất bại".mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
