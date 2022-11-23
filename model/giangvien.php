<?php
//List giảng viên
function listall_giangvien(){
    $sql="SELECT * FROM giang_vien";
    $listall_giangvien = pdo_query($sql);
    return $listall_giangvien;
}

function listone_giangvien($magv){
    $sql = "select * from giang_vien where magv='$magv' ";
    $listone_giangvien = pdo_query($sql);
    return $listone_giangvien ;
}
?>