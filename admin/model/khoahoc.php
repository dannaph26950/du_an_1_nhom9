<?php
//Them moi san pham
function insert_khoahoc($ten_khoa_hoc,$anh, $gia, $thoi_gian_hoc, $mo_ta, $id_danh_muc,$id_lop){
    $sql = "INSERT INTO khoa_hoc VALUES (null, '$ten_khoa_hoc','$anh', '$gia', '$thoi_gian_hoc', '$mo_ta',$id_danh_muc, $id_lop)";
    pdo_execute($sql);
}
//xoa sanpham

// update khoa hoc
function update_khoahoc($ten_khoa_hoc, $anh, $gia, $thoi_gian_hoc, $mo_ta, $id_danh_muc, $id_lop, $id_khoa_hoc)
{
    $sql = "UPDATE khoa_hoc SET ten_khoa_hoc='$ten_khoa_hoc', anh_khoa_hoc='$anh', gia='$gia', thoi_gian_hoc='$thoi_gian_hoc', mo_ta='$mo_ta', id_danh_muc='$id_danh_muc',id_lop='$id_lop' WHERE id_khoa_hoc='$id_khoa_hoc'";
    pdo_execute($sql);
}

?>