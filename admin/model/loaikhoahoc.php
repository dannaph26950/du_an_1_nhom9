<?php
function insert_danhmuc($id_danh_muc, $ten_danh_muc){
    $sql = "INSERT INTO khoa_hoc VALUES (null, '$ten_khoa_hoc', '$gia', '$thoi_gian_hoc', '$mo_ta',$id_danh_muc, $id_lop)";
    pdo_execute($sql);
}

?>