<?php 
//load all lop
function listall_lop(){
    $sql = "SELECT * FROM `lop` ";
    $list_lop = pdo_query($sql);
    return $list_lop;
}
//    load one lop
function loadone_lop(){
    $sql = "SELECT * FROM lop";
    $listone_lop = pdo_query($sql);
    return $listone_lop;
}
?>