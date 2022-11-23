<?php
//trang user
session_start();
include '../model/pdo.php';
include '../model/khoahoc.php';
include '../model/lop.php';
include '../model/danhmuc.php';
include '../model/giangvien.php';

include 'header.php';
if (isset($_GET['act']) && ($_GET['act']) != ''){
    $act = $_GET['act'];
    switch ($act){
        case 'lien_he':
            include '../view/lienhe.php';
            break;
        case 'khoa_hoc':
            $listall_lop = listall_lop();
            $listall_khoahoc_user = listall_khoahoc_user();
            include '../view/khoahoc.php';
            break;
        case 'ct_khoahoc':
            include '../view/ctkhoahoc.php';
            break;
        case 'giangvien':
            include '../view/giangvien.php';
            break;
        case 'ct_giangvien':
            include '../view/ctgiangvien.php';
            break;
        default:
            include '../view/home.php';
    }
}else{
    include  'home.php';
}

include 'footer.php';
?>