<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" href="../css/akadmin.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>

<P><h3>Thống kê đơn hàng theo :<span id="text-date"></span></h3></P>
<p>
    <select class="select-date">
        <option value="7ngay"> 7 ngày qua </option>
        <option value="28ngay"> 28 ngày qua </option>
        <option value="90ngay"> 90 ngày qua </option>
        <option value="365ngay"> 365 ngày qua </option>
    </select>
</p>
<div id="chart" style="height: 250px;"></div>

<html lang="en">

<body>
        <?php
        include("config.php");

        ?>
    

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            thongke();
            var char = new Morris.Area({
                //    parseTime:false,
                //    hideHover:'auto',
                element: 'chart',
                //    linColors:['#819C79','#fc8710','#FF6541','#A4ADD3','#766B56'],
                xkey: 'date',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['date', 'order', 'sales', 'quantity'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
                labels: ['ngay dat', 'đơn hàng', 'doanh thu', 'số lượng bán ra']
            });
            $('.select-date').change(function () {

                var thoigian = $(this).val();
                if (thoigian == '7ngay') {
                    var text = '7 ngày qua';
                } else if (thoigian == '28ngay') {
                    var text = '28 ngày qua';
                } else if (thoigian == '90ngay') {
                    var text = '90 ngày qua';
                } else {
                    var text = '365 ngày qua';
                }
                $.ajax({

                    url: "thongke.php",
                    method: "POST",
                    dataType: "JSON",
                    data: { thoigian: thoigian },
                    success: function (data) {
                        char.setData(data);
                        $('#text-date').text(text);
                    }
                });

            })

            function thongke() {
                var text = '7 ngày qua';
                $('#text-date').text(text);
                $.ajax({

                    url: "thongke.php",

                    method: "POST",

                    dataType: "JSON",

                    success: function (data) {
                        char.setData(data);
                        $('#text-date').text(text);
                    }
                });
            }
        });
    </script>

    </script>
</body>

</html>