<?php
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = '1';
}
if ($page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 8) - 8;
}
$id=$_GET['id'];
// $sql_pro = "SELECT * FROM product,category WHERE  product.categoryid=category.categoryid ORDER BY productid DESC LIMIT $begin,12     ";
$sql_pro = "SELECT * FROM product WHERE product.categoryid='$id' ORDER BY productid DESC LIMIT 8 OFFSET $begin";
$query_pro = mysqli_query($mysqli, $sql_pro);

$sql_cate = "SELECT * FROM category WHERE category.categoryid='$id' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);

?>
<h2>
    <?php echo $row_title['name'] ?>
</h2>
<div class="danhsach">
<?php
while ($row_pro = mysqli_fetch_array($query_pro)) {
    if ($row_pro['soluong'] > 0) {
        ?>
        <div class="a">
            <a href="index.php?quanly=sp&id=<?php echo $row_pro['productid'] ?>">
                <img src="image/<?php echo $row_pro['thumbnail'] ?>" alt="" WIDTH="180px" HEIGHT="250px">
                <p class="titlesp">
                    <?php echo $row_pro['title'] ?>
                </p>
                <p class="pricesp">Giá :
                    <?php echo number_format($row_pro['price'], 0, ',', '.') . ' vnd' ?>
                </p>
            </a>
        </div>
    <?php
    }
}
?>
    <!-- <div class="dt7">H</div>
    <div class="dt8">Á</div>
    <div class="dt9">N</div>
    <div class="dt10">H</div> -->

</div>
<?php
$sql_trang = mysqli_query($mysqli, "SELECT * FROM product WHERE categoryid='$id' AND soluong > 0 ORDER BY productid DESC");
$row_count = mysqli_num_rows($sql_trang);
$trang = ceil($row_count / 8);

?>
<style type="text/css">
    ul.list_trang {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    ul.list_trang li {
        float: left;
        padding: 5px;
        margin: 5px;
        background: burlywood;
    }

    p {
        margin: 5px 0 0;
    }
</style>



<p>Trang hiện tại :
<?php echo $page ?>/
    <?php echo $trang ?>
</p>
<div style="height: 50px;">
    <ul class="list_trang">
        <?php
        for ($i = 1; $i <= $trang; $i++) {
            ?>
            <li <?php if ($i == $page) {
                echo 'style="background :brown"';
            } else {
                echo '';
            } ?>><a href="index.php?quanly=danhmucsp&id=<?php echo $id ?>&trang=<?php echo $i ?>">
                    <?php echo $i ?>
                </a></li>
            <?php
        }
        ?>


    </ul>
</div> 