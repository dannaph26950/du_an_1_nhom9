<?php
function add_taikhoan($ten_hv,$tai_khoan,$mat_khau,$email,$sdt,$dia_chi){
    $sql = "INSERT INTO `hoc_vien`(`id_hoc_vien`, `ten_hv`, `tai_khoan`, `mat_khau`, `email`, `sdt`, `dia_chi`, `id_lop`) VALUES (null,'$ten_hv','$tai_khoan','$mat_khau','$email','$sdt','$dia_chi',0)";
    pdo_execute($sql);
}
function check_user($tai_khoan,$mat_khau){
    $sql = "select * from hoc_vien where tai_khoan = '$tai_khoan' and mat_khau = '$mat_khau'";
    $check = pdo_query_one($sql);
    return $check;
}
function insert_dangki($id, $id_lop, $gia, $trang_thai,$times){
    $sql = "INSERT INTO dang_ky VALUES (null, '$id','$id_lop', '$gia',' $times',' ', '$trang_thai')";
    pdo_execute($sql);
}
//quen mat khau
function checkemail($email){
    $sql = "SELECT * FROM hoc_vien WHERE email='".$email."'";
    $check = pdo_query_one($sql);
    return $check;
}
function check_taikhoan($email){
    $sql = "SELECT * FROM hoc_vien WHERE tai_khoan='".$email."'";
    $check = pdo_query_one($sql);
    return $check;
}
?>