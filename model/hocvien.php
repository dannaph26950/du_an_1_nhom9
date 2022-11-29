<?php
// chưa chạy đc


//List khóa học
function listall_hocvien(){
    $sql="SELECT * FROM hoc_vien";
    $listall_hocvien = pdo_query($sql);
    return $listall_hocvien;
}
function listone_hocvien($id){
    $sql = "select * from hoc_vien where id_hoc_vien=".$id;
    $listone_hocvien = pdo_query($sql);
    return $listone_hocvien ;
}

function listone_hocvien_idhv($id){
    $sql = "select ten_hv from hoc_vien where id_hoc_vien=".$id;
    $listone_hocvien = pdo_query($sql);
    return $listone_hocvien ;
}
//update
function update_hocvien($ten_hv,$email,$sdt,$dia_chi,$id){
    $sql = "UPDATE `hoc_vien` SET `ten_hv`='$ten_hv',`email`='$email',`sdt`='$sdt',`dia_chi`='$dia_chi' WHERE id_hoc_vien = '$id'";
    pdo_execute($sql);
}
//update lop
function update_hocvien_idlop($id_lop,$id_hoc_vien){
    $sql = "update hoc_vien set id_lop = '$id_lop' where id_hoc_vien = '$id_hoc_vien'";
    pdo_execute($sql);
}
?>
