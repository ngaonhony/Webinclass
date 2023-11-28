<?php
session_start();
include('admin/config.php');
require('Carbon/autoload.php');
require("vendor/sendmail.php");
use Carbon\Carbon;
use Cacbon\CarbonInterval;
$cart_payment = $_POST['payment'];
$now = Carbon::now('Asia/Ho_Chi_Minh');

$code_order = rand(0, 9999);
$time = $_POST['delivery_date'];
//lay id thong tin van chuyen
$id_dangky = $_SESSION['userid'];
$sql_get_vanchuyen = mysqli_query($mysqli, "SELECT * FROM shipping WHERE dangkyid= '$id_dangky' ORDER BY shipid DESC");
$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
$id_shipping = $row_get_vanchuyen['shipid'];
// insert cart
if(isset($_POST['date'])){
    $insert_cart = "INSERT INTO orders(userid,orderid,status,orderdate,ngaynhan,payment,ship) VALUE ('" . $id_dangky . "','" . $code_order . "',1,'" . $now . "','".$time."','".$cart_payment."','" . $id_shipping . "')";
    $cart_query= mysqli_query($mysqli,$insert_cart);
    if($cart_query) {
    
        foreach($_SESSION['cart'] as $key => $value) {
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $max = $value['max'];
    
            $insert_order_details = "INSERT INTO ordersdetail(productid, orderid, num) VALUE('" . $id_sanpham . "', '" . $code_order . "', '" . $soluong . "')";
            mysqli_query($mysqli, $insert_order_details);
            mysqli_query($mysqli, "UPDATE `product` SET `soluong` = '" . ($max - $soluong) . "' WHERE `product`.`productid` = '" . $id_sanpham . "'");
        }

    
    $tieude = "Dat hang tai cua hang Nhom 5 thanh cong!";
$noidung = "<p>Cam on quy khach da dat hang!</p> ";
$noidung .= "<h4>Don hang bao gom : </h4>";
foreach ($_SESSION['cart'] as $key => $val) {
    $noidung .= "<ul style='border: 1px solid blue; margin:10px;'>
   <h4>Ten san pham :  </h4> <li>" . $val['tensanpham'] . "</li>
   <h4>ID san pham: </h4> <li>" . $val['id'] . "</li>
   <h4>Gia :  </h4><li>" . number_format($val['gia'], 0, ',', '.') . "d</li>
   <h4>So luong : </h4><li>" . $val['soluong'] . "</li>
    </ul>
    ";
}
$maildathang = $_SESSION['email'];
$mail = new Mailer();
$mail->dathangmail($tieude, $noidung, $maildathang);
}
}


unset($_SESSION['cart']);
header('Location:index.php?quanly=thongtinthanhtoan');
// if(isset($_POST['update'])){
//     $time = $_POST['delivery_date'];
//     $id_shipping=$_SESSION['ngaynhan'];
//     $insert_cart2 = "UPDATE `orders` SET `ngaynhan`='".$time."' WHERE id='".$id_shipping."'";
//     $cart_query2= mysqli_query($mysqli,$insert_cart2);
//     $insert_cart3 = "SELECT * FROM orders WHERE orderid ='".$code_order."'";
//   $cart_query3= mysqli_query($mysqli,$insert_cart3);
//     $count2 = mysqli_num_rows($cart_query3);
//   if ($count2 > 0){  $_SESSION['date'] = $time;header('Location:index.php?quanly=thongtinthanhtoan');
//   }}
?>