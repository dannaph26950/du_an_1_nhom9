<?php
// chưa chạy đc

    function insert_giangvien($ten_gv,$hinh_gv,$thong_tin_gv,$trang_thai){
        $sql = "INSERT INTO giang_vien VALUES (null,'$ten_gv','$hinh_gv','$thong_tin_gv','$trang_thai' )";
        pdo_execute($sql);
    }
//List khóa học
    function listall_giangvien(){
        $sql="SELECT * FROM giang_vien";
        $listall_giangvien = pdo_query($sql);
        return $listall_giangvien;
    }
//xoa sanpham
    function delete_giangvien($magv){
        $sql = "delete from giang_vien where magv='$magv'";
        pdo_execute($sql);
        return $sql;
    }

    function listone_giangvien($magv){
        $sql = "select * from giang_vien where magv='$magv' ";
        $listone_giangvien = pdo_query($sql);
        return $listone_giangvien ;
    }
    function update_giangvien($magv,$ten_gv,$hinh_gv,$thong_tin_gv,$trang_thai){
        $sql = "UPDATE `giang_vien` SET `ten_gv`='$ten_gv',hinh_gv='$hinh_gv',thong_tin_gv='$thong_tin_gv',trang_thai='$trang_thai' WHERE magv = '$magv'";
        pdo_execute($sql);
    }
?>