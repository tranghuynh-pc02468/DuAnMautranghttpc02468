<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card  ">
                        <div class="card-header">
                            <h3 class="card-title">Sửa loại hàng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="index.php" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Mã loại: </label>
                                    <input type="text" class="form-control" name="ma_loai"
                                        placeholder="auto number" disabled value="<?= $ma_loai ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Tên loại: </label>
                                    <input type="text" class="form-control" id="" name="ten_loai"
                                        placeholder="Nhập tên loại hàng " value="<?= $ten_loai ?>">
                                </div>
                                <input type="hidden" name="ma_loai" value="<?=$ma_loai?>">
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button   class="btn btn-primary" name="btn_update">Cập nhật</button>
                            <a href="index.php?btn_list" class="btn btn-primary">Danh sách</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>