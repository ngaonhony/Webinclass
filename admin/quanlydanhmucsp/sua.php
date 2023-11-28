<?php
$sql_sua_danhmucsp = "SELECT * FROM category WHERE categoryid='$_GET[iddanhmuc]'LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="../../css/akadmin.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../css/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../css/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/admin/css/style.css" rel="stylesheet">
</head>

<body>


    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"
                        style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i
                            class="fa fa-tachometer-alt me-2"></i>Thong
                        ke</a>
                    <a href="index.php?action=quanlydanhmucsp&query=them" class="nav-item nav-link active"
                        style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i class="fa fa-th me-2"></i>Quan ly danh
                        muc</a>
                    <a href="index.php?action=quanlysp&query=them" class="nav-item nav-link"
                        style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i class="fa fa-keyboard me-2"></i>Quan ly
                        san
                        pham</a>
                    <a href="index.php?action=quanlydonhang&query=lietke" class="nav-item nav-link"
                        style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i class="fa fa-table me-2"></i>Quan ly
                        don hang</a>
                    <a href="index.php?dangxuat=1" class="nav-item nav-link"
                        style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i class="fa fa-chart-bar me-2"></i>Dang
                        xuat</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <!-- Table Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-30">
                    <div class="bg-light rounded h-100 p-4">

                        <table class="table">

                            <thead>
                                <h6 class="mb-4">Sửa danh mục sản phẩm</h6>
                                <tr>
                                    <th scope="col">Tên danh mục</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <form method="POST"
                                        action="quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
                                        <?php
                                        while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
                                            ?>

                                            <td><input type="text" value="<?php echo $dong['name'] ?>" name="name"></td>
                                            <td collapse="2"><input type="submit" name="suadanhmuc"
                                                    value="Sua danh mục sản phẩm"></td>


                                        <?php } ?>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table End -->

        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../../css/admin/lib/chart/chart.min.js"></script>
        <script src="../../css/admin/lib/easing/easing.min.js"></script>
        <script src="../../css/admin/lib/waypoints/waypoints.min.js"></script>
        <script src="../../css/admin/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../../css/admin/lib/tempusdominus/js/moment.min.js"></script>
        <script src="../../css/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="../../css/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="../../css/admin/js/main.js"></script>
    </div>
</body>

</html>