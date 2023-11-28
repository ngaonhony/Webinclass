<style>

</style>


<?php
$sql_chitiet = "SELECT * FROM product,category WHERE  product.categoryid=category.categoryid AND product.productid='$_GET[id]'";
$query_chiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_assoc($query_chiet)) {
    ?>

<div class="sp">
    <span>CHI TIẾT SẢN PHẨM</span>

    <img class="anhsp" src="../image/<?php echo $row_chitiet['thumbnail'] ?>">

    <form method="POST" action="../main/themgiohang.php?idsp=<?php echo $row_chitiet['productid'] ?>">
        <div>
            <h3>
                <?php echo $row_chitiet['title'] ?>
            </h3>
            <p class=" titlesp">Số Lượng Sản Phẩm :
                <?php echo $row_chitiet['soluong'] ?>
            </p>
            <p class="pricesp">Giá :
                <?php echo number_format($row_chitiet['price'], 0, ',', '.') . ' vnd' ?>
            </p>
            <p>Mô tả :
                <?php echo $row_chitiet['description'] ?>
            </p>


            <input class="addcart" name="themgiohang" type="submit" value="Thêm Giỏ Hàng">





        </div>

    </form>
    <a href="../main/thanhtoan.php"> <input class="addcart" name="muangay" type="submit" value="Mua Ngay"></a>
</div>

<?php } ?>