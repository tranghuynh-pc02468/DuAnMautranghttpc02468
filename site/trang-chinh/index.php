<?php
require "../../global.php";

if (exit_param("gioi-thieu")) {
    $VIEW_NAME = "trang-chinh/gioi-thieu.php";

} elseif (exit_param("lien-he")) {
    $VIEW_NAME = "trang-chinh/lien-he.php";

} elseif (exit_param("hoi-dap")) {
    $VIEW_NAME = "trang-chinh/hoi-dap.php";

} else{
    require '../../dao/hang-hoa.php';
    $list_home = hang_hoa_select_home();
    $VIEW_NAME = "trang-chinh/home.php";
}



require "../layout.php";

?>