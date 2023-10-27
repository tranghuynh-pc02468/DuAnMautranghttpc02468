<div class="card mb-3">
    <div class="card-header text-center text-uppercase">danh mục</div>
    <ul class="list-group list-group-flush">
        <?php
        // require '../../global.php';
        require '../../dao/loai.php';
        $items = loai_selectAll();
        foreach ($items as $item) {
            $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$item[ma_loai]";

            ?>
            <li class="list-group-item"><a href="<?= $href ?>" class="nav-link ps-3">
                    <?= $item['ten_loai'] ?>
                </a></li>
        <?php } ?>
    </ul>
    <div class="card-footer">
        <form action="<?= $SITE_URL ?>/hang-hoa/liet-ke.php">
            <input type="text" name="keywords" placeholder="Từ khóa tìm kiếm" class="form-control">
        </form>
    </div>
</div>