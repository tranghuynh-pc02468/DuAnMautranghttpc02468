<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách hàng hóa</h3>
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
                                        <th>Stt</th> 
                                        <th>Tên HH</th>
                                        <th>Đơn giá</th>
                                        <th>Hình ảnh</th>
                                        <th>Lượt xem</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;
                                        foreach ($items as $item) {
                                            extract($item);
                                        
                                    ?>
                                    <tr>
                                        <td><?=$i?></td> 
                                        <td><?= $ten_hh ?></td>
                                        <td><?= number_format($don_gia)  ?>đ</td> 
                                        <td><img style="width:100px" src="../../uploaded/<?= $hinh ?>" alt=""></td>
                                        <td>
                                            <a class="btn btn-primary" href="index.php?btn_edit&ma_hh=<?= $ma_hh ?>" >Sửa</a>
                                            <a class="btn btn-danger" href="index.php?btn_delete&ma_hh=<?= $ma_hh ?>">Xóa</a>
                                        </td>
                                    </tr>
                                    <?php $i++; } ?>
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