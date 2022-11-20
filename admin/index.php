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
                if(isset($_POST['add_loaikhoahoc']) && ($_POST['add_loaikhoahoc'])){
//                    $id_danh_muc = $_POST['id_danh_muc'];
                     $ten_danh_muc = $_POST['ten_danh_muc'];
                    insert_danhmuc($ten_danh_muc);
                    $thongbao = 'Đã thêm vào danh mục';

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
                if(isset($_POST['add_khoahoc']) && ($_POST['add_khoahoc'])){
                    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
                    $id_danh_muc = $_POST['id_danhmuc'];
                    if (isset($_FILES['anh'])){
                        $tagert_dir = "../admin/view/upfileanh/";
                        $name_image = $_FILES['anh']['name'];
                        $tagert_file = $tagert_dir.$name_image;
                        $maxfilesize = 800000;
                        $allowtypes = ['jpg', 'png', 'gif', 'jpeg'];
                        $allowupload = true;
                        $imageFileType = pathinfo($tagert_file,PATHINFO_EXTENSION);
                        if ($_FILES['anh']['size'] > $maxfilesize){
                            echo " Không được upload ảnh lớn hơn ".$maxfilesize."Byte";
                            $allowupload = false;
                        }

                        if (!in_array($imageFileType,$allowtypes)){
                            echo "Chỉ được upload các định dạng JPG , PNG , GIF , JPEG<br>";
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
                    $mo_ta = $_POST['mo_ta'];
                    $gia = $_POST['gia'];
                    $thoi_gian_hoc = $_POST['thoi_gian_hoc'];
                    $id_lop= $_POST['id_lop'];
                    $listall_danhmuc = listall_danhmuc();
                    insert_khoahoc($ten_khoa_hoc,$name_image, $gia, $thoi_gian_hoc, $mo_ta,$id_danh_muc,$id_lop);

                    $thongbao= 'Thêm thành công';
                }
                    $listall_danhmuc = listall_danhmuc();
                include '../admin/view/sanpham/addsanpham.php';
                break;

            case 'list_khoahoc':
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