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
?>














