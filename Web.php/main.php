<div class="dmnoi">


    <div class="dssp">
        <?php
        if (isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        } else {
            $tam = '';
        }
        if ($tam == "danhmucsp") {
            include('main/danhmuc.php');
        } elseif ($tam == 'sp') {
            include('main/sp.php');
        } elseif ($tam == 'giohang') {
            include('main/giohang.php');
        } elseif ($tam == 'login') {
            include('main/login.php');
        } elseif ($tam == 'dangnhap') {
            include('main/dangnhap.php');
        } elseif ($tam == 'camon') {
            include('main/camon.php');
        } elseif ($tam == 'timkiem') {
            include('main/timkiem.php');
        } elseif ($tam == 'thaydoimatkhau') {
            include('main/thaydoimatkhau.php');
        } elseif ($tam == 'vanchuyen') {
            include('main/vanchuyen.php');
        } elseif ($tam == 'thongtinthanhtoan') {
            include('main/thongtinthanhtoan.php');
        } elseif ($tam == 'donhangdadat') {
            include('main/donhangdadat.php');
        } elseif ($tam == 'lichsudonhang') {
            include('main/lichsudonhang.php');
        }elseif ($tam == 'xemdonhang') {
                include('main/xemdonhang.php');
        } else {
            include("main/index.php");
        }
        ?>
    </div>
</div>