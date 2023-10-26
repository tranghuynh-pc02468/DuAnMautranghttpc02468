<?php
    require "../../global.php";
    require "../../dao/hang-hoa.php";
    require "../../dao/khach-hang.php";

    $item = hang_hoa_count();
    $kh_count = khach_hang_count();
    $VIEW_NAME="trang-chinh/home.php";
    
    require "../layout.php";

?>