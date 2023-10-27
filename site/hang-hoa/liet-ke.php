<?php
  
  require '../../global.php';
  require '../../dao/hang-hoa.php';
  
  extract($_REQUEST);
  
  if(exit_param("ma_loai")){
      $items = hang_hoa_select_by_loai($ma_loai);
  }
  else if(exit_param("dac_biet")){
      $items = hang_hoa_select_dac_biet();
  }
  else if(exit_param("keywords")){
      $items = hang_hoa_select_keyword($keywords);
  }
  else{
      $items = hang_hoa_selectAll();
    //   var_dump($items);
  }
  
  $VIEW_NAME = "hang-hoa/liet-ke-ui.php";
  require '../layout.php';

?>

