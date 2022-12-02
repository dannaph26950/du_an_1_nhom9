<?php
//trang user
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include '../model/pdo.php';
include '../model/khoahoc.php';
include '../model/lop.php';
include '../model/danhmuc.php';
include '../model/giangvien.php';
include '../model/taikhoan.php';
include '../model/hocvien.php';
include '../model/binhluan.php';
include '../admin/model/giohang.php';
include '../admin/model/gui_bang_chung.php';

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
            $listall_khoahoc = listall_khoahoc();
            $listall_lop = listall_lop();
            include '../view/ctkhoahoc.php';
            break;
        case 'add_lop':
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
            //làm validate khi ko có user
            if(isset($_SESSION['user'])){
                if(isset($_POST['dangki'])){
                    $id = $_POST['id_hv'];
                    $id_lop = $_POST['id_lop'];
                    $gia = $_POST['gia'];
                    $trang_thai = $_POST['trang_thai'];
                    $times = time();
                    $times = strftime('%Y-%m-%d %H:%M:%S');
                    insert_dangki($id, $id_lop, $gia, $trang_thai,$times);
                }
                echo "<script>alert('Đã thêm khóa học thành công. Vui lòng thanh toán!!!')</script>";
                echo "<script>window.location.href='index.php?act=list_khoa_hoc';</script>";

            }else{
                echo "<script>alert('Đăng ký hoặc đăng nhập thì mới được mua khóa học này')</script>";
                echo "<script>window.location.href='index.php?act=add_dangky';</script>";
            }
            // hết
            include '../view/khoahoc.php';
            break;
        case 'thanh_toan':
//            echo '<pre>';
//            print_r($_SESSION['user']);
//            print_r(listone_gio_hang(11)) ;
//            echo $_GET['id'];
//            die();

            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id_dk = $_GET['id'];
                $listone_giohang = listone_gio_hang($id_dk);
            }
            $listall_danhmuc=listall_danhmuc();
            include '../view/thanh_toan.php';
            break;
        case 'update_thanh_toan':
            if(isset($_POST['update_hoadon']) && ($_POST['update_hoadon'])) {
                $id = $_POST['id'];
                if ( isset( $_FILES['image'] ) ) {
                    $tagert_dir = "../Upfileanh/hoadon/";
                    $name_image = $_FILES['image']['name'];
                    $tagert_file = $tagert_dir . $name_image;
                    $maxfilesize = 800000;
                    $allowtypes = ['jpg' , 'png' , 'gif' , 'jpeg'];
                    $imageFileType = pathinfo ( $tagert_file , PATHINFO_EXTENSION );
                    move_uploaded_file ( $_FILES['image']['tmp_name'] , $tagert_file );
                }
                insert_hoadon($name_image,$id);
                $thongbao="gửi hóa đơn thành công";
            }
            include '../view/thong_tin_user_kh.php';
            break;
//      giang vien------------------------------------

        case 'giangvien':
            $listall_giangvien = listall_giangvien();
            include '../view/giangvien.php';
            break;
        case 'ct_giangvien':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $listone_giangvien = listone_giangvien($id);
            }
            include '../view/ctgiangvien.php';
            break;
//      Đăng Ký-----------------------------------------
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
//      GIỎ HÀNG-----------------------------
        case 'cart':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $listone_khoahoc=listone_khoahoc($id);
                $list_danhmuc = listone_danhmuc($id);
                $list_lop = list_lop($id);
            }
            $listall_khoahoc = listall_khoahoc();
            $listall_lop = listall_lop();

            include '../view/dangky_kh.php';
            break;
        case 'profile':
            if(isset($_SESSION['user']['id_hoc_vien'])){
                $listone_hocvien = listone_hocvien($_SESSION['user']['id_hoc_vien']);
            }
            include '../view/profile_user.php';
            break;
        case 'edit_thong_tin':
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
                $listone_giohang = listone_giohang($_SESSION['user']['id_hoc_vien']);
            }
            $listall_danhmuc=listall_danhmuc ();
            include '../view/thong_tin_user_kh.php';
            break;
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