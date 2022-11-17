<?php
session_start();
    include '../admin/model/pdo.php';
    include  '../admin/model/khoahoc.php';

    include '../admin/header.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
        //danhmuc
            case 'add_danhmuc':
                if(isset($_POST['add_loai_khoa_hoc']) && ($_POST['add_loai_khoa_hoc'])){
                    $ten_danh_muc = $_POST['ten_danh_muc'];
                    $id_danh_muc = $_POST['id_danh_muc'];
                    insert_danhmuc($id_danh_muc,$ten_danh_muc);
                    $thongbao = 'Đã thêm vào danh mục';
                }
                include '../admin/view/danhmuc/adddanhmuc.php';
                break;
            case 'list_danhmuc':
                include '../admin/view/danhmuc/listdanhmuc.php';
                break;
        //khoahoc-thao
            case 'add_khoahoc':
                if(isset($_POST['add_khoahoc']) && ($_POST['add_khoahoc'])){
                    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
                    $id_danh_muc = $_POST['id_danh_muc'];
                    $anh= $_POST['anh'];
                    $mo_ta = $_POST['mo_ta'];
                    $gia = $_POST['gia'];
                    $thoi_gian_hoc = $_POST['thoi_gian_hoc'];
                    $id_lop= $_POST['id_lop'];
                    insert_khoahoc($ten_khoa_hoc,$anh, $gia, $thoi_gian_hoc, $mo_ta,$id_danh_muc,$id_lop);
                    $thongbao= 'Thêm thành công';
                }
                include '../admin/view/sanpham/addsanpham.php';
                break;

            case 'list_khoahoc':
                include '../admin/view/sanpham/listsanpham.php';
                break;
        //giangvien
            case 'add_giangvien':
                include '../admin/view/giangvien/addgiangvien.php';
                break;
            case 'list_giangvien':
                include '../admin/view/giangvien/listgiangvien.php';
                break;

        //dangnhap-admin
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