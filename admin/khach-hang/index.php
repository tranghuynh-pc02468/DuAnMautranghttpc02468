<?php
    require_once "../../dao/pdo.php";
    require_once "../../dao/khach-hang.php";
    require "../../global.php";

    extract($_REQUEST);

    if (exit_param("btn_list")) {
        $list = khach_hang_selectAll();
        $VIEW_NAME = "list.php";

    } elseif (exit_param("form_insert")) {
        $VIEW_NAME = "add.php";

    } elseif (exit_param("btn_insert")) {
        // $ma_kh = $_POST['ma_kh'];
        $username = $_POST['username'];
        $mat_khau = $_POST['mat_khau'];
        $email = $_POST['email'];
        $hinh = $_FILES['hinh']['name'];
        $vai_tro = $_POST['vai_tro'] ?? 0;

        khach_hang_insert($mat_khau, $username, $email, $hinh,  $vai_tro);

        $list = khach_hang_selectAll();
        $VIEW_NAME = "list.php";

    } elseif (exit_param("btn_edit")) {
        $ma_kh = $_REQUEST['ma_kh'];

        $khach_hang_info = khach_hang_selectById($ma_kh);
        extract($khach_hang_info);

        $VIEW_NAME = "edit.php";

    } elseif (exit_param("btn_update")) {
        $ma_kh = $_POST['ma_kh'];
        $username = $_POST['username'];
        $mat_khau = $_POST['mat_khau'];
        $email = $_POST['email'];
        $hinh = $_FILES['hinh']['name']; 
        $vai_tro = (int)$_POST['vai_tro'];

        khach_hang_update($ma_kh, $mat_khau, $username, $email, $hinh, $vai_tro);

        $list = khach_hang_selectAll();
        $VIEW_NAME = "list.php";

    } elseif (exit_param("btn_delete")) {
        $ma_kh = $_REQUEST['ma_kh'];

        khach_hang_delete($ma_kh);
        $list = khach_hang_selectAll();
        $VIEW_NAME = "list.php";

    } else {
        $list = khach_hang_selectAll();
        $VIEW_NAME = "list.php";
    }

    require "../layout.php";

?>