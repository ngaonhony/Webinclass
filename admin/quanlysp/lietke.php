<?php

// $query_pro = mysqli_query($mysqli, $sql_pro);
$sql_lietke_sp = "SELECT * FROM product,category WHERE product.categoryid=category.categoryid ORDER BY productid DESC ";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
$sql_lietke = "SELECT * FROM product ORDER BY productid DESC ";
$query_lietke = mysqli_query($mysqli, $sql_lietke);
if ($query_lietke) {
    while ($rowi = mysqli_fetch_assoc($query_lietke)) {
        $tinhtrang = $rowi['tinhtrang'];
        $soluong = $rowi['soluong'];
        if ($rowi['tinhtrang'] == 1 && $rowi['soluong'] == 0) {
            mysqli_query($mysqli, "UPDATE `product` SET `tinhtrang` = '0' WHERE `tinhtrang` = '1' AND `soluong` = '0'");
        } elseif ($rowi['tinhtrang'] != 1 && $rowi['soluong'] != 0) {
            mysqli_query($mysqli, "UPDATE `product` SET `tinhtrang` = '1' WHERE `tinhtrang` != '1' AND `soluong` != '0'");
        }
    }
}
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
    <!-- <div class="container-xxl position-relative bg-white d-flex p-0"> -->

    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.php" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ADMIN</h3>
            </a>
            <div class="navbar-nav w-100">
                <a href="index.php" class="nav-item nav-link" style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i
                        class="fa fa-tachometer-alt me-2"></i>Thong
                    ke</a>
                <a href="index.php?action=quanlydanhmucsp&query=them" class="nav-item nav-link"
                    style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i class="fa fa-th me-2"></i>Quan ly danh
                    muc</a>
                <a href="index.php?action=quanlysp&query=them" class="nav-item nav-link  active"
                    style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i class="fa fa-keyboard me-2"></i>Quan ly san
                    pham</a>
                <a href="index.php?action=quanlydonhang&query=lietke" class="nav-item nav-link"
                    style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i class="fa fa-table me-2"></i>Quan ly don
                    hang</a>
                <a href="index.php?dangxuat=1" class="nav-item nav-link"
                    style="margin-left: 0px; padding: 7px 20px 7px 20px;"><i class="fa fa-chart-bar me-2"></i>Dang
                    xuat</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <!-- Table Start -->
    <!-- <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4"> -->

    <div class="table-responsive">
        <h3 class="mb-4">Quan ly san pham</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tên san pham</th>
                    <th scope="col">Hinh anh</th>
                    <th scope="col">Mã sp</th>
                    <th scope="col">So luong</th>
                    <th scope="col">giasp</th>
                    <th scope="col">Mo ta</th>
                    <th scope="col">Trang Thai</th>
                    <th scope="col">Quan ly</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query_lietke_sp)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['productid'] ?>
                        </td>

                        <td>
                            <?php echo $row['title'] ?>
                        </td>
                        <td><img src="../image/<?php echo $row['thumbnail'] ?>" width=150px></td>
                        <td>
                            <?php echo $row['categoryid'] ?>
                        </td>
                        <td>
                            <?php echo $row['soluong'] ?>
                        </td>
                        <td>
                            <?php echo $row['price'] ?>
                        </td>
                        <td>
                            <?php echo $row['description'] ?>
                        </td>
                        <td>
                            <?php if ($row['tinhtrang'] == 1) {
                                echo 'Kích hoạt';
                            } else {
                                echo 'Ẩn';
                            } ?>
                        </td>
                        <td>
                            <a href="quanlysp/xuly.php?idsp=<?php echo $row['productid'] ?>">Xoa</a> |
                            <a href="index.php?action=quanlysp&query=sua&idsp=<?php echo $row['productid'] ?>">Sua</a>

                        </td>

                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
    <!-- </div>
                </div>
            </div>
        </div> -->
    <!-- Table End -->

    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- </div> -->

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
</body>

</html>