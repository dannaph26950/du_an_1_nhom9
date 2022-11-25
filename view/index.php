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

            $listall_khoahoc = listall_khoahoc();
            //Cách lấy một phần tử đổ vào trong admin khi chưa thiết lập khóa:
            /* tạo một biến listone_(tên bảng) = function(tham số lấy number id chính, vd: 12);
            Dùng echo "<pre>"; để kiếm tra
//            print_r($tên biến lúc nãy)-> nó đổ ra mảng-> biến lúc nãy trỏ vào lấy value cụ thể: function(12)[0:lấy từ index đầu]['tên biến']
            Sau đó kiểm tra , như trên.
            Tiếp đến coppy phần function kia vào view/ file mình đang làm, bỏ vào <?php echo function($value['lấy id giống nhau của hai bảng'][0]['tên biến']?>
             */

//            var_dump($listall_lop);
        //khóa học lấy id lớp
            $listone_khoahoc = listone_khoahoc(34)[0]['id_lop'];
            //lớp lấy mã giáo viên
            $listone_lop = loadone_lop(131)[0]['magv'];
            //giáo viên lấy tên giảng viên
            $listone_giangvien = listone_giangvien(3)[0]['ten_gv'];
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
            }
            $listall_khoahoc = listall_khoahoc();
            $listall_lop = listall_lop();

//            $list_lop = loadone_lop(131)[0]['ten_lop'];
//            echo "<pre>";
//            print_r($listone_giangvien);
//            die();
            include '../view/ctkhoahoc.php';
            break;
        case 'giangvien':
            include '../view/giangvien.php';
            break;
        case 'ct_giangvien':
            include '../view/ctgiangvien.php';
            break;
        case 'dang_ky':
            include "../view/dangky.php";
            break;
        case 'lienhe':
            include "../view/lienhe.php";
            break;
        default:
            include '../view/home.php';
    }
}else{
    include  'home.php';
}

include 'footer.php';
?>