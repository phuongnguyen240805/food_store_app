<html>
  
  <head>
    <h2 style="text-align:center; color: green;">THỐNG KÊ TỔNG SẢN PHẨM THEO DANH MỤC</h2>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['TENDM', 'number_cate'],
          <?php
          foreach ($data["statisticalD"] as $key){
            echo "['".$key['TENDM']."',".$key['number_cate']."],";
          }


         ?>
        ]);

        var options = {
          title: 'Biểu đồ thống kê',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px; margin-left: 250px;"></div>
  </body>
</html>