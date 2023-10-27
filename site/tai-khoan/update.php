<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/hang-hoa.php';
extract($_REQUEST);

if(exit_param("btn_update")){
    $file_name = save_file("hinh", "$UPLOAD_URL");
    $hinh = $file_name?$file_name:$hinh;
    try {
        khach_hang_update($ma_kh, $mat_khau, $username, $email, $hinh, $vai_tro);
        $MESSAGE = "Cập nhật thông tin thành viên thành công!";
        $_SESSION['user'] = khach_hang_selectById($ma_kh);
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
    }
}
else{
    extract($_SESSION['user']); 
}


// $list_home = hang_hoa_select_home();
$VIEW_NAME = "tai-khoan/update-form.php";


require "../layout.php";



?>