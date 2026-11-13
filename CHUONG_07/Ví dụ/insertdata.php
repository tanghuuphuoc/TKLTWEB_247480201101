<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";
//Kết nối database khachhang
$conn = mysqli_connect($servername, $username, $password, $database);
//Nếu kết nối bị lỗi thì xuât báo lỗi và thoát
if(!$conn){
    die("Không kết nối:".mysqli_connect_error());
    exit();
}
//Khai báo giá trị ban đầu, khi chưa submit câu lệnh insert sẽ báo lỗi
$makh="";
$tenkh="";
$namsinh="";
$dienthoai="";
$diachi="";
//Lấy giá trị post từ form vừa submit
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtmakh"])){
        $makh=$_POST['txtmakh'];
    }
    if(isset($_POST["txttenkh"])){
        $tenkh=$_POST['txttenkh'];
    }
    if(isset($_POST["txtnamsinh"])){
        $namsinh=$_POST['txtnamsinh'];
    }
    if(isset($_POST["txtdienthoai"])){
        $dienthoai=$_POST['txtdienthoai'];
    }
    if(isset($_POST["txtdiachi"])){
        $diachi=$_POST['txtdiachi'];
    }
    //Xử lý, insert dữ liệu vào table khachhang
    $sql="INSERT INTO khachhang (makh, tenkh, namsinh, dienthoai, diachi) VALUES('$makh', '$tenkh', '$namsinh', '$dienthoai', '$diachi')";
    if(mysqli_query($conn, $sql)){
        echo "<script>window.location.href='thêm.php'</script>";
        
        //Thêm dữ liệu thành công
    } else {
                echo"Error: ".$sql."<br>".mysqli_error($conn);
    }
        
}
//Đóng kết nối database
mysqli_close($conn);
?>