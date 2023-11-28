<?php

$sql_danhmucsp = "SELECT * FROM category";
$query_danhmucsp = mysqli_query($mysqli, $sql_danhmucsp);

if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>
<div class="header">
    <div class="top">
        <a href="index.php"><img src="image/topzone.webp"></a>
    </div>
    <div class="bottom">
        <div class="logo">
            <a href="index.php">
                <span>Smile Store</span>
                <span>Smile Store</span>
            </a>
        </div>
        <div class="search">
        <div class="other">

<form action="index.php?quanly=timkiem" method="post">
    <input type="text" placeholder="Tim kiem" style="float: left;height: 40px;" name="noidung">
    <button class="fa fa-search" style=" border: none; width: 40px;height: 40px;" type="submit"
        name="btn"></button>
    <ul id="suggestions"></ul>
</form>
</div>
  </div>
        <div class="item">
        <a href="index.php?quanly=giohang">
                <p><i class=" fa-solid fa-cart-shopping"></i>Giỏ hàng</p>
            </a>
        </div>
        <?php 
        if (isset($_SESSION['dangky'])) { ?>
            <div class="item">
                <a href="index.php?quanly=thaydoimatkhau">
                    <p><i class="fa fa-lock"></i>Đổi mật khẩu</p>
                </a>
            </div>
            <div class="item">
                <a href="index.php?quanly=lichsudonhang">
                    <p><i class="fa fa-user"></i>Lịch sử đơn hàng</p>
                </a>
            </div>
            <div class="item">
                <a href="index.php?dangxuat=1">
                    <p><i class="fa fa-user"></i>Đăng Xuất</p>
                </a>
            </div>
        <?php } else { ?>
            <div class="item">
                <a href="index.php?quanly=login">
                    <p><i class="fa fa-user"></i>Đăng ký</p>
                </a>
            </div>
            <div class="item">
            <a href="index.php?quanly=dangnhap">
                <p><i class="fa-solid fa-user"></i>Đăng Nhập </p>
            </a>
        </div>
        <?php } ?>
    </div>
</div>