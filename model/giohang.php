<?php

    function insert_donhang( $ten_kh,$gia  , $so_luong )
    {
        $sql = "insert into don_hangct  values(null,'$ten_kh','$gia ','$so_luong')";
        return pdo_execute ($sql);
    }
    function listall_donhang(){
        $sql="SELECT * FROM don_hangct";
        $listall_donhang = pdo_query($sql);
        return $listall_donhang;
    }
    function delete_donhang($id_don){
        $sql = "delete from don_hangct where id_don='$id_don'";
        pdo_execute($sql);
    }

    ?>