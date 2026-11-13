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
//Khai báo giá trị ban đầu, khi chưa submit câu lệnh select sẽ báo lỗi
$tenkh="";
//Lấy giá trị post từ form vừa submit
if($_SERVER["REQUEST_METHOD"]=="POST"){   
    if(isset($_POST["txttenkh"])){
        $tenkh=$_POST['txttenkh'];
    }
    //Xử lý, browse dữ liệu vào table khachhang
    $sql="SELECT * FROM khachhang WHERE tenkh='$tenkh'";
    if($result=mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                echo $row['makh'];
               echo $row['tenkh'];
               echo $row['namsinh'];
               echo $row['dienthoai'];
               echo $row['diachi'] . "<br>";
            }
            //Giải phóng nhớ của biến
            mysqli_free_result($result);
        }
        else
        {
            echo"No Records";
        }
    }      
}
//Đóng kết nối database
mysqli_close($conn);
?>