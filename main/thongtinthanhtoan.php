<p>Hinh thuc thanh toan</p>

<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
  <div class="step "> <span> <a href="" >Gio hang</a></span> </div>
    <div class="step"> <span><a href="" >Van chuyen</a></span> </div>
    <div class="step"> <span><a href="" >Ngày Nhận</a><span> </div>  
    <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toan</a><span> </div>
 
  </div>
  
        <div class="row">

            <?php
            $id_dangky = $_SESSION['userid'];
            $sql=mysqli_query($mysqli,"SELECT * FROM shipping,orders WHERE orders.ship=shipping.shipid AND shipping.dangkyid='$id_dangky' ORDER BY id DESC LIMIT 1");
   
            if ($sql) {
                $row_get_vanchuyen = mysqli_fetch_array($sql);
                if($row_get_vanchuyen>0){
                $name = $row_get_vanchuyen['khach'];
                $phone = $row_get_vanchuyen['sodt'];
                $address = $row_get_vanchuyen['diachi'];
                $note = $row_get_vanchuyen['note'];
                $ngaydat=$row_get_vanchuyen['ngaynhan'];
                $ngay = date("d/m/Y", strtotime($ngaydat));
            }
        }
            ?>
            <div class="col-md-8">
                <h4>Thong tin van chuyen va gio hang</h4>
                <ul>
                    <li>Ho va ten van chuyen : <b>
                            <?php echo $name ?>
                        </b></li>
                    <li>So dien thoai : <b>
                            <?php echo $phone ?>
                        </b></li>
                    <li>Dia chi : <b>
                            <?php echo $address ?>
                        </b></li>
                    <li>Ghi chu : <b>
                            <?php echo $note ?>
                        </b></li>
                        <li>Ngày Nhận: <b>
                            <?php echo $ngay ?>
                        </b></li>
                       
                </ul>
            </div>  
            <style>
             h1 {
      color: #333;
      margin-bottom: 20px;
    }

    .thank-you-message {
      font-size: 20px;
      color: #666;
      margin-bottom: 30px;
    }

    .ok-button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .ok-button:hover {
      background-color: #45a049;
    }

    .thank-you-container {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 999;
    }

    .thank-you-popup {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      text-align: center;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var okButton = document.getElementById("ok-button");
      var thankYouContainer = document.getElementById("thank-you-container");

      okButton.addEventListener("click", function() {
        thankYouContainer.style.display = "flex";
        setTimeout(function() {
          thankYouContainer.style.display = "none";
          window.location.href = "index.php"; // Thay đổi "index.html" thành đường dẫn tới trang index thực tế của bạn
        }, 3000); // Chuyển hướng sau 3 giây (có thể điều chỉnh thời gian tùy ý)
      });
    });
  </script>
    
    <button id="ok-button" class="ok-button">OK</button>
  

  <div id="thank-you-container" class="thank-you-container">
    <div class="thank-you-popup">
      <p class="thank-you-message">Cảm ơn bạn đã đồng ý!</p>
      <p>Bạn sẽ được chuyển hướng đến trang chính sau vài giây...</p>
    </div>
  </div>
    </form>
  </div>