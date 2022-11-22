<?php
//load all lop
function listall_binhluan(){
    $sql = "SELECT * FROM binh_luan ";
    $list_binhluan = pdo_query($sql);
    return $list_binhluan;
}