<?php
$sql_lietke_dh = "SELECT * FROM ordersdetail,product WHERE ordersdetail.productid=product.productid AND ordersdetail.orderid='$_GET[code]' ORDER BY ordersdetail.orderdtid DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<p>Liet kee</p>
<style>
   table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 14px;
    color: #333;
    
  }

  th {
    background-color: #337ab7;
    color: white;
    border: 1px solid #ccc;
    padding: 10px;
    font-weight: bold;
    text-align: center;
  }

  td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #e5e5e5;
  }

  .total-row {
    font-weight: bold;
    background-color: #f2f2f2;
  }

  .total-row td {
    padding-top: 12px;
    padding-bottom: 12px;
  }

  .total-label {
    font-weight: bold;
    margin-right: 10px;
    text-align: right; /* Align label to the right */
  }

  .total-value {
    font-size: 18px;
    color: #ff4500;
  }

  /* Styling for table header */
  thead th {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
  }

  /* Styling for table footer */
  tfoot td {
    background-color: #f2f2f2;
    font-weight: bold;
    padding: 12px;
  }

  /* Styling for table caption */
  caption {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #4CAF50;
  }

  /* Styling for table borders */
 

  /* Styling for table cells */
  td,
  th {
    text-align: center;
  }

  /* Styling for table hover effect */
  tr:hover {
    background-color: #f2f2f2;
    cursor: pointer;
  }

  /* Styling for table responsive design */
  @media (max-width: 768px) {
    table {
      font-size: 12px;
    }
  }
</style>

<table>
  <tr>
    <th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành Tiền</th>
  </tr>
  <?php
  $i = 0;
  $tongtien = 0;
  $thanhtien = 0;
  while ($row = mysqli_fetch_array($query_lietke_dh)) {
    $i++;
    $thanhtien = $row['price'] * $row['num'];
    $tongtien += $thanhtien;
    ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row['orderid'] ?></td>
      <td><?php echo $row['title'] ?></td>
      <td><?php echo $row['num'] ?></td>
      <td><?php echo number_format($row['price'], 0, ',', '.') . 'vnd' ?></td>
      <td><?php echo number_format($thanhtien, 0, ',', '.') . 'vnd' ?></td>
    </tr>
  <?php }
  ?>
  <tr class="total-row">
    <td colspan="5" class="total-label">Tổng tiền:</td>
    <td class="total-value"><?php echo number_format($tongtien, 0, ',', '.') . 'vnd' ?></td>
  </tr>
</table>
