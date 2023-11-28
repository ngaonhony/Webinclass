<?php
require 'Carbon/autoload.php';

use Carbon\Carbon;
include "admin/config.php";
// if(isset($_SESSION['userid'])){
//     header('Location:../Web.php/index.php');
// }
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = MD5($_POST['password']);
    $sql = "SELECT * FROM user WHERE email='" . $email . "' AND password='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['fullname'];
        $_SESSION['userid'] = $row_data['userid'];
        $_SESSION['email'] = $row_data['email'];
        // if (isset($_SESSION['cart'])) {
        //     /* echo '<pre>';
        //      print_r($_SESSION['cart']);
        //      echo '</pre>';*/
        //     header('Location:../Web.php/index.php?quanly=giohang');
        // }
        echo '<script>
    alert("Bạn đã đăng nhập thành công");
    window.location.href = "index.php?quanly=giohang";
</script>';
    } else {
        echo '<p style="color:red">Mật khẩu hoặc tài khoản chưa chính xác</p>';

    }
} ?>




<head>


    <link rel="stylesheet" type="text/css" href="css/login_user.css">
    <!--===============================================================================================-->
</head>

<body>
    <form action="" method="POST">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-49">
                            Đăng Nhập
                        </span>

                        <div class="wrap-input100 validate-input m-b-23" data-validate="không được để trống">
                            <span class="label-input100">Email</span>

                            <input class="input100" type="email" name="email" placeholder="Nhập email">

                        </div>

                        <div class="wrap-input100 validate-input" data-validate="không được để trống">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="password" name="password" placeholder="Nhập password">

                        </div>

                        <div class="text-right p-t-8 p-b-31">
                            <a>

                            </a>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>

                                <button class="login100-form-btn" type="submit" name="dangnhap">
                                    Login
                                </button>
                            </div>
                        </div>


                        <div class="flex-col-c p-t-155">
                            <span class="txt1 p-b-17">
                                Or
                            </span>

                            <a class="txt2" href="index.php?quanly=login" style="color:brown">
                                Đăng Kí
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
</body>