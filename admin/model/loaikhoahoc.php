<?php
function insert_danhmuc($ten_danh_muc){
    $sql = "INSERT INTO `danh_muc`(`id_danh_muc`,`ten_danh_muc`) VALUES (null,'$ten_danh_muc')";
    pdo_execute($sql);
}
//load all danh muc
function listall_danhmuc(){
    $sql = "SELECT * FROM `danh_muc` ORDER BY id_danh_muc  DESC ";
    $list_danhmuc = pdo_query($sql);
    return $list_danhmuc;
}
//list _one danh muc
function listone_danhmuc($id){
    $sql = "select * from danh_muc where id_danh_muc=".$id;
    $listone_danhmuc = pdo_query($sql);
    return $listone_danhmuc ;
}
//Xóa
function delete_danhmuc($id_danh_muc){
    $sql = "delete from danh_muc where id_danh_muc=".$id_danh_muc;
    pdo_execute($sql);
}
//update
function edit_danhmuc($ten_danh_muc,$id){
    $sql = "UPDATE `danh_muc` SET `ten_danh_muc`='$ten_danh_muc' WHERE id_danh_muc = '$id'";
    pdo_execute($sql);
}
?>