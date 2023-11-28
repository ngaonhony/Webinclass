<p>Xóa Hóa Đơn</p>
<?php
session_start();
include("../config.php");

$id=$_GET['xoa'];
$sql_xoa = "UPDATE `orders` SET`status`='2' WHERE orderid = '".$id."' AND status='1' " ;
$ok=mysqli_query($mysqli,$sql_xoa);
// Lấy thông tin chi tiết hóa đơn
$sql = "SELECT * FROM ordersdetail WHERE orderid = '".$id."'";
$query = mysqli_query($mysqli, $sql);

// Duyệt qua từng chi tiết hóa đơn
while ($row = mysqli_fetch_array($query)) {
    $productId = $row['productid'];
    $quantity = $row['num'];

    // Cập nhật số lượng sản phẩm trong bảng `product`
    $sqlUpdate = "UPDATE product SET soluong = soluong + " . $quantity . " WHERE productid = " . $productId;
    mysqli_query($mysqli, $sqlUpdate);
}
header('Location:../index.php?action=quanlydonhang&query=lietke');