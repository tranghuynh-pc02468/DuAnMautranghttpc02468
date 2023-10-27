<div class="card mb-3">
    <div class="card-header text-center text-uppercase">tài khoản</div>
    <div class="card-body"> 
        <div class="text-center ">
            <img src="<?= $UPLOAD_URL.$_SESSION['user']['hinh'] ?>" class="rounded w-50"
                alt="IMG">
            <h3><?= $_SESSION['user']['username'] ?> </h3>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link" href="<?= $SITE_URL ?>/tai-khoan/login.php?btn_logoff"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a>
            <a class="nav-link" href="<?= $SITE_URL ?>/tai-khoan/doi-mk.php"><i class="bi bi-lock"></i> Đổi mật khẩu</a>
            <a class="nav-link" href="<?= $SITE_URL ?>/tai-khoan/update.php"><i class="bi bi-person"></i> Cập nhật tài khoản</a>
            <?php
                if($_SESSION['user']['vai_tro'] == TRUE){
            ?>
            <a class="nav-link" href="<?= $ADMIN_URL ?>/trang-chinh"><i class="bi bi-person-gear"></i> Quản trị web</a>
                <?php } else{ ?>
                    <a class="nav-link disabled" href="<?= $ADMIN_URL ?>/trang-chinh"><i class="bi bi-person-gear"></i> Quản trị web</a>
                    <?php } ?>
        </nav>
    </div>
</div>