<?php
    // chưa chạy đc

    function insert_hocvien($ten_hv,$email,$sdt,$dia_chi){
        $sql = "INSERT INTO hoc_vien VALUES (null,'$ten_hv','$email','$sdt','$dia_chi' )";
        pdo_execute($sql);
    }
    //List khóa học
    function listall_hocvien(){
        $sql="SELECT * FROM hoc_vien";
        $listall_hocvien = pdo_query($sql);
        return $listall_hocvien;
    }
    //xoa sanpham
    function delete_hocvien($id_hoc_vien){
        $sql = "delete from hoc_vien where id_hoc_vien=".$id_hoc_vien;
        pdo_execute($sql);
    }

?>
