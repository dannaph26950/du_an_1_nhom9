<?php
//load all gio hang
function list_giohang($tinh_trang){
    $sql = "SELECT * FROM `dang_ky` WHERE tinh_trang ='$tinh_trang' ORDER BY id_dang_ky  DESC ";
    $list_giohang = pdo_query($sql);
    return $list_giohang;
}
function listall_giohang(){
    $sql = "SELECT * FROM `dang_ky` ORDER BY id_dang_ky  DESC ";
    $list_giohang = pdo_query($sql);
    return $list_giohang;
}
function update_giohang($trangthai,$id){
        $sql = "UPDATE `dang_ky` SET `tinh_trang`='$trangthai' WHERE id_dang_ky = '$id'";
        pdo_execute($sql);
}
function listone_giohang($id){
    $sql = "select * from dang_ky where id_hoc_vien=".$id ." ORDER BY id_dang_ky  DESC";
    $listone_giohang = pdo_query($sql);
    return $listone_giohang ;
}
function listone_gio_hang($id){
    $sql = "select * from dang_ky where id_dang_ky=".$id;
    $listone_giohang = pdo_query($sql);
    return $listone_giohang ;
}
function delete_dangky($id){
    $sql = "delete from dang_ky where id_dang_ky='$id'";
    pdo_execute($sql);
    return $sql;
}
?>

