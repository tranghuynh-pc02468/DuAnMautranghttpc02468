<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tổng hợp bình luận</h3> 
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr> 
                                        <th>Hàng hóa</th>
                                        <th>Số BL</th>
                                        <th>Mới nhất</th>
                                        <th>Cũ nhất</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($items as $item) {
                                            extract($item);
                                    ?>
                                    <tr>  
                                        <td><?= $ten_hh ?></td>
                                        <td><?= $so_luong ?></td>
                                        <td><?= $cu_nhat ?></td>
                                        <td><?= $moi_nhat ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="index.php?ma_hh=<?= $ma_hh ?>">Chi tiết</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>