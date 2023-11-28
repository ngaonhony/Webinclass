<!-- 
include("../config.php");
if (isset($_GET['status']) && isset($_GET['code'])) {
    $status = $_GET['status'];
    $code = $_GET['code'];
    $sql = mysqli_query($mysqli, "UPDATE orders SET status='" . $status . "' WHERE orderid='" . $code . "'");
    header("Location:../index.php?action=quanlydonhang&query=lietke");
}
?> -->
<!-- ---------------Thống kê doanh thu--------------------- -->
<?php
require('../../Carbon/autoload.php');
include('../config.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;

if (isset($_SESSION['quantityArray'])) {
    unset($_SESSION['quantityArray']);
}
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
if (isset($_GET['code'])) {
    $code_cart = $_GET['code'];
    $sql_update = "UPDATE orders SET status = 0 WHERE orderid='" . $code_cart . "'";
    $query = mysqli_query($mysqli, $sql_update);

    //thong ke doanh thu
    $sql_lietke_dh = "SELECT * FROM ordersdetail, product WHERE ordersdetail.productid= product.productid AND ordersdetail.orderid='$code_cart' ORDER BY ordersdetail.orderdtid DESC";
    $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);

    $sql_thongke = "SELECT * FROM thongke WHERE  ngaydat='$now'";
    $query_thongke = mysqli_query($mysqli, $sql_thongke);
    $soluongmua = 0;
    $doanhthu = 0;

    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $soluongmua += $row['num'];
        $doanhthu += $row['price'];
    }
    if (mysqli_num_rows($query_thongke) == 0) {
        $soluongban = $soluongmua;
        $doanhthu = $doanhthu;
        $donhang = 1;
        $sql_update_thongke = mysqli_query($mysqli, "INSERT INTO thongke (ngaydat, soluongban, doanhthu, donhang) VALUE('$now','$soluongban','$doanhthu','$donhang')");
    } elseif (mysqli_num_rows($query_thongke) != 0) {
        while ($row_tk = mysqli_fetch_array($query_thongke)) {
            $soluongban = $row_tk['soluongban'] + $soluongban;
            $doanhthu = $row_tk['doanhthu'] + $doanhthu;
            $donhang = $row_tk['donhang'] + 1;
            $sql_update_thongke = mysqli_query($mysqli, "UPDATE thongke SET soluongban='$soluongban', doanhthu='$doanhthu', donhang='$donhang' WHERE ngaydat='$now'");
        }
    }
    header('Location:../index.php?action=quanlydonhang&query=lietke');
}
?>