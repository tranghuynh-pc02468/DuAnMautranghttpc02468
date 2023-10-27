<?php 
    if(isset($mgs) && !empty($mgs)) {
?>
<div class="alert alert-success" role="alert">
        <?= $mgs ?>
</div>
<?php } ?>
<div class="card">
    <div class="card-header text-center">
        <h3>Đăng ký</h3>
    </div>
    <div class="card-body">
        <form action="register.php" id="formRegister" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Tên đăng nhập</label>
                    <input name="username"  class="form-control" >
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Địa chỉ email</label>
                    <input name="email"  class="form-control">
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input name="mat_khau" type="password"   class="form-control">
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Xác nhận mật khẩu</label>
                    <input name="mat_khau2" type="password" class="form-control">
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label">Hình</label>
                    <input name="hinh" type="file" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="btn_register">Đăng ký</button>
                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                </div>
                <!--Giá trị mặc định-->
                <input name="vai_tro" value="0" type="hidden">
            </div>
        </form>

    </div>
</div>

