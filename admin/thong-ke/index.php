<?php
    require_once "../../dao/pdo.php";
    require_once "../../dao/thong-ke.php";
    require_once"../../dao/binh-luan.php";
    require "../../global.php";

    extract($_REQUEST);

    if (exit_param("btn_chart",$_REQUEST)) {
        $items = thong_ke_hang_hoa();
        $VIEW_NAME = "chart.php";

    }else {
        $items = thong_ke_hang_hoa();
        $VIEW_NAME = "list.php";

    }

    require "../layout.php";

?>