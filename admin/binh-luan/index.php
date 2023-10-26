<?php
require_once "../../dao/pdo.php";
require_once "../../dao/binh-luan.php";
require_once "../../dao/thong-ke.php";
require "../../global.php";

extract($_REQUEST);

if (exit_param("ma_hh")) { 
    $items = binh_luan_select_by_hang_hoa($ma_hh);
    $VIEW_NAME = "detail.php";

} else{
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";

}

require "../layout.php";

?>