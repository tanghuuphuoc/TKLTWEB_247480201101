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
//Khai báo giá trị ban đầu, khi chưa submit câu lệnh update sẽ báo lỗi
$makh="";
$tenkh="";
//Lấy giá trị post từ form vừa submit
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtmakh"])){
        $makh=$_POST['txtmakh'];
    }
    if(isset($_POST["txttenkh"])){
        $tenkh=$_POST['txttenkh'];
    }
    //Xử lý, update dữ liệu vào table khachhang
    $sql="UPDATE khachhang SET tenkh= '$tenkh' WHERE makh= '$makh'";
    if(mysqli_query($conn, $sql)){
        echo "<script>window.location.href='thêm update.php'</script>";
        
        //Thêm dữ liệu thành công
    } else {
                echo"Error: ".$sql."<br>".mysqli_error($conn);
    }
        
}
//Đóng kết nối database
mysqli_close($conn);
?>
