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
 
    } elseif (exit_param("btn_edit")) {
        //lấy dl từ form
        $ma_loai = $_REQUEST['ma_loai'];
   
        $loai_info = loai_selectOne($ma_loai);
        extract($loai_info);
        //show dữ liệu
        $VIEW_NAME = "edit.php";

    } elseif (exit_param("btn_update")) {
        $ma_loai = $_POST['ma_loai'];
        $ten_loai = $_POST['ten_loai'];
        
        loai_update($ma_loai, $ten_loai);
 
        $loai_list = loai_selectAll();
        $VIEW_NAME = "list.php";

    } elseif (exit_param("btn_delete")) {
        $ma_loai = $_REQUEST['ma_loai'];
        loai_delete($ma_loai);
        //hiện lại ds
        $loai_list = loai_selectAll();
        $VIEW_NAME = "list.php";

    } else {
        $loai_list = loai_selectAll();
        $VIEW_NAME = "list.php";

    }

    require "../layout.php";

?>