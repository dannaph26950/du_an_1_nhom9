<?php 
//load all danh muc
function listall_danhmuc(){
    $sql = "SELECT * FROM `danh_muc` ";
    $list_danhmuc = pdo_query($sql);
    return $list_danhmuc;
}
//list _one danh muc
function listone_danhmuc($id){
    $sql = "select * from danh_muc where id_danh_muc=".$id;
    $listone_danhmuc = pdo_query($sql);
    return $listone_danhmuc ;
}
?>