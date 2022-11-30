<?php
//load all lop
function listall_binhluan(){
    $sql = "SELECT * FROM binh_luan ORDER BY id_binhluan  DESC ";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}
function listone_binhluan($id_binh_luan){
    $sql = "select * from binh_luan where id_binh_luan='$id_binh_luan' ";
    $listone_binhluan = pdo_query($sql);
    return $listone_binhluan ;
}
//xoa
function delete_binhluan($id_binh_luan){
    $sql = "delete from binh_luan where id_binh_luan='$id_binh_luan'";
    pdo_execute($sql);
    return $sql;
}
function update_binhluan($ten_bl,$id_khoa_hoc,$id_hoc_vien,$trang_thai,$id_binhluan)
{
    $sql = "UPDATE `binh_luan` SET `ten_bl`='$ten_bl',`id_khoa_hoc`='$id_khoa_hoc',`id_hoc_vien`='$id_hoc_vien',`trang_thai`='$trang_thai' WHERE id_binh_luan = '$id_binhluan'";
    pdo_execute($sql);
}