<?php
    require_once "../../dao/pdo.php";
    require_once "../../dao/loai.php";
    require "../../global.php";

    extract($_REQUEST);
    if (exit_param("btn_list")) {
        $loai_list = loai_selectAll();
        $VIEW_NAME = "list.php";

    } elseif (exit_param("form_insert")) {
        $VIEW_NAME = "add.php";

    } elseif (exit_param("btn_insert")) {
        //lấy dl từ form
        $ten_loai = $_POST['ten_loai'] ?? '';
        // insert 
        loai_insert($ten_loai);
        $loai_list = loai_selectAll();
        $VIEW_NAME = "list.php";

    } elseif (exit_param("btn_delete")) {
        if (isset($_GET['ma_loai'])) {
            loai_delete($_GET['ma_loai']);
        }
        $VIEW_NAME = "list.php";

    } else {
        $loai_list = loai_selectAll();

        $VIEW_NAME = "list.php";

    }

    require "../layout.php";

?>