<?php
session_start();
include "config.php";
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = MD5($_POST['password']);
    $sql = "SELECT * FROM admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header('Location:index.php');
    } else {
        echo '<script>alert("BẠN NHẬP CÁI GÌ VẬY");</script>';
        header('Location:login.php');
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Admin </title>
    <link rel="stylesheet" href="../css/login_admin.css">

    <style>
        .wrapper-login {

            display: flex;
            justify-content: center
        }

        .table-login {
            width: 100%;
        }

        .table-login tr {
            padding: 10px;
        }
    </style>
    <script type="text/javascript">
        function validateForm() {
            var username = document.getElementsByName('username')[0].value;
            var password = document.getElementsByName('password')[0].value;

            if (username === "" || password === "") {
                alert("Tài khoản và mật khẩu không được để trống!");
                return false; // Ngăn form được gửi nếu có lỗi
            }
        }
    </script>

</head>

<head>


    <link rel="stylesheet" type="text/css" href="../css/login_user.css">
    <!--===============================================================================================-->
</head>

<body>



    <div class="wrapper-login">
        <form action="" autocomplete="off" method="POST" onsubmit="return validateForm();">
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="padding-bottom: 400px;">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title p-b-49">
                                Đăng Nhập Admin
                            </span>

                            <div class="wrap-input100 validate-input m-b-23" data-validate="không được để trống">
                                <span class="label-input100">Tai khoan</span>

                                <input class="input100" type="text" name="username" placeholder="Nhap ten tai khoan">

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

                                    <button class="login100-form-btn" type="submit" name="dangnhap" style="background-color: red;">
                                        Login
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>

