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
?>