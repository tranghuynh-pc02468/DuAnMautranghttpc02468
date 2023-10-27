<!-- Chi tiết -->
<div class="row p-3 mb-3 ">
    <div class="col-lg-7 text-center">
        <img src="<?= $UPLOAD_URL . $hinh ?>" class="rounded w-75 " alt="...">
    </div>
    <div class="col-lg-5">
        <h4>
            <?= $ten_hh ?>
        </h4>
        <h5>
            <?= number_format($don_gia) ?> đ
        </h5>
        <div class="mb-3">
            <label for="">Số lượng</label>
            <input type="number" class="form-control w-25" value="1">
        </div>
        <button class="btn btn-primary">Thêm vào giỏ hàng</button>
    </div>
    <div class="col-lg-12 mt-3">
        <?= $mo_ta ?>
    </div>
</div>

<!-- Bình luận -->
<div class="card">
    <div class="card-header">Bình luận</div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-5">
                <ul>
                    <?php
                    foreach ($binh_luan_list as $binh_luan) {
                        extract($binh_luan);

                        ?>
                        <li class="list-group-item">
                            <span class="fw-bold">
                                <?= $ma_kh ?>
                            </span> -
                            <?= $ngay_bl ?> <br>
                            <span class="fst-italic">
                                <?= $noi_dung ?>
                            </span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-7">
                <?php
                if (!isset($_SESSION['user'])) {
                    echo '
                    <form action="">
                    <div class="mb-3">
                        <label for="" class="form-label">Đánh giá về sản phẩm</label>
                        <textarea name="" class="form-control" disabled id="" placeholder="Đăng nhập để bình luận" rows="5"></textarea>
                    </div>
                    <button class="btn btn-info" disabled>Gửi</button>
                </form>
                    ';
                } else {


                    ?>

                    <form action="<?=$_SERVER['REQUEST_URL']?>" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Đánh giá về sản phẩm</label>
                            <textarea name="noi_dung" class="form-control"  id="" cols="30" rows="5" ></textarea>
                        </div>
                        <button class="btn btn-info">Gửi</button>
                    </form>

                <?php } ?>
            </div>
        </div>

    </div>
</div>


<!-- SP tương tự -->
<div class="row mt-5">
    <h4 class="text-uppercase">Sản phẩm cùng loại</h4>
    <?php
    foreach ($hh_cung_loai as $item) {
        extract($item);

        ?>
        <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card">
                <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>" class="text-decoration-none">
                    <img src="<?= $UPLOAD_URL . $hinh ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">
                            <?= $ten_hh ?>
                        </h5>
                        <p class="card-text">
                            <?= number_format($don_gia) ?> đ
                        </p>
                    </div>
                </a>

            </div>
        </div>
    <?php } ?>
</div>