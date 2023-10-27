<div class="card mb-3">
    <div class="card-header text-center text-uppercase">Top yêu thích</div>
    <ul class="list-group list-group-flush">

        <?php
        require_once '../../dao/hang-hoa.php';
        $items = hang_hoa_top10();
        foreach ($items as $item) {
            $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$item[ma_hh]";

            ?>

            <li class="list-group-item"><a href="<?= $href ?>" class="text-decoration-none pe-4">
            <div class="row">
                <div class="col-lg-3 "><img src="<?= $UPLOAD_URL . $item['hinh'] ?>" class="card-img-top img-thumbnail me-3 w-100" alt=""></div>
                <div class="col-lg-9"><?= $item['ten_hh'] ?></div>
            </div>
                   
                </a></li>

        <?php } ?>
    </ul>
</div>

 <!-- <img src="<?= $UPLOAD_URL . $item['hinh'] ?>" class="card-img-top img-thumbnail me-3 w-25" alt="">
 <?= $item['ten_hh'] ?> -->