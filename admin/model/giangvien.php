<?php
// chưa chạy đc

    function insert_giangvien($ten_gv,$hinh_gv,$thong_tin_gv){
        $sql = "INSERT INTO giang_vien VALUES (null,'$ten_gv','$hinh_gv','$thong_tin_gv' )";
        pdo_execute($sql);
    }
//List khóa học
    function listall_giangvien(){
        $sql="SELECT * FROM giang_vien ORDER BY magv  DESC ";
        $listall_giangvien = pdo_query($sql);
        return $listall_giangvien;
    }

    function listone_giangvien($magv){
        $sql = "select * from giang_vien where magv='$magv' ";
        $listone_giangvien = pdo_query($sql);
        return $listone_giangvien ;
    }
//xoa sanpham
    function delete_giangvien($magv){
        $sql = "delete from giang_vien where magv='$magv'";
        pdo_execute($sql);
        return $sql;
    }

    function update_giangvien($ten_gv,$name_image,$thong_tin_gv,$id){
        if($name_image !=""){
            $sql = "UPDATE `giang_vien` SET `ten_gv`='$ten_gv',hinh_gv='$name_image',thong_tin_gv='$thong_tin_gv' WHERE magv = '$id'";

        }else{
            $sql = "UPDATE `giang_vien` SET `ten_gv`='$ten_gv',thong_tin_gv='$thong_tin_gv', WHERE magv = '$id'";

        }
        pdo_execute($sql);
    }
?>