<?php
//Them moi san pham
function insert_khoahoc($ten_khoa_hoc,$anh, $gia, $thoi_gian_hoc, $mo_ta, $id_danh_muc,$id_lop){
    $sql = "INSERT INTO khoa_hoc VALUES (null, '$ten_khoa_hoc','$anh', '$gia', '$thoi_gian_hoc', '$mo_ta',$id_danh_muc, $id_lop)";
    pdo_execute($sql);
}
//xoa sanpham

?>