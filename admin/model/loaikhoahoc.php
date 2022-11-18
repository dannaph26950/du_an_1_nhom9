<?php
function insert_danhmuc($ten_danh_muc){
    $sql = "INSERT INTO danh_muc(ten_danh_muc) VALUES ( $ten_danh_muc)";
    pdo_execute($sql);
}

?>