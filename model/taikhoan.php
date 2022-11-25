<?php
function add_taikhoan($ten_hv,$tai_khoan,$mat_khau,$email,$sdt,$dia_chi){
    $sql = "INSERT INTO `hoc_vien`(`id_hoc_vien`, `ten_hv`, `tai_khoan`, `mat_khau`, `email`, `sdt`, `dia_chi`, `id_lop`) VALUES (null,'$ten_hv','$tai_khoan','$mat_khau','$email','$sdt','$dia_chi',0)";
    pdo_execute($sql);
}
//                              ---------------------------- ĐỪNG XÓA -------------------------------
//function check_user($user){
//    $sql = "select tai_khoan from hoc_vien";
//    $check = pdo_query_one($sql);
//    return $check;
//}
//function check_pass($tai_khoan){
//    $sql = "select mat_khau from hoc_vien where tai_khoan = '$tai_khoan'";
//    $check = pdo_query_one($sql);
//    return $check;
//}

function check_user($tai_khoan,$mat_khau){
    $sql = "select * from hoc_vien where tai_khoan = '$tai_khoan' and mat_khau = '$mat_khau'";
    $check = pdo_query_one($sql);
//    foreach ($sp as $key => $value){
//        if ($user == $value['username'] && $pass == $value['password']){
//            $mang = $value;
//        }else{
//            $mang = '';
//        }
//    }
    return $check;
}
?>