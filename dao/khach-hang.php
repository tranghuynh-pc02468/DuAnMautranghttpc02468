<?php
    require_once "pdo.php";
// ma_kh	mat_khau	ho_ten	kich_hoat	hinh	email	vai_tro	
    
function khach_hang_insert( $mat_khau, $username, $email, $hinh,  $vai_tro){
        $sql = "INSERT INTO khach_hang( mat_khau, username, email, hinh, vai_tro) 
                    VALUES (?, ?, ?, ?, ?)";

        pdo_execute($sql, $mat_khau, $username, $email, $hinh, $vai_tro);
    }

    
    function khach_hang_count(){
        $sql = "SELECT COUNT(*) FROM khach_hang";
        return pdo_query_value($sql);
    };


    function khach_hang_update($ma_kh, $mat_khau, $username, $email, $hinh, $vai_tro){
        $sql = "UPDATE khach_hang SET mat_khau=?,username=?,email=?,hinh=?,vai_tro=? WHERE ma_kh=?";
        
        pdo_execute($sql, $mat_khau, $username, $email, $hinh, $vai_tro, $ma_kh);
    }


    function khach_hang_delete($ma_kh){
        $sql = "DELETE FROM khach_hang  WHERE ma_kh=?";
        if(is_array($ma_kh)){
            foreach ($ma_kh as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_kh);
        }
    }


    function khach_hang_selectAll(){
        $sql = "SELECT * FROM khach_hang";
        return pdo_query($sql);
    }


    function khach_hang_selectById($ma_kh){
        $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
        return pdo_query_one($sql, $ma_kh);
    }


    function khach_hang_exits($ma_kh){
        $sql = "SELECT count(*) FROM khach_hang WHERE $ma_kh=?";
        return pdo_query_value($sql, $ma_kh) > 0;
    }


    function khach_hang_change_password($ma_kh, $mat_khau_moi){
        $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
        pdo_execute($sql, $mat_khau_moi, $ma_kh);
    }


    function khach_hang_select_by_role($vai_tro){
        $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
        return pdo_query($sql, $vai_tro);
    }

    function khach_hang_check($email, $mat_khau){
        $sql = "SELECT * FROM khach_hang WHERE email=? AND mat_khau=?";
        return pdo_query_one($sql, $email, $mat_khau);
    }
?>