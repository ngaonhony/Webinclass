<?php
session_start();
include("admin/config.php");
if (isset($_POST['themgiohang'])) {
    // session_destroy();
    $id = $_GET['idsp'];
    $soluong = 1;
    $sql = "SELECT * FROM product WHERE productid='" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array('max'=>$row['soluong'],'tensanpham' => $row['title'], 'id' => $id, 'soluong' => $soluong, 'gia' => $row['price'], 'thumbnail' => $row['thumbnail'], 'categoryid' => $row['categoryid']));
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                if ($cart_item['id'] == $id) {
                    $tangsoluong = $cart_item['soluong'] + 1;
                    if ($tangsoluong <= $cart_item['max']) {
                        $product[] = array(
                            'max'=>$cart_item['max'],
                            'tensanpham' => $cart_item['tensanpham'],
                            'id' => $cart_item['id'],
                            'soluong' => $tangsoluong,
                            'gia' => $cart_item['gia'],
                            'thumbnail' => $cart_item['thumbnail'],
                            'categoryid' => $cart_item['categoryid']
                        );
                    } else {
                        $product[] = array('max'=>$cart_item['max'],'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['max'], 'gia' => $cart_item['gia'], 'thumbnail' => $cart_item['thumbnail'], 'categoryid' => $cart_item['categoryid']);
                    }
                    $found = true;
                } else {
                    $product[] = array('max'=>$cart_item['max'],'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'gia' => $cart_item['gia'], 'thumbnail' => $cart_item['thumbnail'], 'categoryid' => $cart_item['categoryid']);

                }
            }
            if ($found == false) {
                $_SESSION['cart'] = array_merge($product, $new_product);

            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    header('Location:../index.php?quanly=giohang');
}

if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('max'=>$cart_item['max'],'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'gia' => $cart_item['gia'], 'thumbnail' => $cart_item['thumbnail'], 'categoryid' => $cart_item['categoryid']);
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong2 = $cart_item['soluong'] + 1;
            if ($cart_item['soluong'] < $cart_item['max']) {

                $product[] = array('max'=>$cart_item['max'],'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong2, 'gia' => $cart_item['gia'], 'thumbnail' => $cart_item['thumbnail'], 'categoryid' => $cart_item['categoryid']);
            } else {
                $product[] = array('max'=>$cart_item['max'],'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'gia' => $cart_item['gia'], 'thumbnail' => $cart_item['thumbnail'], 'categoryid' => $cart_item['categoryid']);
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:../index.php?quanly=giohang');
}

if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('max'=>$cart_item['max'],'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'gia' => $cart_item['gia'], 'thumbnail' => $cart_item['thumbnail'], 'categoryid' => $cart_item['categoryid']);
            $_SESSION['cart'] = $product;
        } else {
            $trusoluong = $cart_item['soluong'] - 1;
            if ($cart_item['soluong'] > 1) {

                $product[] = array('max'=>$cart_item['max'],'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $trusoluong, 'gia' => $cart_item['gia'], 'thumbnail' => $cart_item['thumbnail'], 'categoryid' => $cart_item['categoryid']);
            } else {
                $product[] = array('max'=>$cart_item['max'],'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'gia' => $cart_item['gia'], 'thumbnail' => $cart_item['thumbnail'], 'categoryid' => $cart_item['categoryid']);
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:../index.php?quanly=giohang');
}


if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('max'=>$cart_item['max'],'tensanpham' => $cart_item['tensanpham'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'gia' => $cart_item['gia'], 'thumbnail' => $cart_item['thumbnail'], 'categoryid' => $cart_item['categoryid']);
        }
        $_SESSION['cart'] = $product;
        header('Location:../index.php?quanly=giohang');
    }
}
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header('Location:../index.php?quanly=giohang');
}

/*--------------------------------------------------------*/
?>