<?php
    require_once "../../dao/pdo.php";
    require_once "../../dao/hang-hoa.php";
    require_once "../../dao/loai.php";
    require "../../global.php";

    extract($_REQUEST);

    if (exit_param("btn_list")) {
        $items = hang_hoa_selectAll();
        $VIEW_NAME = "list.php";

    } elseif (exit_param("form_insert")) {
        $loai = loai_selectAll();
        $VIEW_NAME = "add.php";

    } elseif (exit_param("btn_insert")) {
        // $ma_hh = $_POST['ma_hh'];
        $ten_hh = $_POST['ten_hh'] ?? '';
        $don_gia = $_POST['don_gia'] ?? '' ; 
        $ma_loai = $_POST['ma_loai'] ?? '' ; 
        $ngay_nhap = $_POST['ngay_nhap'] ?? '' ;
        $so_luot_xem = $_POST['so_luot_xem'] ?? 0 ;
        $mo_ta = $_POST['mo_ta'] ?? '' ;
        $hinh = save_file('hinh', $UPLOAD_URL);

        hang_hoa_insert($ten_hh, $don_gia, $hinh, $ma_loai,  $so_luot_xem, $ngay_nhap, $mo_ta);

        $items = hang_hoa_selectAll();
        $VIEW_NAME = "list.php";

    } elseif (exit_param("btn_edit")) {
        $ma_hh = $_REQUEST['ma_hh'];
        $loai = loai_selectAll();
        $hang_hoa_info = hang_hoa_selectOne($ma_hh);
        extract($hang_hoa_info);

        $VIEW_NAME = "edit.php";

    } elseif (exit_param("btn_update")) {
        $ma_hh = $_POST['ma_hh'];
        $ten_hh = $_POST['ten_hh'];
        $don_gia = $_POST['don_gia']; 
        $hinh = $_FILES['hinh']['name'];
        $ma_loai = $_POST['ma_loai']; 
        $ngay_nhap = $_POST['ngay_nhap'];
        $so_luot_xem = $_POST['so_luot_xem'] ?? 0;
        $mo_ta = $_POST['mo_ta'];
        $hinh = save_file('hinh', $UPLOAD_URL);
        hang_hoa_update($ma_hh, $ten_hh, $don_gia, $hinh, $ma_loai, $so_luot_xem, $ngay_nhap, $mo_ta);

        $items = hang_hoa_selectAll();
        $VIEW_NAME = "list.php";

    } elseif (exit_param("btn_delete")) {
        $ma_hh = $_REQUEST['ma_hh'];

        hang_hoa_delete($ma_hh);

        $items = hang_hoa_selectAll();
        $VIEW_NAME = "list.php";

    } else {
        $items = hang_hoa_selectAll();
        $VIEW_NAME = "list.php";

    }

    require "../layout.php";

?>