<?php 
//load all lop
function listall_lop(){
    $sql = "SELECT * FROM `lop` ";
    $list_lop = pdo_query($sql);
    return $list_lop;
}
//    load one lop
function loadone_lop($id){
    $sql = "SELECT * FROM lop where id_lop = '$id'";
    $listone_lop = pdo_query($sql);
    return $listone_lop;
}

// truy vấn join
function lop_join_giangvien(){
    $sql = "SELECT * FROM lop
            JOIN giang_vien on lop.ma_gv = giang_vien.magv";
    $list_join_lop_giangvien = pdo_query($sql);
    return $list_join_lop_giangvien;
}
?>