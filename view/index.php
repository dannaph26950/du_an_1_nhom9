<?php
//trang user
session_start();
include '../model/pdo.php';
include '../model/khoahoc.php';
include '../model/lop.php';
include '../model/danhmuc.php';
include '../model/giangvien.php';
include '../model/taikhoan.php';
include '../model/hocvien.php';
include '../model/binhluan.php';

$listall_danhmuc = listall_danhmuc();
include 'header.php';
if (isset($_GET['act']) && ($_GET['act']) != ''){
    $act = $_GET['act'];
    switch ($act){
        case 'lien_he':
            include '../view/lienhe.php';
            break;
        case 'khoa_hoc':
            if(isset($_POST['timkiem']) && ($_POST['timkiem'])){
                $tukhoa = $_POST['search'];
                $listall_lop = listall_lop();
                $list_khoahoc = sreach_khoahoc($tukhoa);
                $listall_danhmuc = listall_danhmuc();
            }
            elseif(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $listall_lop = listall_lop();
                $list_khoahoc = list_khoahoc($id);
                $listall_danhmuc = listall_danhmuc();
            }else{
                $listall_lop = listall_lop();
                $list_khoahoc = listall_khoahoc();
                $listall_danhmuc = listall_danhmuc();
            }
            include '../view/khoahoc.php';
            break;
        case 'ct_khoahoc':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $listone_khoahoc=listone_khoahoc($id);
                $list_danhmuc = listone_danhmuc($id);
                $list_lop = list_lop($id);
            }


//            $id = listone_lop_tenlop($_SESSION['user']['id_lop']);
//
//            echo "<pre>";
//            print_r($id);
//            die();
            $listall_khoahoc = listall_khoahoc();
            $listall_lop = listall_lop();

//            $list_lop = loadone_lop(131)[0]['ten_lop'];

            include '../view/ctkhoahoc.php';
            break;
        case 'update_idlop':
            if(isset($_POST['timkiem']) && ($_POST['timkiem'])){
                $tukhoa = $_POST['search'];
                $listall_lop = listall_lop();
                $list_khoahoc = sreach_khoahoc($tukhoa);
                $listall_danhmuc = listall_danhmuc();
            }
            elseif(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $listall_lop = listall_lop();
                $list_khoahoc = list_khoahoc($id);
                $listall_danhmuc = listall_danhmuc();
            }else{
                $listall_lop = listall_lop();
                $list_khoahoc = listall_khoahoc();
                $listall_danhmuc = listall_danhmuc();
            }
            if(isset($_POST['dangki'])){
                $id_lop = $_POST['id_lop'];
                $id_hoc_vien = $_POST['id_hoc_vien'];
                $update = update_hocvien_idlop($id_lop,$id_hoc_vien);
            }
            echo "<script>alert('Bạn đã cập nhật lại lớp!!!')</script>";

            include '../view/khoahoc.php';
            break;
//      giang vien------------------------------------

        case 'giangvien':
            $listall_giangvien = listall_giangvien();
//            $list_lop_magv = list_lop_magv(3);
//            $count_lop = count($list_lop_magv);

//            $listone_giangvien = listone_giangvien(3)[0]['magv'];
//            $loadone_lop = loadone_lop(listone_giangvien(3)[0]['magv'])[0]['id_lop'];

//            echo "<pre>";
//            print_r($count_lop);
//            die();
            include '../view/giangvien.php';
            break;
        case 'ct_giangvien':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $listone_giangvien = listone_giangvien($id);
            }
            include '../view/ctgiangvien.php';
            break;
//dang_ky
        case 'add_dangky':
            $error_dk = [];
            if(isset($_POST['dang_ky']) && ($_POST['dang_ky'])){
                $tai_khoan = $_POST['tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $matkhau1 = $_POST['mat_khau1'];
                $ten_hv = $_POST['ten_hv'];
                $email = $_POST['email'];
                $dia_chi = $_POST['dia_chi'];
                $sdt = $_POST['sdt'];
                if(empty($tai_khoan)){
                    $error_dk["tai_khoan"] = "Vui lòng nhập tên tài khoản";
                }
                if(empty($mat_khau)){
                    $error_dk["mat_khau"] = "Vui lòng nhập mật khẩu";
                }
                if($mat_khau != $matkhau1){
                    $error_dk["mat_khau1"] = "Mật khẩu nhập lại không đúng";
                }
                if(empty($ten_hv)){
                    $error_dk["ten_hv"] = "Vui lòng nhập tên";
                }
                if(empty($email)){
                    $error_dk["email"] = "Vui lòng nhập email";
                }
                if(empty($dia_chi)){
                    $error_dk["dia_chi"] = "Vui lòng nhập địa chỉ";
                }
                if(empty($sdt)){
                    $error_dk["sdt"] = "Vui lòng nhập số điện thoại";
                }
                if(!$error_dk){
                    add_taikhoan($ten_hv,$tai_khoan,$mat_khau,$email,$sdt,$dia_chi);
                    $thongbao = 'Đăng ký thành công';
                }
            }
            include "../view/dangky_user.php";
            break;
        case 'lienhe':
            include "../view/lienhe.php";
            break;
        case 'dang_nhap':
//                              ---------------------------- ĐỪNG XÓA -------------------------------
//            $error_dn = [];
//            if (isset($_POST['dang_nhap'])){
//
//                $user = $_POST['tai_khoan'];
//                $pass = $_POST['mat_khau'];
//                $check_user = check_user($user);
//                $tai_khoan = $check_user['tai_khoan'];
//                $check_pass = check_pass($tai_khoan);
////                echo $check_user['tai_khoan'];
////                die();
////                if($user != $check_user['tai_khoan']){
////                    $error_dk["tai_khoan1"] = "Tài khoản không tồn tại";
////                }
//                if(empty($pass)){
//                    $error_dk["mat_khau"] = "Vui lòng nhập mật khẩu";
//                }
//                if()
//
//            }

            if (isset($_POST['dang_nhap'])){

                $user = $_POST['tai_khoan'];
                $pass = $_POST['mat_khau'];
                $check_user = check_user($user,$pass);
                if (is_array($check_user)){
                    $_SESSION['user'] = $check_user;
                    $thongbao = 'Đã đăng nhập thành công';
                    echo "<script>window.location.href='index.php';</script>";
                }elseif(!is_array($check_user)){
                    $thongbao = 'Tài khoản không tồn tại';
                    echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!!!')</script>";
                }
            }
            include "../view/dang_nhap.php";
            break;
        case 'dang_xuat':
            session_unset();
            echo "<script>window.location.href='index.php';</script>";
            break;



//            GIỎ HÀNG
//    ------------------------------------------------
        case 'cart':
            echo "<pre>";
            print_r(list_lop(44));
            die();
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $listone_khoahoc=listone_khoahoc($id);
                $list_lop = list_lop($id);

            }

//            if(isset($_POST['cart']) && ($_POST['cart'])){
//                $ten_danh_muc = $_POST['ten_danh_muc'];
//                insert_danhmuc($ten_danh_muc);
//                $thongbao = 'Đã thêm vào danh mục';
//            }
            include '../view/dangky_kh.php';
            break;


//            TƯ VẤN :

//        case 'tuvan':
//            if(isset($_GET['id']) && ($_GET['id']>0)){
//                $id = $_GET['id'];
//                $listone_hocvien=listone_hocvien($id);
//
//            }
//
//            include "../view/tuvan.php";

//            DANH SÁCH YÊU THÍCH
//------------------------------------------------
        case 'wishlist':
            include '../view/wishlist.php';
            break;
        case 'profile':
            if(isset($_SESSION['user']['id_hoc_vien'])){
                $listone_hocvien = listone_hocvien($_SESSION['user']['id_hoc_vien']);
            }
            include '../view/profile_user.php';
            break;
        case 'edit_thong_tin':
//            var_dump($_SESSION['user']['id_hoc_vien']); die();
            if(isset($_SESSION['user']['id_hoc_vien'])){
                $listone_hocvien = listone_hocvien($_SESSION['user']['id_hoc_vien']);
            }

            include '../view/thong_tin_user_update.php';
            break;
        case 'update_thong_tin':

            if(isset($_POST['update_hv']) && ($_POST['update_hv'])){
                $id_hoc_vien = $_POST['id'];
                $ten_hv=$_POST['ten_hv'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $dia_chi = $_POST['dia_chi'];
                update_hocvien($ten_hv,$email,$sdt,$dia_chi,$id_hoc_vien);
            }
            if(isset($_SESSION['user']['id_hoc_vien'])){
            $listone_hocvien = listone_hocvien($_SESSION['user']['id_hoc_vien']);
                }

            include '../view/profile_user.php';
            break;
        case 'list_khoa_hoc':
            if(isset($_SESSION['user']['id_hoc_vien'])){
                $listone_hocvien = listone_hocvien($_SESSION['user']['id_hoc_vien']);
            }

            $listall_danhmuc=listall_danhmuc ();
            include '../view/thong_tin_user_kh.php';
            break;

//        case 'locdanhmuc':
//$listall_danhmuc=listall_danhmuc ();
//
//            if(isset($_GET['id']) && ($_GET['id']>0)){
//                $id = $_GET['id'];
//                $listcate_khoahoc  =listcate_khoahoc($id);
//
//            }
//            include '../view/locdanhmuc.php';
//            break;
        default:
            include '../view/home.php';
    }
}else{
    $listall_lop = listall_lop();
    $listall_khoahoc = listall_khoahoc();
    include  'home.php';
}

include 'footer.php';
?>