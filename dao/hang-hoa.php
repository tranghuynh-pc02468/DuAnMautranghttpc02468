<?php
// table: hang_hoa
// cột: ma_hh   ten_hh	don_gia 	hinh	ngay_nhap	mo_ta 	so_luot_xem	 ma_loai	
require_once "pdo.php";

function hang_hoa_selectAll()
{
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC";
    return pdo_query($sql);
}


function hang_hoa_count(){
    $sql = "SELECT count(*) as count from hang_hoa";
    return pdo_query_value($sql);
}


function hang_hoa_select_home(){
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC limit 9";
    return pdo_query($sql);
}


function hang_hoa_insert($ten_hh, $don_gia, $hinh, $ma_loai,  $so_luot_xem, $ngay_nhap, $mo_ta)
{
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia,  hinh, ma_loai, so_luot_xem, ngay_nhap, mo_ta) 
                VALUES (?,?,?,?,?,?,?)";

    pdo_execute($sql, $ten_hh, $don_gia, $hinh, $ma_loai, $so_luot_xem, $ngay_nhap, $mo_ta);
}


function hang_hoa_delete($ma_hh)
{
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}


function hang_hoa_selectOne($ma_hh)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}


function hang_hoa_update($ma_hh, $ten_hh, $don_gia,  $hinh, $ma_loai,  $so_luot_xem, $ngay_nhap, $mo_ta)
{
    $sql = "UPDATE hang_hoa SET ten_hh=?, don_gia=?, hinh=?, ma_loai=?,  so_luot_xem=?, ngay_nhap=?, mo_ta=? WHERE ma_hh=?";

    pdo_execute($sql, $ten_hh, $don_gia,  $hinh, $ma_loai,  $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
}


function hang_hoa_top10()
{
    $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 5";
    return pdo_query($sql);
}


function hang_hoa_tang_so_luot_xem($ma_hh)
{
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}


function hang_hoa_select_dac_biet()
{
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
    return pdo_query($sql);
}


function hang_hoa_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}


function hang_hoa_select_keyword($keyword)
{
    $sql = "SELECT * FROM hang_hoa hh " . " JOIN loai lo ON lo.ma_loai=hh.ma_loai " . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}



?>