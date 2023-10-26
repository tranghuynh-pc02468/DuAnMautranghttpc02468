<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sửa thông tin khách hàng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body  ">
                            <form action="index.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- <div class="form-group col-lg-6">
                                        <label for="">Mã khách hàng (Tên đăng nhập)</label>
                                        <input type="text" class="form-control" name="ma_kh" value="<?= $ma_kh ?>">
                                    </div> -->
                                    <div class="form-group col-lg-6">
                                        <label for="">Tên đăng nhập</label>
                                        <input type="text" class="form-control" name="username" value="<?= $username ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">Mật khẩu</label>
                                        <input type="password" class="form-control" name="mat_khau" value="<?= $mat_khau ?>">
                                    </div>
                                    <!-- <div class="form-group col-lg-6">
                                        <label for="">Xác nhận mật khẩu</label>
                                        <input type="password" class="form-control" name="mat_khau2" value="<?= $mat_khau ?>">
                                    </div> -->
                                    <div class="form-group col-lg-6">
                                        <label for="">Địa chỉ email</label>
                                        <input type="email" class="form-control" name="email" value="<?= $email ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">Hình ảnh</label>
                                        <input type="file" class="form-control" name="hinh" value="<?= $hinh ?>">
                                    </div>
                                    
                                    <div class="form-group col-lg-6">
                                        <label for="">Vai trò</label>
                                        <div class="d-flex border p-2 rounded">
                                            <div class="custom-control custom-radio px-4">
                                                <input class="custom-control-input" type="radio" id="customRadio3"
                                                    name="vai_tro" value="0"  <?=!$vai_tro?'checked':''?> >
                                                <label for="customRadio3" class="custom-control-label">Khách
                                                    hàng</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio4"
                                                    name="vai_tro" value="1"   <?=$vai_tro?'checked':''?> >
                                                <label for="customRadio4" class="custom-control-label">Nhân viên</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="ma_kh" value="<?= $ma_kh ?>">
                                        <button class="btn btn-primary"  name="btn_update">Cập nhật</button>
                                    </div>
                                </div>
                            </form>
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