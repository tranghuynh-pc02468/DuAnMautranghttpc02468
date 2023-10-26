<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thống kê hàng hóa từng loại</h3>
                        </div>

                        <div class="card-body">
                            <div id="piechart"></div>

                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                            <script type="text/javascript">
                                // Load google charts
                                google.charts.load('current', { 'packages': ['corechart'] });
                                google.charts.setOnLoadCallback(drawChart);

                                // Draw the chart and set the chart values
                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Loại', 'Số lượng'],
                                        <?php
                                        foreach ($items as $item) {
                                            echo " ['$item[ten_loai]', $item[so_luong]], ";
                                        }
                                        ?>

                                    ]);

                                    // Optional; add a title and set the width and height of the chart
                                    var options = { 'title': 'Tỉ lệ hàng hóa', 'width': 550, 'height': 400 };

                                    // Display the chart inside the <div> element with id="piechart"
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                    chart.draw(data, options);
                                }
                            </script>
                        </div>

                        
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>