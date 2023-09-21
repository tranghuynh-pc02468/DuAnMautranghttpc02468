<?php
    /**
     * Truy vấn DS loại đã nhập mới nhất
     */
    function loai_selectAll(){
        $sql = "SELECT * FROM loai ORDER BY ma_loai DESC";
        return pdo_query($sql);
    }

    /**
     * thêm mới loại
     */
    function loai_insert($ten_loai){
        $sql = "INSERT INTO loai(ten_loai) VALUES(?)";
        pdo_execute($sql, $ten_loai);
    }

    /**
     * Xóa dữ liệu bảng loại
     */
    function loai_delete($ma_loai){
        $sql = "DELETE FROM loai WHERE ma_loai=?";
        pdo_execute($sql, $ma_loai);
    }
?>














