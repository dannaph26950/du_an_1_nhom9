<?php
//list ra user
//List khóa học
function sreach_khoahoc($tukhoa){
    $sql = "SELECT * FROM khoa_hoc,danh_muc WHERE khoa_hoc.id_danh_muc = danh_muc.id_danh_muc AND ten_khoa_hoc LIKE '%".$tukhoa."%'";
    $search_khoahoc = pdo_query($sql);
    return $search_khoahoc;
}
function list_khoahoc($id){
    if($id>0){
        $sql = "SELECT * FROM khoa_hoc WHERE id_danh_muc = '$id'";
    }
    else{
        $sql="SELECT * FROM khoa_hoc";
    }
    $listall_khoahoc = pdo_query($sql);
    return $listall_khoahoc;
}
function listall_khoahoc(){
    $sql="SELECT * FROM khoa_hoc";
    $listall_khoahoc = pdo_query($sql);
    return $listall_khoahoc;
}

function listone_khoahoc($id){
    $sql = "SELECT * FROM khoa_hoc WHERE id_khoa_hoc ='$id'";
    $listone_khoahoc = pdo_query($sql);
    return $listone_khoahoc;
}
    function listcate_khoahoc($id){
        $sql = "SELECT * FROM khoa_hoc WHERE id_danh_muc ='$id'";
        $listcate_khoahoc = pdo_query($sql);
        return $listcate_khoahoc;
    }

?>