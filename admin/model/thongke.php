<?php

function load_allthongke(){
    $sql = "SELECT danh_muc.id_danh_muc as id_danh_muc, danh_muc.ten_danh_muc as ten_danh_muc, count(khoa_hoc.id_khoa_hoc) as countsp, min(khoa_hoc.gia) as mingia, max(khoa_hoc.gia) as maxgia,avg(khoa_hoc.gia) as avggia";
    $sql.= " FROM khoa_hoc left join danh_muc on danh_muc.id_danh_muc=khoa_hoc.id_danh_muc";
    $sql.= " GROUP BY danh_muc.id_danh_muc ORDER BY danh_muc.id_danh_muc DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

?>