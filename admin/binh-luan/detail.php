<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Chi tiết bình luận</h3> 
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nội dung</th>
                                        <th>Ngày BL</th>
                                        <th>Người BL</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($items as $item) {
                                            extract($item);
                                            # code...
                                        }
                                    ?>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?= $noi_dung ?></td>
                                        <td><?= $ngay_bl ?></td>
                                        <td><?= $username ?></td> 
                                        <td> 
                                            <button class="btn btn-danger">Xóa</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer bg-white">
                            <button class="btn btn-default">Chọn tất cả</button>
                            <button class="btn btn-default">Bỏ chọn tất cả</button>
                            <button class="btn btn-default">Xóa các mục đã chọn</button>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>