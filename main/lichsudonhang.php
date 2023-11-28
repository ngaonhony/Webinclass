
<?php
require 'Carbon/autoload.php';

use Carbon\Carbon;
use Cacbon\CarbonInterval;
$userid= $_SESSION['userid'];
$sql_lietke_dh = "SELECT * FROM orders,shipping WHERE orders.ship=shipping.shipid AND dangkyid='$userid' ORDER BY orders.id DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
// Lấy ngày hiện tại
$sql_dh = "SELECT * FROM orders WHERE status = '1'";
$query_dh = mysqli_query($mysqli, $sql_dh);
$now = Carbon::now('Asia/Ho_Chi_Minh');
if ($query_dh) {
    while ($query = mysqli_fetch_assoc($query_dh)) {
        $rowi = $query;
        $invoiceDate = $query['ngaynhan'];
        if ($invoiceDate < $now && $rowi['status'] == '1') {
            $sqlh = "UPDATE `orders` SET `status` = '3' WHERE id = " . $rowi['id'];
            $queryzz=mysqli_query($mysqli, $sqlh);
  
              $orderId = $rowi['orderid'];

              // Lấy thông tin chi tiết hóa đơn
              $sqlDetails = "SELECT * FROM ordersdetail WHERE orderid = $orderId";
              $queryDetails = mysqli_query($mysqli, $sqlDetails);
          
              // Duyệt qua từng chi tiết hóa đơn
              while ($z = mysqli_fetch_array($queryDetails)) {
                  $productId = $z['productid'];
                  $quantity = $z['num'];
          
                  // Cập nhật số lượng sản phẩm trong bảng `product`
                  $sqlUpdateProduct = "UPDATE product SET soluong = soluong + $quantity WHERE productid = $productId";
                  mysqli_query($mysqli, $sqlUpdateProduct);
              }
          
        }

    }
}
?>

<p>Liet kee</p>

<table style="width: 100%"  style=" border-collapse: collapse;">
    <tr>
        <th>Mã đơn hàng</th>
        <th>Tên khách</th>
        <th>Địa chỉ</th>
        <th>Số Điên thoại</th>
        <th>Ngày Nhận</th>
        <th>Tình trạng</th>
        
        <th>Hình thức thanh toán</th>
        <th>Quản Lý</th>
        <th></th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++ ?>
    <tr>
        <td>
            <?php echo $row['orderid'] ?>
        </td>
        <td>
            <?php echo $row['khach'] ?>
        </td>
        <td>
            <?php echo $row['diachi'] ?>
        </td>
        <td>
            <?php echo $row['sodt'] ?>
        </td>
        <td>
            <?php echo $row['ngaynhan'] ?>
        </td>
        <td>
            <?php
                if($row['status'] == 1) {
                    echo 'Đơn hàng mới';
                }elseif($row['status'] ==2){
                    echo 'Đơn hàng đã hủy';
                }elseif($row['status'] ==3){
                    echo 'Đơn hàng quá hạn';
                } else {
                    echo 'Đang giao';
                }
            ?>
        </td>
        
        <td>
            <?php echo $row['payment'] ?>
        </td>
        <td>
            <a href="index.php?quanly=xemdonhang&code=<?php echo $row['orderid'] ?>" class="btn btn-primary">Xem đơn hàng</a>
        </td>
        <?php
        if($row['status'] == 1){?>
        <td>
            <a href="main/xoahoadon.php?xoa=<?php echo $row['orderid'] ?>"><i class="fa-solid fa-trash-can"></i></a>
        </td>

        <?php 
        }
        ?>
    </tr>
    <?php } ?>
</table>

<style>
table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
  color: #444;
  border-radius: 10px;
}

th {
  background-color: #337ab7;
  color: #fff;
  text-transform: uppercase;
  padding: 10px;
}

td {
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:nth-child(odd) {
  background-color: #fff;
}

tr:hover {
  background-color: #ddd;
}

.btn {
  display: inline-block;
  padding: 6px 12px;
  font-size: 10px;
  font-weight: 400;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 4px;
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
  margin: 5px;
  transition: all 0.3s ease-in-out;
}

.btn:hover {
  background-color: #286090;
  border-color: #204d74;
}

.btn-primary {
  background-color: #337ab7;
  border-color: #2e6da4;
}

.btn-primary:hover {
  background-color: #286090;
  border-color: #204d74;
}

.btn-danger {
  background-color: #d9534f;
  border-color: #d43f3a;
}

.btn-danger:hover {
  background-color: #c9302c;
  border-color: #ac2925;
}
.fa-trash-can {
  color: red;
}
</style>
