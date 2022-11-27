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

?>
