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
            $list_lop = [];
            $listall_khoahoc_user = listall_khoahoc_user();

//            foreach ($listall_khoahoc_user as $index => $value){
//               array_push($list_lop,$value['id_lop']);
//            }
            $listone_lop = loadone_lop($list_lop);
//

            include '../view/khoahoc.php';
            break;
        case 'ct_khoahoc':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $listone_khoahoc=listone_khoahoc($id);
                $list_danhmuc = listone_danhmuc($id);
                $list_lop = loadone_lop($id);
            }
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