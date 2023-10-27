<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/hang-hoa.php';
extract($_REQUEST);

if (exit_param("btn_login")) {
    $username = $_POST['username'];
    $mat_khau = $_POST['mat_khau'];
    $user = khach_hang_checklogin($username);
    // var_dump($user);
    if ($user) {
        if ($user['mat_khau'] == $mat_khau) {

            if (exit_param("ghi_nho")) {
                add_cookie("username", $username, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            } else {
                delete_cookie("username");
                delete_cookie("mat_khau");
            }

            //khởi tạo session
            $_SESSION['user'] = $user;
            var_dump($_SESSION['user']);
        } else {
            $mgs = "Sai mật khẩu";
        }


    } else {
        $mgs = "tài khoản không tồn tại.";
    }

} else if (exit_param("btn_logoff")) {
   unset($_SESSION['user']);
    
}

$list_home = hang_hoa_select_home();
$VIEW_NAME = "trang-chinh/home.php";

require "../layout.php";



?>