<?php

$sql_chitiet = "SELECT * FROM product,category WHERE  product.categoryid=category.categoryid AND product.productid='$_GET[id]'";
$query_chiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_assoc($query_chiet)) {
    ?>

    <div class="sp">
        <span>Chi tiết sp</span>

        <img class="anhsp" src="image/<?php echo $row_chitiet['thumbnail'] ?>">

        <form method="POST" action="main/themgiohang.php?idsp=<?php echo $row_chitiet['productid'] ?>">
            <div class=" ctsp">
                <h3>

                  
                </h3>
                <p class=" titlesp">
                Tên Sản Phẩm :
                    <?php echo $row_chitiet['title'] ?>    
                <!-- Số Lượng Sản Phẩm :
                     echo $row_chitiet['soluong'] ?> -->
                </p>
                <p class="pricesp">Giá :
                    <?php echo number_format($row_chitiet['price'], 0, ',', '.') . ' vnd' ?>
                </p>
                <p>Số lượng :
                    <?php echo $row_chitiet['soluong'] ?>
                </p>
                <p>Mô tả :
                    <?php echo $row_chitiet['description'] ?>
                </p>
                

                <p>
                    <input class="addcart" name="themgiohang" type="submit" value="Thêm Giỏ Hàng">
                </p>



            </div>
        </form>
    </div>

<?php } 
?>