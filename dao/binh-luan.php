<?php 
    //ma_bl	noi_dung	ma_hh	ma_kh	ngay_bl	
    require_once "pdo.php";
    function binh_luan_selectAll(){
        $sql = "SELECT * FROM binh_luan ORDER BY ngay_bl DESC";
        return pdo_query($sql);
    }


    function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
        $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES (?,?,?,?)";
        pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl);
    }


    function binh_luan_delete($ma_bl){
        $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
        pdo_execute($sql, $ma_bl);
    }


    function binh_luan_selectOne($ma_bl){
        $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
        return pdo_query_one($sql, $ma_bl);
    }


    function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
        $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
        pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
    }


    function binh_luan_exist($ma_bl){
        $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
        return pdo_query_value($sql, $ma_bl) > 0;
    }


    function binh_luan_select_by_hang_hoa($ma_hh){
        $sql = "SELECT b.*, h.ten_hh, kh.username FROM binh_luan b 
                JOIN hang_hoa h ON h.ma_hh=b.ma_hh 
                Join khach_hang kh on kh.ma_kh = b.ma_kh

                WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
        return pdo_query($sql, $ma_hh);
    }






?>