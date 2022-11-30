<?php
//load all gio hang
function listall_giohang(){
    $sql = "SELECT * FROM `dang_ky` ORDER BY id_dang_ky  DESC ";
    $list_giohang = pdo_query($sql);
    return $list_giohang;
}

?>