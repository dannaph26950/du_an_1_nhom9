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
    $sql = "delete from khoa_hoc where id_khoa_hoc='$id_khoa_hoc'";
    pdo_execute($sql);
}
function listone_khoahoc($id){
        $sql = "SELECT * FROM khoa_hoc WHERE id_khoa_hoc ='$id'";
        $listone_khoahoc = pdo_query($sql);
        return $listone_khoahoc;
}
//update
function update_khoahoc($ten_khoa_hoc,$name_image, $gia, $thoi_gian_hoc, $mo_ta, $id_danh_muc,$id_lop,$id)
{
    $sql = "UPDATE `khoa_hoc` SET `ten_khoa_hoc`='$ten_khoa_hoc',`anh`='$name_image',`gia`='$gia',`thoi_gian_hoc`='$thoi_gian_hoc',`mo_ta`='$mo_ta',`id_danh_muc`='$id_danh_muc',`id_lop`='$id_lop' WHERE id_khoa_hoc = '$id'";

//    echo $sql;
//    die();
    pdo_execute($sql);
}

?>