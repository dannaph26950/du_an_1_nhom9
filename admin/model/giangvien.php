<?php

// chưa chạy đc

function insert_giangvien($ten_gv, $hinh_gv, $thong_tin_gv, $trang_thai)
{
    $sql = "INSERT INTO giang_vien VALUES (null, '$ten_gv','$hinh_gv','$thong_tin_gv','$trang_thai')";
    pdo_execute($sql);
}

