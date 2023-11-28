<?php
if (isset($_POST['thaydoimatkhau'])) {
    $email = $_POST['email'];
    $password_cu = MD5($_POST['password_cu']);
    $password_moi = MD5($_POST['password_moi']);
    $sql = "SELECT * FROM user WHERE email='" . $email . "' AND password='" . $password_cu . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $sql_update = mysqli_query($mysqli, "UPDATE user SET password='" . $password_moi . "'");
        echo '<p style="coloer: green">Mật khẩu đã được thay đổi</p>';
    } else {
        echo '<p style="color:red">Mật khẩu or tài khoản chưa chính xác</p>';

    }
}
?>

<div id="wrapper">
<h3>Đổi mật khẩu</h3>  
<style>
    .wrapper{
        text-align: center;
        font-size:20px;
    }
    .table-login {
        border-collapse: collapse;
        width: 40%;
        margin:0 auto;
        height:300px;
    }

    .table-login th, .table-login td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table-login th {
        background-color: #f2f2f2;
    }


    .table-login input[type="text"], .table-login input[type="password"] {
        padding: 6px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .table-login input[type="submit"] {
        padding: 6px 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .table-login input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<form action="" autocomplete="off" method="POST">
    <table class="table-login">
       
        <tr> 
            <td colspan="2">
              
            </td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" name="email" placeholder="Email..."></td>
        </tr>
        <tr>
            <td>Mật khẩu cũ</td>
            <td><input type="password" name="password_cu" placeholder="Mật khẩu cũ"></td>
        </tr>
        <tr>
            <td>Mật khẩu mới</td>
            <td><input type="password" name="password_moi" placeholder="Mật khẩu mới"></td>
        </tr>
        
   
       
    </table>
    <input type="submit" name="thaydoimatkhau" value="Đổi mật khẩu">
</form>
<div class="table-login">

</div>