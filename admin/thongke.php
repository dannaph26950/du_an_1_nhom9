<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../admin/src/style.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<style>
    .fill{
        color: #0a53be;
    }
</style>
<body>
<div class="bieudo_css"  id="myChart" style=""></div>

<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh Mục', 'Doanh Thu ','Khóa học sản phẩm'],
            <?php

            $tongdm = count($listthongke);
            $i = 0;
            foreach ($listthongke as $thongke){
                extract($thongke);
                if ($i == $tongdm) $dauphay=""; else $dauphay=",";
                echo "['".$thongke['ten_danh_muc']."',".$thongke['gia_tien']. ",".$thongke['countsp']."]".$dauphay;
                $i+=1;
            }
            ?>
        ]);

        var options = {
            title:'Biểu Đồ Thống Kê Doanh Thu theo danh muc'
        };

        var chart = new google.visualization.BarChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>
</body>
</html>