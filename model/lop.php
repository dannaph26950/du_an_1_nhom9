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
// đổ ra lớp theo khóa học
function list_lop($id_khoa_hoc){
    $sql ="SELECT * FROM `lop` WHERE id_khoa_hoc = '$id_khoa_hoc'";
    $list_lop = pdo_query($sql);
    return $list_lop;
}
function list_lop_magv($magv){
    $sql ="SELECT id_lop FROM `lop` WHERE magv = '$magv'";
    $list_lop_magv = pdo_query($sql);
    return $list_lop_magv;
}
function list_lop_soluong($magv){
    $sql ="SELECT so_luong FROM `lop` WHERE magv = '$magv'";
    $list_lop_soluong = pdo_query($sql);
    return $list_lop_soluong;
}
?>