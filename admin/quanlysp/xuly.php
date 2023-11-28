<?php
include("../config.php");

$tensp = $_POST['name'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$mota = $_POST['mota'];
$tinhtrang = $_POST['tinhtrang'];

$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
// 

if (isset($_POST['themsp'])) {
    $hinhanh = time() . '_' . $hinhanh;
    $sql_them = "INSERT INTO product(categoryid, title,soluong,thumbnail, price, description,tinhtrang) VALUES ('" . $masp . "','" . $tensp . "','" . $soluong . "','" . $hinhanh . "','" . $giasp . "','" . $mota . "','" . $tinhtrang . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, '../../image/' . $hinhanh);
    header('Location:../index.php?action=quanlysp&query=them');
} elseif (isset($_POST['suasp'])) {
    if ($hinhanh != '') {
        $hinhanh = time() . '_' . $hinhanh;
        move_uploaded_file($hinhanh_tmp, '../../image/' . $hinhanh);
        $sql = "SELECT * FROM product WHERE productid='$_GET[idsp]'LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('../../image/' . $row['thumbnail']);
        }
        $sql_update = "UPDATE product SET categoryid='" . $masp . "',title='" . $tensp . "',`soluong`='" . $soluong . "',`price`='" . $giasp . "',`thumbnail`='" . $hinhanh . "',`description`='" . $mota . "',`tinhtrang`='" . $tinhtrang . "' WHERE product.productid='$_GET[idsp]'";
    } else {
        $sql_update = "UPDATE product SET categoryid='" . $masp . "',title='" . $tensp . "',`soluong`='" . $soluong . "',`price`='" . $giasp . "',`description`='" . $mota . "',`tinhtrang`='" . $tinhtrang . "' WHERE product.productid='$_GET[idsp]';";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../index.php?action=quanlysp&query=them');
} else {
    $id = $_GET['idsp'];
    $sql = "SELECT * FROM product WHERE productid='$id'LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('../../image/' . $row['thumbnail']);
    }
    $sql_xoa = "DELETE FROM product WHERE productid = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../index.php?action=quanlysp&query=them');
}
?>