<?php
if (isset($_POST['btn'])) {
    $noidung = $_POST['noidung'];
}
//  else {
//     echo $noidung = false;
//  }
$sql_pro = "SELECT * FROM product, category WHERE  product.title and product.categoryid=category.categoryid like '%" . $noidung . "%'";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>
<h3>Tu khoa :
    <?php echo $_POST['noidung']; ?>
</h3>

<div class="danhsach">
    <?php
    include("admin/config.php");
    $sql = "SELECT * FROM product WHERE title LIKE '%$noidung%'";
    $result = mysqli_query($mysqli, $sql);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            // while ($row = mysqli_fetch_array($query_pro)) {
            ?>

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

        <?php }
    } else {
        echo "Khong tim thay san pham nao co ten: $noidung";
    } ?>
</div>