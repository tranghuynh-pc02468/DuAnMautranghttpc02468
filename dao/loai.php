<?php
    /**
     * Truy vấn DS loại đã nhập mới nhất
     */
    function loai_selectAll(){
        $sql = "SELECT * FROM loai ORDER BY ma_loai DESC";
        return pdo_query($sql);
    }

?>














