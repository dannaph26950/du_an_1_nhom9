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

include 'header.php';
if (isset($_GET['act']) && ($_GET['act']) != ''){
    $act = $_GET['act'];
    switch ($act){
        case 'lien_he':
            include '../view/lienhe.php';
            break;
        case 'khoa_hoc':
            $listall_lop = listall_lop();

            $listall_khoahoc = listall_khoahoc();
            $listall_danhmuc = listall_danhmuc();
            //Cách lấy một phần tử đổ vào trong admin khi chưa thiết lập khóa:
            /* tạo một biến listone_(tên bảng) = function(tham số lấy number id chính, vd: 12);
            Dùng echo "<pre>"; để kiếm tra
//            print_r($tên biến lúc nãy)-> nó đổ ra mảng-> biến lúc nãy trỏ vào lấy value cụ thể: function(12)[0:lấy từ index đầu]['tên biến']
            Sau đó kiểm tra , như trên.
            Tiếp đến coppy phần function kia vào view/ file mình đang làm, bỏ vào <?php echo function($value['lấy id giống nhau của hai bảng'][0]['tên biến']?>
             */

//            var_dump($listall_lop);
        //khóa học lấy id lớp
//            $listone_khoahoc = listone_khoahoc(34)[0]['id_lop'];
            //lớp lấy mã giáo viên
//            $listone_lop = loadone_lop(131)[0]['magv'];
            //giáo viên lấy tên giảng viên
//            $listone_giangvien = listone_giangvien(3)[0]['ten_gv'];
//            echo "<pre>";
//            print_r($listone_lop);
//            echo "<pre>";
//            print_r($listone_khoahoc);
//            echo "<pre>";
//            print_r($listone_giangvien);
//            die();
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

            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $listone_khoahoc=listone_khoahoc($id);

            }

//            if(isset($_POST['cart']) && ($_POST['cart'])){
//                $ten_danh_muc = $_POST['ten_danh_muc'];
//                insert_danhmuc($ten_danh_muc);
//                $thongbao = 'Đã thêm vào danh mục';
//            }
            include '../view/dangky_kh.php';
            break;


//            DANH SÁCH YÊU THÍCH
//------------------------------------------------
        case 'wishlist':
            include '../view/wishlist.php';
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