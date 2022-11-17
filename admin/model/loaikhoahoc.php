<?php
function insert_danhmuc($id_danh_muc, $ten_danh_muc){
    $sql = "INSERT INTO khoa_hoc VALUES (null, $ten_danh_muc)";
    pdo_execute($sql);
}

?>