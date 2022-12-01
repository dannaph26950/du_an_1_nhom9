<?php

function insert_hoadon($image,$id){
        $sql = "UPDATE `dang_ky` SET `image`='$image', tinh_trang = 1 WHERE id_dang_ky = '$id'";
        pdo_execute($sql);
}

?>
