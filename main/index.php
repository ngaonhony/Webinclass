<?php

// $sql_pro = "SELECT * FROM product,category WHERE  product.categoryid=category.categoryid ORDER BY productid DESC    ";
// $query_pro = mysqli_query($mysqli, $sql_pro);
$sql_pro = "SELECT * FROM product WHERE product.categoryid='1' ORDER BY productid DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);

$sql_cate = "SELECT * FROM category WHERE category.categoryid='1' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);

$sql_pro2 = "SELECT * FROM product WHERE product.categoryid='2' ORDER BY productid DESC";
$query_pro2 = mysqli_query($mysqli, $sql_pro2);

$sql_cate2 = "SELECT * FROM category WHERE category.categoryid='2' LIMIT 1";
$query_cate2 = mysqli_query($mysqli, $sql_cate2);
$row_title2 = mysqli_fetch_array($query_cate2);

$sql_pro3 = "SELECT * FROM product WHERE product.categoryid='3' ORDER BY productid DESC";
$query_pro3 = mysqli_query($mysqli, $sql_pro3);

$sql_cate3 = "SELECT * FROM category WHERE category.categoryid='3' LIMIT 1";
$query_cate3 = mysqli_query($mysqli, $sql_cate3);
$row_title3 = mysqli_fetch_array($query_cate3);
?>

<div class="js">
    <div class="trai" style="width: 75%;
        height:40vh;">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

        <session class="slider owl-carousel owl-theme" style="width: 100%;"><a href="index.php?quanly=danhmucsp&id=3">
                <div class="slider-item slider-item-one ">


                </div>
            </a><a href="index.php?quanly=sp&id=84">
                <div class="slider-item slider-item-two">

                </div>
            </a><a href="index.php?quanly=sp&id=19">
                <div class="slider-item slider-item-three">

                </div>
            </a>
            <div class="slider-item slider-item-four">
                <a href="index.php?quanly=sp&id=<?php echo $row['productid'] ?>"></a>
            </div>
        </session>
        <!-- <div class="slide">

            <div class="title">
                <p>Tiêu đề 1</p>
            </div>
            <div class="title">
                <p>Tiêu đề 2</p>
            </div>
            <div class="title">
                <p>Tiêu đề 3</p>
            </div>
            <div class="title">
                <p>Tiêu đề 4</p>
            </div>
        </div> -->
    </div>

    <hr width="1px" height="50px" padding="0 auto">
    <div class="phai">
        <div class="phai-anh">
            <a href="index.php?quanly=sp&id=83">
                <img src="image/phai-anh1.png" alt="Hình ảnh chưa có"></a>
        </div>

        <div class="phai-anh">
            <a href="index.php?quanly=sp&id=82">
                <img src="image/phai-anh2.png" alt="Hình ảnh chưa có"></a>
        </div>
        <div class="phai-anh">
            <a href="index.php?quanly=sp&id=80">
                <img src="image/phai-anh3.png" alt="Hình ảnh chưa có"></a>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                300: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    </script>
</div>
<div class="cach">
    <img src="image/cach.jpg">
</div>


<!-- ---------------------slider-product----------------------------------- -->
<div class="slider-product-one-content-title">
    <h2>Điện thoại</h2>
</div>

<div class="owl-carousel owl-theme" style="transform: translateY(0%);  width: 1180px;">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
        if ($row['soluong'] > 0) {
        ?>
        <div class="item1">
            <div class="dstrangchu">
                <div class="product-trangchu">
                    <div class="a">
                        <a href="index.php?quanly=sp&id=<?php echo $row['productid'] ?>">
                            <img src="image/<?php echo $row['thumbnail'] ?>" alt="" WIDTH="180px" HEIGHT="250">
                            <p class="titlesp">
                                <?php echo $row['title'] ?>
                            </p>
                            <p class="pricesp">Giá :
                                <?php echo number_format($row['price'], 0, ',', '.') . ' vnd' ?>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } }?>
</div>

<div class="slider-product-one-content-title">
    <h2>Máy tính</h2>
</div>
<div class="owl-carousel owl-theme" style="transform: translateY(0%);  width: 1180px;">
    <?php
    while ($row = mysqli_fetch_array($query_pro2)) {
        if ($row['soluong'] > 0) {
        ?>
        <div class="item1">
            <div class="dstrangchu">
                <div class="product-trangchu">
                    <div class="a">
                        <a href="index.php?quanly=sp&id=<?php echo $row['productid'] ?>">
                            <img src="image/<?php echo $row['thumbnail'] ?>" alt="" WIDTH="180px" HEIGHT="250">
                            <p class="titlesp">
                                <?php echo $row['title'] ?>
                            </p>
                            <p class="pricesp">Giá :
                                <?php echo number_format($row['price'], 0, ',', '.') . ' vnd' ?>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } } ?>

</div>
<div class="slider-product-one-content-title">
    <h2>Phụ kiện</h2>
</div>
<div class="owl-carousel owl-theme" style="transform: translateY(0%);width: 1180px;">
    <?php
    while ($row = mysqli_fetch_array($query_pro3)) {
        if ($row['soluong'] > 0) {
        ?>
        <div class="item1">
            <div class="dstrangchu">
                <div class="product-trangchu">
                    <div class="a">
                        <a href="index.php?quanly=sp&id=<?php echo $row['productid'] ?>">
                            <img src="image/<?php echo $row['thumbnail'] ?>" alt="" WIDTH="180px" HEIGHT="250">
                            <p class="titlesp">
                                <?php echo $row['title'] ?>
                            </p>
                            <p class="pricesp">Giá :
                                <?php echo number_format($row['price'], 0, ',', '.') . ' vnd' ?>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } }?>
</div>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<!--
    <div class="a">
        <a href="#">
            <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa54xbZPpCr7R-feeCmXDs3k0k8TYM6syWKQ&usqp=CAU"
                alt="" WIDTH="180px" HEIGHT="250">
            <p>Xiaomi Redmi Note 11</p>
        </a>
    </div>
    <div class="a">
        <a href="#">
            <h1>ảnh1</h1>
        </a>
    </div>


    <div class="a">
        <a href="#">
            <img src="data:image/jpeg;base64,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"
                alt="" WIDTH="180px" HEIGHT="250">
            <p>SamSung Galaxy Zlip 4</p>
        </a>
    </div>


    <div class="a">
        <a href="#">
            <img src="data:image/jpeg;base64,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sQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQERED//2Q=="
                alt="" WIDTH="180px" HEIGHT="250">
            <p>Sạc Apple 20W MHJE3</p>
        </a>
    </div>


    <div class="a">
        <a href="#">
            <img src="data:image/jpeg;base64,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"
                alt="" WIDTH="180px" HEIGHT="250">
            <p>Tai nghe Bluetooth True Wireless AVA+ FreeGo A20</p>
        </a>
    </div>

</div>

<h2>Danh mục SÚng</h2>
<div class="danhsach">
    <div class="a">
        <a href="#">
            <p>ảnh1</p>
        </a>
    </div>
    <div class="a">
        <a href="#">
            <h1>ảnh1</h1>
        </a>
    </div>
    <div class="a">
        <a href="#">
            <h1>ảnh1</h1>
        </a>
    </div>
    <div class="a">
        <a href="#">
            <h1>ảnh1</h1>
        </a>
    </div>
    <div class="a">
        <a href="#">
            <h1>ảnh1</h1>
        </a>
    </div> 
</div>-->