<?php
//Them moi san pham
function insert_khoahoc($ten_khoa_hoc,$anh, $gia, $thoi_gian_hoc, $mo_ta, $id_danh_muc,$id_lop){
    $sql = "INSERT INTO khoa_hoc VALUES (null, '$ten_khoa_hoc','$anh', '$gia', '$thoi_gian_hoc', '$mo_ta',$id_danh_muc, $id_lop)";
    pdo_execute($sql);
}
//List khóa học
function listall_khoahoc(){
    $sql="SELECT * FROM khoa_hoc";
    $listall_khoahoc = pdo_query($sql);
    return $listall_khoahoc;
}
//xoa sanpham
function delete_khoahoc($id_khoa_hoc){
    $sql = "delete from khoa_hoc where id_danh_muc=".$id_khoa_hoc;
    pdo_execute($sql);
}
?>