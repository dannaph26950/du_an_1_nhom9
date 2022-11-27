<?php
function insert_binhluan($ten_bl,$id_khoahoc,$id_hocvien,$ngay_bl){
    $sql = "INSERT INTO `binh_luan`(`id_binhluan`, `ten_bl`, `id_khoa_hoc`, `id_hoc_vien`, `trang_thai`,`ngay_bl`) VALUES (null,'$ten_bl','$id_khoahoc','$id_hocvien',null,'$ngay_bl')";
    pdo_execute($sql);
}
function listall_binhluan($id_khoa_hoc){
    $sql = "SELECT * FROM binh_luan where id_khoa_hoc = $id_khoa_hoc";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}

?>