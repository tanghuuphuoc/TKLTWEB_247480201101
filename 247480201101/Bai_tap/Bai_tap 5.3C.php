<?php
do{
$x=rand(1,100);
$y=rand(1, 100); 
}while($x <= $y);
echo "Giá trị: x= $x , y= $y <br>";
echo "Cộng:" . ($x + $y) . "<br>";
echo "Trừ:" . ($x - $y) . "<br>";
echo "Nhân:". ($x * $y) . "<br>";
echo "Chia:" . ($x / $y) . "<br>";
echo "Chia lấy dư:" . ($x % $y). "<br>";
?>