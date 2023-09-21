<?php 
    require "dao/pdo.php";
    require "dao/loai.php";

    // pdo_get_connection();
    // hiển thị ds loại ra màn hình
    $dsloai = loai_selectAll();
    foreach ($dsloai as $loai) {
        extract($loai);
        echo '<li><a>'.$ten_loai.'</a></li>';
    }

?>
