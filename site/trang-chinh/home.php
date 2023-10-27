<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="width:100%; height:350px">
        <div class="carousel-item active">
            <img src="https://i.pinimg.com/originals/ea/bd/aa/eabdaadef69a169117a2900e77bfde9f.jpg"
                class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://www.yugatech.com/wp-content/uploads/2022/06/Laptops-below-30k.png" class="d-block w-100"
                alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://geniusmobile.lk/wp-content/uploads/2020/10/apple-banner.jpg" class="d-block w-100"
                alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row">
    <?php
    foreach ($list_home as $item) {
        extract($item);

        ?>

        <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card">
                <a href="<?=$SITE_URL?>/hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>" class="text-decoration-none">
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