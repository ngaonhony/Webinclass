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
    <link href="../css/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/admin/css/style.css" rel="stylesheet">
</head>

<?php
if (isset($_GET['action']) && $_GET['query']) {
    $tam = $_GET['action'];
    $query = $_GET['query'];
} else {
    $tam = '';
}
if ($tam == "quanlydanhmucsp" && $query == "them") {
    ?>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-30 col-xl-30">
                    <div class="bg-light rounded h-100 p-4">
                        <?php
                        include('quanlydanhmucsp/them.php');
                        include('quanlydanhmucsp/lietke.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} elseif ($tam == "quanlydanhmucsp" && $query == "sua") {
    include('quanlydanhmucsp/sua.php');
} elseif ($tam == "quanlysp" && $query == "them") {
    ?>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <?php
                        include('quanlysp/them.php');
                        include('quanlysp/lietke.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
} elseif ($tam == "quanlysp" && $query == "sua") {
    include('quanlysp/sua.php');
} elseif ($tam == "quanlydonhang" && $query == "lietke") {
    include('quanlydonhang/lietke.php');
} elseif ($tam == "donhang" && $query == "xemdonhang") {
    include('quanlydonhang/xemdonhang.php');
} else {
    include("dashboard.php");
}
?>