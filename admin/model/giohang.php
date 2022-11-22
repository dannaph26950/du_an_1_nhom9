<?php
//load all gio hang
function listall_giohang(){
    $sql = "SELECT * FROM `hoa_don` ";
    $list_giohang = pdo_query($sql);
    return $list_giohang;
}

?>