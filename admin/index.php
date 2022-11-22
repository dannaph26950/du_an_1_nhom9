<?php
session_start();
//Phải thêm các file từ model vào
include '../admin/model/pdo.php';
include  '../admin/model/khoahoc.php';
include '../admin/model/loaikhoahoc.php';
include '../admin/model/giangvien.php';

// file trang dao diện và các chức năng khác nằm ở đây
include '../admin/header.php';
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        //danhmuc
        case 'add_danhmuc':
            $error_add_danhmuc =[];
            if(isset($_POST['add_loaikhoahoc']) && ($_POST['add_loaikhoahoc'])){
//                    $id_danh_muc = $_POST['id_danh_muc'];
                $ten_danh_muc = $_POST['ten_danh_muc'];
                if(empty($ten_danh_muc)){
                    $error_add_danhmuc["name"] = "Vui lòng nhập tên danh mục";
                }
                if (!$error_add_danhmuc) {
                    insert_danhmuc($ten_danh_muc);
                    $thongbao = 'Đã thêm vào danh mục';
                }
            }

            include '../admin/view/danhmuc/adddanhmuc.php';
            break;
        case 'list_danhmuc':
            $listall_danhmuc = listall_danhmuc();
            include '../admin/view/danhmuc/listdanhmuc.php';
            break;
        case 'delete_danhmuc':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listall_danhmuc = listall_danhmuc();
            include '../admin/view/danhmuc/listdanhmuc.php';
            break;
        case 'edit_danhmuc':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $list_danhmuc = listone_danhmuc($id);
            }

            include '../admin/view/danhmuc/editdanhmuc.php';
            break;
        case 'update_danhmuc':
            if (isset($_POST['edit_loaikhoahoc'])&&($_POST['edit_loaikhoahoc'])){
                $id_danh_muc = $_POST['id_danh_muc'];
                $ten_danh_muc = $_POST['ten_danh_muc'];
                edit_danhmuc($ten_danh_muc,$id_danh_muc);
                $thongbao =  'Đã cập nhật danh mục';
            }
            $listall_danhmuc=listall_danhmuc();
            include '../admin/view/danhmuc/listdanhmuc.php';
            break;
        //khoahoc-thao
        case 'add_khoahoc':
            $error_add_khoahoc = [];
            if(isset($_POST['add_khoahoc']) && ($_POST['add_khoahoc'])){
                $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
                if (isset($_FILES['anh'])){
                    $tagert_dir = "../admin/view/upfileanh/";
                    $name_image = $_FILES['anh']['name'];
                    $tagert_file = $tagert_dir.$name_image;
                    $maxfilesize = 800000;
                    $allowtypes = ['jpg', 'png', 'gif', 'jpeg'];
                    $allowupload = true;
                    $imageFileType = pathinfo($tagert_file,PATHINFO_EXTENSION);
                    if ($_FILES['anh']['size'] > $maxfilesize){
                        $error_add_khoahoc['imgSize'] = " Không được upload ảnh lớn hơn ".$maxfilesize."Byte";
                        $allowupload = false;
                    }

                    if (!in_array($imageFileType,$allowtypes)){
                        $error_add_khoahoc['imgType'] = "Chỉ được upload các định dạng JPG , PNG , GIF , JPEG<br>";
                        $allowupload = false;
                    }
                    if ($allowupload == true){
                        // Xử lý di chuyển ảnh từ máy tính sang server
                        // dung ham move_upload_file
                        if (move_uploaded_file($_FILES['anh']['tmp_name'],$tagert_file)){
//                                echo " Upload thành công ".$_FILES['anh']['tmp_name']."<br>";
                        }else{
                            echo "Lỗi khi đang thực hiện upload<br>";
                        }
                    }
                }
                $gia = $_POST['gia'];
                $thoi_gian_hoc = $_POST['thoi_gian_hoc'];
                $mo_ta = $_POST['mo_ta'];
                $id_danh_muc = $_POST['id_danhmuc'];
                $id_lop= $_POST['id_lop'];
                if(empty($ten_khoa_hoc)){
                    $error_add_khoahoc["name_KH"] = "Vui lòng nhập tên khóa học";
                }
                if(empty($gia)){
                    $error_add_khoahoc["gia"] = "Vui lòng nhập giá tiền";
                }
                if(empty($mo_ta)){
                    $error_add_khoahoc["mota"] = "Vui lòng nhập mô tả";
                }
                if(empty($id_danh_muc)){
                    $error_add_khoahoc["id_DM"] = "Vui lòng nhập mã danh mục";
                }
                if(empty($id_lop)){
                    $error_add_khoahoc["id_lop"] = "Vui lòng nhập mã lớp";
                }
                if(empty($thoi_gian_hoc)){
                    $error_add_khoahoc["time"] = "Vui lòng nhập thời gian học";
                }
                if (!$error_add_khoahoc) {
                    insert_khoahoc($ten_khoa_hoc,$name_image, $gia, $thoi_gian_hoc, $mo_ta, $id_danh_muc,$id_lop);
                    $thongbao= 'Cập nhật thành công';
                }
            }
            $listall_danhmuc = listall_danhmuc();
            include '../admin/view/sanpham/addsanpham.php';
            break;

        case 'list_khoahoc':
            $listall_khoahoc = listall_khoahoc();
            include '../admin/view/sanpham/listsanpham.php';
            break;
        case 'sua_khoahoc':
            if(isset($_GET['id_KH'])&&$_GET['id_KH']>0);{
            $id = $_GET['id'];
            $listone_khoahoc = loadone_khoahoc($id);
            }
            include '../admin/view/sanpham/editsanpham.php';
            break;
        case 'upd_khoahoc':
            $error_update_khoahoc = [];
            if(isset($_POST['update_KH']) && ($_POST['update_KH'])){
                $id_khoa_hoc = $_POST['id'];
                $ten_khoa_hoc = $_POST['ten_KH'];
                if (isset($_FILES['anh'])){
                    $tagert_dir = "../admin/view/upfileanh/";
                    $name_image = $_FILES['anh']['name'];
                    $tagert_file = $tagert_dir.$name_image;
                    $maxfilesize = 800000;
                    $allowtypes = ['jpg', 'png', 'gif', 'jpeg'];
                    $allowupload = true;
                    $imageFileType = pathinfo($tagert_file,PATHINFO_EXTENSION);
                    if ($_FILES['anh']['size'] > $maxfilesize){
                        $error_update_khoahoc['imgSize'] = " Không được upload ảnh lớn hơn ".$maxfilesize."Byte";
                        $allowupload = false;
                    }

                    if (!in_array($imageFileType,$allowtypes)){
                        $error_update_khoahoc['imgType'] = "Chỉ được upload các định dạng JPG , PNG , GIF , JPEG<br>";
                        $allowupload = false;
                    }
                    if ($allowupload == true){
                        // Xử lý di chuyển ảnh từ máy tính sang server
                        // dung ham move_upload_file
                        if (move_uploaded_file($_FILES['anh']['tmp_name'],$tagert_file)){
//                                echo " Upload thành công ".$_FILES['anh']['tmp_name']."<br>";
                        }else{
                            echo "Lỗi khi đang thực hiện upload<br>";
                        }
                    }
                }
                $gia = $_POST['gia_KH'];
                $thoi_gian_hoc = $_POST['thoiGian_KH'];
                $mo_ta = $_POST['mota_KH'];
                $id_danh_muc = $_POST['id_danhmuc'];
                $id_lop= $_POST['id_Lop'];
                if(empty($ten_khoa_hoc)){
                    $error_update_khoahoc["name"] = "Vui lòng nhập tên khóa học";
                }
                if(empty($gia)){
                    $error_update_khoahoc["gia"] = "Vui lòng nhập giá tiền";
                }
                if(empty($mo_ta)){
                    $error_update_khoahoc["mota"] = "Vui lòng nhập mô tả";
                }
                if(empty($id_danh_muc)){
                    $error_update_khoahoc["id_DM"] = "Vui lòng nhập mã danh mục";
                }
                if(empty($id_lop)){
                    $error_update_khoahoc["id_lop"] = "Vui lòng nhập mã lớp";
                }
                if(empty($thoi_gian_hoc)){
                    $error_update_khoahoc["time"] = "Vui lòng nhập thời gian học";
                }
                if (!$error_update_khoahoc) {
                    update_khoahoc($ten_khoa_hoc,$name_image, $gia, $thoi_gian_hoc, $mo_ta, $id_danh_muc,$id_lop,$id_khoa_hoc);
                    $thongbao= 'Cập nhật thành công';

                }
            }
            $listall_khoahoc = listall_khoahoc();
            include '../admin/view/sanpham/listsanpham.php';
            break;
        case 'delete_khoahoc':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_khoahoc($_GET['id']);
            }
            $listall_khoahoc = listall_khoahoc();
            include '../admin/view/sanpham/listsanpham.php';
            break;
        //giangvien
        case 'add_giangvien':
            include '../admin/view/giangvien/addgiangvien.php';
            break;
        case 'list_giangvien':
            include '../admin/view/giangvien/listgiangvien.php';
            break;
        //binhluan
        case 'list_binhluan':
            include '../admin/view/binhluan/listbinhluan.php';
            break;
        case 'edit_binhluan':
            include '../admin/view/binhluan/editbinhluan.php';
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