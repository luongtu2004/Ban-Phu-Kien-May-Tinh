<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Danh mục','số lượng'],
          <?php 
          foreach($dsthongke as $thongke){
            extract($thongke);
            echo "['$name', $soluong],";
          }
          ?>
         
        ]);

        var options = {
          title: 'Biểu đồ số lượng sản phẩm trong danh mục',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <div class="row headermin">
            <h2>BIỂU ĐỒ</h2>
        </div>
<div class="row mb">
  <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</div>
  </body>
</html>