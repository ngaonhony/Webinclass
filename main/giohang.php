<style>
   
table {
    width: 73%;

    border-collapse: collapse;
    background-color: white;
    font-family: 'Roboto', sans-serif;
    border: 0;

}

th,
td {
    padding: 8px;
    text-align: left;
    border-top: 1px solid #dee2e6;
    border: 0;
}

h2 {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    background-color: #f2f2f2;
    color: mediumblue;
    font-size: 30px;
    margin-bottom: 5px;
    text-align: center;
    font-family: 'Roboto', sans-serif;
}

tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
}

.nut_dang_nhap {
    background-color: rgb(20, 53, 195);
    font-size: 20px;
    width: 80%;
    height: 50px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border: none;
    margin-left: 40px;
    color: white;
}


.nut_xoa {
    width: 120px;
    height: 30px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    background-color: #ff3300;
    color: #ffebe6;
    border: none;
}

.xoa_1 {
    background-color: #ff3300 !important;
    width: 50px;
    height: 25px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border: none;
    background-color: rgb(20, 53, 195);
    color: white;

}

.tang_giam {
    width: 20px;
    height: 20px;
    background-color: rgb(20, 53, 195);
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border: none;
    color: white;

}

#bass {
    height: 40px;
    text-align: center;
    font-size: 40px;
    color: blue;
    margin-top: 30px;
}

.o_thanh_toan {

    width: 26%;
    height: 270px;
    background-color: #f2f2f2;
    float: right;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    font-family: 'Roboto', sans-serif;
}

.tien {
    font-size: 20px;
    margin-left: 10px;
}

#so_tien {
    color: blue;
    float: right;
    margin-right: 20px;
}
</style>

<p>gio hang</p>
<?php

if (isset($_SESSION["dangky"])) {
    echo 'xin chào: ' . '<span style="color:red">' . $_SESSION['dangky'] . '</span>';

}
?>
<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step current"> <span> <a href="index.php?quanly=giohang" >Gio hang</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=vanchuyen" >Van chuyen</a></span> </div>
    <div class="step"> <span><a href="" >Ngày nhan</a><span> </div>  
    <div class="step"> <span><a href="" >Thanh toan</a><span> </div>
    
  </div>

<table >
    <!-- //style="width:100%; text-align:center;border-collapse:collapse;" border="1"; -->
    <tr style="background-color: rgb(20, 53, 195);color:white">
        <th>Id</th>
        <th>Mã sp</th>
        <th style="width: 30%;">Tên sản phẩm</th>
        <th>Hình minh họa</th>
        <th  style="width: 12%;">Số lượng</th>
        <th>Giá sản phẩm</th>
        <th>Thành tiền</th>
        <th> </th>
    </tr>
    <?php
    if (isset($_SESSION['cart'])) {
        $i = 0;
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
            $tongtien += $thanhtien;
            $i++;

            ?>
            <tr>
                <td style="color:red">
                    <?php echo $i; ?>
                </td>
                <td>
                    <?php echo $cart_item['categoryid']; ?>
                </td>
                <td style="width: 30%;">
                    <?php echo $cart_item['tensanpham']; ?>
                </td>
                <td><img src="image/<?php echo $cart_item['thumbnail']; ?>" alt="" width="150px" height="150px"></td>
                <td>
    <?php if ($cart_item['soluong'] < $cart_item['max']){ ?>
        <a href="main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">
            <button class="tang_giam">+</button>
            
        </a>
    <?php } ?>

    <?php echo $cart_item['soluong']; ?>

    <?php if ($cart_item['soluong'] > 1){ ?>
        <a href="main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">
            <button class="tang_giam">-</button>
        </a>
    <?php } ?>
</td>
                <td style="font-size: 15px;">
                    <?php echo number_format($cart_item['gia'], 0, ',', '.') . 'vnd'; ?>
                </td style="font-size: 15px;">
                <td>
                    <?php echo number_format($thanhtien, 0, ',', '.') . 'vnd'; ?>
                </td>
                <td><a href="main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i><button
                        class="xoa_1">xóa</button></a>
                </td>
            </tr>
            
            <?php
        }
        ?><tr>
        <td colspan="8">

            <p style="float:right;"><a href="main/themgiohang.php?xoatatca=1"><button class="nut_xoa">
                        Xóa tất cả</button></a></p>
        </td>


    </tr>
        <div class="o_thanh_toan">
        <p id="bass">Thanh Toán</p>
        <p style="height: 20px;">
        <span class="tien">Tổng Tính : </span>
            <span style="float:right;margin-right: 20px">
                    <?php echo number_format($tongtien, 0, ',', '.') . 'vnd' ?></span>
                </p><br />

                <div style="clear:both;"></div>
                <?php
                if (isset($_SESSION['dangky'])) {
                    ?>
                    <p><a href="index.php?quanly=vanchuyen"><button class="nut_dang_nhap">Hình thức vận chuyển</button></a></p>
                    <?php
                } else {
                    ?>
                    <p> <a class="addcart"  href="index.php?quanly=dangnhap"><button class="nut_dang_nhap">Đăng Nhập Để
                    Thanh Toán</button></a>
                        </a></p>


                    <?php
                } ?>
            </td>


        </tr>
        
        
        <?php
    } else {
        ?>
        <tr>
            <td colspan="8">
                <p>Hiện tại giỏ hàng trống
                <p>
            </td>
        </tr>
        <?php
    }
    ?>
        </div>
</table>
</div>