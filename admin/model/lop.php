<?php

// insert lop
    function insert_lop($ten_lop,$thoi_gian_khai_giang,$dia_diem_hoc,$so_luong,$id_gv,$id_khoa_hoc){
        $sql = "INSERT INTO lop VALUES (null,'$ten_lop','$thoi_gian_khai_giang','$dia_diem_hoc','$so_luong','$id_gv','$id_khoa_hoc')";
        pdo_execute($sql);
    }
//load all lop
function listall_lop(){
    $sql = "SELECT * FROM `lop` ORDER BY id_lop  DESC ";
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
function update_lop($ten_lop,$thoi_gian_khai_giang,$dia_diem_hoc,$so_luong,$id_gv,$id_khoa_hoc,$id_lop){
    $sql = "UPDATE lop SET ten_lop='$ten_lop', thoi_gian_khai_giang='$thoi_gian_khai_giang', dia_diem_hoc='$dia_diem_hoc', so_luong='$so_luong', id_khoa_hoc='$id_khoa_hoc', magv='$id_gv' WHERE id_lop='$id_lop'";
    pdo_execute($sql);
}
//    xóa lớp
function delete_lop($id_lop){
    $sql = "delete from lop where id_lop=".$id_lop;
    pdo_execute($sql);
}
function upd_soluong_lop($id_lop1){
    $sql = "UPDATE `lop` SET `so_luong`=`so_luong`-1 WHERE `id_lop`=".$id_lop1;
    pdo_execute($sql);
}
?>

