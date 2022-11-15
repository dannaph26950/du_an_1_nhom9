<?php
session_start();
    include '../admin/model/pdo.php';
    include  '../admin/model/khoahoc.php';


    include '../admin/header.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'add_khoahoc':
                if(isset($_POST['add_khoahoc']) && ($_POST['add_khoahoc'])){
                    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
                    $id_danh_muc = $_POST['id_danh_muc'];
                    $mo_ta = $_POST['mo_ta'];
                    $gia = $_POST['gia'];
                    $thoi_gian_hoc = $_POST['thoi_gian_hoc'];
                    $id_lop= $_POST['id_lop'];
                    insert_khoahoc($ten_khoa_hoc, $gia, $thoi_gian_hoc, $mo_ta,$id_danh_muc,$id_lop);
                    $thongbao= 'Them thanh cong';
                }
                include '../admin/view/sanpham/addsanpham.php';
                break;
            case 'dang_nhap':
                include '../admin/dang_nhap.php';
                break;
            default:
                include '../admin/home.php';
        }
    }else{
        include '../admin/home.php';
    }

    include '../admin/footer.php';


?>