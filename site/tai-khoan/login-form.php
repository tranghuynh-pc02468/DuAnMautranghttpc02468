<div class="card mb-3">
    <div class="card-header text-center text-uppercase">tài khoản</div>
    <div class="card-body">
        <form action="<?=$SITE_URL?>/tai-khoan/login.php" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" name="username" >
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" name="mat_khau" >
                <!--  -->
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="ghi_nho" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Ghi nhớ tài khoản
                </label>
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-primary w-75" name="btn_login">Đăng nhập</button>
            </div>
            <div class="mb-3 text-center">
                <a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php" class="text-decoration-none">Quên mật khẩu?</a>
                <hr class="m-2">
                <a href="<?= $SITE_URL ?>/tai-khoan/register.php" class="btn btn-success">Đăng ký </a>
            </div>
        </form>
    </div>
    <div class="card-footer">
    <?php
                    if(isset($mgs) && !empty($mgs)){
                ?>
                <small class="text-danger">s<?=$mgs?></small>
                <?php } ?>
    </div>
</div>