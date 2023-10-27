<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/hang-hoa.php';
extract($_REQUEST);

$VIEW_NAME="tai-khoan/quen-mk-form.php";

if(exit_param("btn_forgot")){
    $user = khach_hang_checklogin($username);
    if($user){
        if($user['email'] != $email){
            $error = "Sai địa chỉ email!";
        }
        else{
            $MESSAGE = "Mật khẩu của bạn là: " . $user['mat_khau'];
            // $VIEW_NAME="tai-khoan/login-form.php";
            global $ma_kh, $mat_khau;
        }
    }
    else{
        $error = "Sai tên đăng nhập!";
    }
}

require "../layout.php";



?>