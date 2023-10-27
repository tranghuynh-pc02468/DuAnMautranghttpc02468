<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if (exit_param("btn_register")) {
    $username = $_POST['username'];
    $mat_khau = $_POST['mat_khau'];
    $mat_khau2 = $_POST['mat_khau2'];
    $email = $_POST['email'];
    $file_name = save_file("hinh", "$UPLOAD_URL");
    $hinh = $file_name ? $file_name : "user.jpg";
    $vai_tro = $_POST['vai_tro'] ?? 0;


    // khach_hang_insert($mat_khau, $username, $email, $hinh,  $vai_tro);
    // $mgs = "Đăng ký thành công";

    if ($mat_khau != $mat_khau2) {
        $mgs = "Xác nhận mật khẩu không đúng!";
    }
    // else if(!khach_hang_exits($username)){
    //     $mgs = "Mã này đã được sử dụng!";
    // }
    else {
        khach_hang_insert($mat_khau, $username, $email, $hinh, $vai_tro);
        $mgs = "Đăng ký thành viên thành công!";
    }


} else {
    global $ma_kh, $mat_khau, $username, $email, $hinh, $vai_tro, $mat_khau2;
}

$VIEW_NAME = "tai-khoan/register-form.php";

require '../layout.php';