<?php

// insert lop
    function insert_lop($ten_lop,$thoi_gian_khai_giang,$dia_diem_hoc,$so_luong,$id_gv,$id_khoa_hoc,$trang_thai){
        $sql = "INSERT INTO lop VALUES (null,'$ten_lop','$thoi_gian_khai_giang','$dia_diem_hoc','$so_luong','$id_gv','$id_khoa_hoc','$trang_thai')";
        pdo_execute($sql);
    }
//load all lop
function listall_lop(){
    $sql = "SELECT * FROM `lop` ";
    $list_lop = pdo_query($sql);
    return $list_lop;
}
//    load one lop
function loadone_lop($id){
    $sql = "SELECT * FROM lop WHERE id_lop =".$id;
    $listone_lop = pdo_query($sql);
    return $listone_lop;
}
//    update khóa học
function update_lop($ten_lop,$thoi_gian_khai_giang,$dia_diem_hoc,$so_luong,$id_gv,$id_khoa_hoc,$trang_thai,$id_lop){
    $sql = "UPDATE lop SET ten_lop='$ten_lop', thoi_gian_khai_giang='$thoi_gian_khai_giang', dia_diem_hoc='$dia_diem_hoc', so_luong='$so_luong', id_khoa_hoc='$id_khoa_hoc', ma_gv='$id_gv',trang_thai='$trang_thai' WHERE id_lop='$id_lop'";
    pdo_execute($sql);
}
//    xóa lớp
function delete_lop($id_lop){
    $sql = "delete from lop where id_lop=".$id_lop;
    pdo_execute($sql);
}
?>
