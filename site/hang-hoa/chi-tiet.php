<?php 
    require '../../global.php';
    require '../../dao/hang-hoa.php'; 
    require '../../dao/binh-luan.php';
    
    extract($_REQUEST);
    
    // Truy vấn mặt hàng theo mã
    $hang_hoa = hang_hoa_selectOne($ma_hh);
    extract($hang_hoa);

    // Tăng số lượt xem lên 1
    hang_hoa_tang_so_luot_xem($ma_hh);

    // Hàng cùng loại
    $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
    // var_dump($hh_cung_loai); 

    // Bình luận
    if(exit_param("noi_dung")){
        $ma_kh = $_SESSION['user']['ma_kh'];
        $ngay_bl = date_format(date_create(), 'Y-m-d');
        binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
    }
    $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);

    
    $VIEW_NAME = "hang-hoa/chi-tiet-ui.php";
    require '../layout.php';
?>