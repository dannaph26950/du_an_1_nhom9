<?php

function load_allthongke(){
//    $sql = "SELECT danh_muc.id_danh_muc as id_danh_muc, danh_muc.ten_danh_muc as ten_danh_muc, count(khoa_hoc.id_khoa_hoc) as countsp, min(khoa_hoc.gia) as mingia, max(khoa_hoc.gia) as maxgia,avg(khoa_hoc.gia) as avggia";
//    $sql.= " FROM khoa_hoc left join danh_muc on danh_muc.id_danh_muc=khoa_hoc.id_danh_muc";
//    $sql.= " GROUP BY danh_muc.id_danh_muc ORDER BY danh_muc.id_danh_muc DESC";
    $sql= "select danh_muc.id_danh_muc as id_danh_muc ,danh_muc.ten_danh_muc as ten_danh_muc, dang_ky.gia_tien AS gia_tien , count(khoa_hoc.id_khoa_hoc) as countsp, min(dang_ky.gia_tien) as mingia, max(dang_ky.gia_tien) as maxgia,avg(dang_ky.gia_tien) as avggia";
    $sql.= " from khoa_hoc join dang_ky on khoa_hoc.id_lop = dang_ky.id_lop join danh_muc on danh_muc.id_danh_muc = khoa_hoc.id_danh_muc WHERE dang_ky.tinh_trang = 2";
    $sql.= " GROUP BY danh_muc.id_danh_muc ORDER BY danh_muc.id_danh_muc DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

?>