<?php
if (!empty($MESSAGE)) {
    ?>
    <div class="alert alert-primary" role="alert">
        <?= $MESSAGE ?>
    </div>
<?php } ?>
<div class="card">
    <div class="card-header text-center">
        <h3>Cập nhật tài khoản</h3>
    </div>
    <div class="card-body">
        <form action="update.php" id="formRegister" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <img src="<?= $UPLOAD_URL . $hinh ?>" alt="" class="w-25 rounded mx-auto d-block">
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Tên đăng nhập</label>
                    <input name="username" value="<?= $username ?>" class="form-control">
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Địa chỉ email</label>
                    <input name="email" value="<?= $email ?>" class="form-control">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Hình mới</label>
                    <input name="hinh" type="file"  class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="btn_update">Cập nhật</button>
                </div>
                <!--Giá trị mặc định-->
                <input name="vai_tro" value="0" type="hidden">
                <input type="hidden" name="ma_kh" value="<?= $ma_kh ?>">
                <input type="hidden" name="hinh" value="<?= $hinh ?>">
                <input type="hidden" name="mat_khau" value="<?= $mat_khau ?>">
            </div>
        </form>

    </div>
</div>