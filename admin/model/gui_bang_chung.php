<?php

function insert_hoadon($name_image,$id){
        if($name_image != ""){
                $sql = "UPDATE `dang_ky` SET `image`='$name_image', tinh_trang = 1 WHERE id_dang_ky =".$id;
                pdo_execute($sql);
        }

}

?>

