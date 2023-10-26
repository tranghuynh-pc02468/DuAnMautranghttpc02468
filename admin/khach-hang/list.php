<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách Khách hàng</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <a class="btn btn-primary" href="index.php?form_insert">Thêm mới</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Tên đăng nhập</th>
                                        <th>Địa chỉ Email</th>
                                        <th>Hình ảnh</th>
                                        <th>Vai trò</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;
                                        foreach ($list as $item) {
                                            extract($item);
                                        
                                    ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?= $username ?></td>
                                        <td><?= $email ?></td>
                                        <td><?= $hinh ?></td>
                                        <td><?= ((int)$vai_tro == 1) ? "Nhân viên":"Khách hàng";?></td>
                                        <td>
                                            <a class="btn btn-primary" href="index.php?btn_edit&ma_kh=<?=$ma_kh?>">Sửa</a>
                                            <a class="btn btn-danger" href="index.php?btn_delete&ma_kh=<?=$ma_kh?>">Xóa</a>
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