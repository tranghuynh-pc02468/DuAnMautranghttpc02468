<div class="row">
    <?php
    foreach ($items as $item) {
        extract($item);

        ?>

        <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card">
                <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>" class="text-decoration-none">
                    <img src="<?= $UPLOAD_URL . $hinh ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class=" text-black">
                            <?= $ten_hh ?>
                        </h6>
                        <p class="card-text">
                            <?= number_format($don_gia) ?> đ
                        </p>
                    </div>
                </a>

            </div>
        </div>

    <?php } ?>

</div>