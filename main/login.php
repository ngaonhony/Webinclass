<?php

include "admin/config.php";

if (isset($_POST["dangky"])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    $matkhau = md5($_POST['matkhau']); // Không sử dụng MD5() ở đây

    // Kiểm tra dữ liệu đầu vào
    if (empty($tenkhachhang) || empty($email) || empty($dienthoai) || empty($diachi) || empty($matkhau)) {
        echo '<p style="color:red;">Vui lòng điền đầy đủ thông tin.</p>';
    } else {
        
        // Sử dụng prepared statement để ngăn chặn SQL Injection
        $stmt = $mysqli->prepare("INSERT INTO user (`fullname`, `email`, `phonenumber`, `address`, `password`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $tenkhachhang, $email, $dienthoai, $diachi, $matkhau);
        if ($stmt->execute()) {
            echo '<script>alert("Bạn đã đăng kí thành công")</script>';
            $_SESSION['dangky'] = $tenkhachhang;
            $_SESSION['userid'] = $stmt->insert_id;
            $_SESSION['email'] = $email;
                $userid= $_SESSION['userid'];
                $sql_them_vanchuyen = mysqli_query($mysqli,"INSERT INTO shipping(khach,sodt,diachi,dangkyid) VALUES('$tenkhachhang','$dienthoai','$diachi','$userid')");
        
                echo '<script>
                alert("Bạn đã đăng ký thành công");
                window.location.href = "index.php";
            </script>';
        } else {
            echo '<p style="color:red;">Đăng ký thất bại. Vui lòng thử lại sau.</p>';
        }
        $stmt->close();
    }
}
?>



<head>
    <link rel="stylesheet" href="css/login_user.css">
</head>

<body>
    <form action="" method="POST">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-49">
                            Đăng kí
                        </span>

                        <div class="wrap-input100 validate-input " data-validate="không được để trống">
                            <span class="label-input100">Họ và tên</span>

                            <input class="input100" type="text" name="hovaten" placeholder="nhập họ Tên..">

                        </div>

                        <div class="wrap-input100 validate-input " data-validate="không được để trống">
                            <span class="label-input100">Email</span>

                            <input class="input100" type="email" name="email" placeholder="Nhập email...">

                        </div>

                        <div class="wrap-input100 validate-input " data-validate="không được để trống">
                            <span class="label-input100">Số điện thoại</span>

                            <input class="input100" type="tel" name="dienthoai" placeholder="Nhập số điện thoại...">

                        </div>

                        <div class="wrap-input100 validate-input " data-validate="không được để trống">
                            <span class="label-input100">Địa Chỉ</span>

                            <input class="input100" type="text" name="diachi" placeholder="Nhập địa chỉ...">

                        </div>

                        <div class="wrap-input100 validate-input" data-validate="không được để trống">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="text" name="matkhau" placeholder="Nhập password">

                        </div>

                        <div class="text-right p-t-8 p-b-31">
                            <a>

                            </a>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>

                                <button class="login100-form-btn" type="submit" name="dangky">
                                    Đăng kí
                                </button>
                            </div>
                        </div>


                        <div class="flex-col-c p-t-155">
                            <span class="txt1 p-b-17">
                                Or
                            </span>

                            <a class="txt2" href="index.php?quanly=dangnhap" style="color:brown">
                                Đăng Nhập
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