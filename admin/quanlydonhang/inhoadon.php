 <?php
require('../config.php');
require('../../tfpdf/tfpdf.php');

$pdf = new tFPDF();
$pdf->AddPage();
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','');

$code=$_GET['code'];
$sql_lietke_dh = "SELECT * FROM ordersdetail,product WHERE ordersdetail.productid=product.productid AND ordersdetail.orderid='".$code."' ORDER BY ordersdetail.orderid DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);

$pdf->SetFillColor(255,255,255);

$pdf->write(30,'SMILETEAM','CENTER');
$pdf->ln(30);
$pdf->write(10,'Hotline: 0344444444 ');
$pdf->ln(10);
$pdf->write(10,'Địa chỉ: Cộng Hòa ,TpHCM ');
$pdf->ln(15);
$pdf->write(1,'----------------------------------------------------------------------------------------------------------------------------------------');

$pdf->write(10,'Hóa đơn thanh toán: ');

$pdf->ln(10);

$width_cell=array(5,20,100,16,30,30,30,50);    

	$pdf->Cell($width_cell[0],10,'ID',0,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Mã hàng ',0,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên sản phẩm',0,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Số lượng',0,0,'C',true); 
	$pdf->Cell($width_cell[4],10,'Giá',0,0,'C',true);
	$pdf->Cell($width_cell[5],10,'Tổng tiền',0,1,'C',true); 

	
    $pdf->ln(5);
	$pdf->write(1,'----------------------------------------------------------------------------------------------------------------------------------------');
    $pdf->ln(5);
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$tongtien=0;
	$tongthanhtoan=0;
	
	$i = 0;
	while($row = mysqli_fetch_array($query_lietke_dh)){
		$i++;
	$pdf->Cell($width_cell[0],10,$i,0,0,'C',$fill);
	$pdf->Cell($width_cell[1],10,$row['orderid'],0,0,'C',$fill);
	$pdf->Cell($width_cell[2],10,$row['title'],0,0,'C',$fill);
	$pdf->Cell($width_cell[3],10,$row['num'],0,0,'C',$fill);
	$pdf->Cell($width_cell[4],10,number_format($row['price']),0,0,'C',$fill);

	$pdf->Cell($width_cell[5],10,number_format($row['num']*$row['price']),0,1,'C',$fill);
	//$tongtien=$row['num']*$row['price'];
	//$tongthanhtoan+=$tongtien;

	// $pdf->Cell($width_cell[6],10,number_format($row['tongthanhtoan']),0,1,'C',$fill);
	
	$fill = !$fill;

	}

	// $pdf->Cell($width_cell[6],10,'Tổng thanh toán',1,1,'C',true); 
	$pdf->ln(10);
	
$pdf->write(20,'##########################################################');
	
    $pdf->ln(20);
	$pdf->Write(8,'CẢM ƠN BẠN ĐÃ ĐẶT HÀNG TẠI WEBSIDE CỦA CHÚNG TÔI !');
    $pdf->ln(10);
    $pdf->Write(8,'HẸN GẶP LẠI !');
	



$pdf->Output();
?>