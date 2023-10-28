<?php
    session_start();
/*
 * Định nghĩa các url cần thiết được sử dụng trong website
 */
$ROOT_URL = '/DuanMautranghttpc02468';
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";
$UPLOAD_URL = "../../uploaded/";
$img_path = "$ROOT_URL/uploaded/";
$mgs='';
$VIEW_NAME = "index.php";
function exit_param($fieldname){
    return array_key_exists($fieldname, $_REQUEST);
}



/**
 * lưu file upload vào thư mục
 * @param string $filename là tên trường file
 * @param string $target_dir thư mục lưu file
 * @return $filename tên file upload
 */
function save_file($fieldname, $target_dir){
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
}



/**
 * Đọc giá trị cookie
 * @param string $name là tên cookie
 * @return string giá trị của cookie
 */
function get_cookie($name){
    return $_COOKIE[$name]??'';
}



/**
 * Tạo cookie
 * @param string $name là tên cookie
 * @param string $value là giá trị cookie
 * @param int $day là số ngày tồn tại cookie
 */
function add_cookie($name, $value, $day){
    setcookie($name, $value, time() + (86400 * $day), "/");
}





/**
 * Xóa cookie
 * @param string $name là tên cookie
 */
function delete_cookie($name){
    add_cookie($name, '', -1);
}

