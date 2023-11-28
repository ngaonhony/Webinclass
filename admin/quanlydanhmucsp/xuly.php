<?php 
include("../config.php");

$tenloaisp = $_POST['name'];
if(isset($_POST['themdanhmuc'])){
    $sql_them="INSERT INTO category(name) VALUE ('".$tenloaisp."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../index.php?action=quanlydanhmucsp&query=them');
}elseif(isset($_POST['suadanhmuc'])){
    $sql_update="UPDATE category SET name='".$tenloaisp."' WHERE categoryid='$_GET[iddanhmuc]'";
    mysqli_query($mysqli,$sql_update);
    header('Location:../index.php?action=quanlydanhmucsp&query=them');
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM category WHERE categoryid = '".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../index.php?action=quanlydanhmucsp&query=them');
}
?>