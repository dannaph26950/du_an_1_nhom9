<?php
function checkuser($tai_khoan,$mat_khau){

    $sql = "SELECT * FROM quan_tri WHERE tai_khoan='".$tai_khoan."' AND mat_khau='".$mat_khau."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

?>