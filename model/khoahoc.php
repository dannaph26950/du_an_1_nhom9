<?php
//list ra user
//List khóa học
function listall_khoahoc_user(){
    $sql="SELECT * FROM khoa_hoc";
    $listall_khoahoc = pdo_query($sql);
    return $listall_khoahoc;
}

function listone_khoahoc($id){
    $sql = "SELECT * FROM khoa_hoc WHERE id_khoa_hoc ='$id'";
    $listone_khoahoc = pdo_query($sql);
    return $listone_khoahoc;
}
?>