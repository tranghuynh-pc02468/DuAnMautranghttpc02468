<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thống kê hàng hóa từng loại</h3>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Loại hàng</th>
                                        <th>Số lượng</th>
                                        <th>Giá cao nhất</th>
                                        <th>Giá thấp nhất</th>
                                        <th>Giá trung bình</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($items as $item) {
                                            extract($item);
                                        
                                    ?>
                                    <tr>
                                        <td><?= $ten_loai ?></td>
                                        <td><?= $so_luong ?></td>
                                        <td><?= number_format($gia_min) ?> đ</td>
                                        <td><?= number_format($gia_max) ?> đ</td>
                                        <td><?= number_format($gia_avg) ?> đ</td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer">
                            <a href="index.php?btn_chart" class="btn btn-default">Xem biểu đồ</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>