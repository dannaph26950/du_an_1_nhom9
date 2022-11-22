<?php
session_start();
//Phải thêm các file từ model vào
    include '../admin/model/pdo.php';
    include  '../admin/model/khoahoc.php';
    include '../admin/model/loaikhoahoc.php';
    include '../admin/model/giangvien.php';
    include '../admin/model/hocvien.php';

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



//                SỬA THÔNG TIN KHÓA HỌC
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
                      include '../admin/view/sanpham/editsanpham.php';
                }
                $listall_khoahoc = listall_khoahoc();
                include '../admin/view/sanpham/listsanpham.php';
                break;



//                IN KHÓA HỌC
//        ==============================
            case 'list_khoahoc':
                $listall_khoahoc = listall_khoahoc();
                include '../admin/view/sanpham/listsanpham.php';
                break;


//                XÓA KHÓA HỌC
//        ====================================
            case 'delete_khoahoc':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_khoahoc($_GET['id']);
                }
                $listall_khoahoc = listall_khoahoc();
                include '../admin/view/sanpham/listsanpham.php';
                break;



        //THÊM GIẢNG VIÊN
//            ===============================
            case 'add_giangvien':
                include '../admin/view/giangvien/addgiangvien.php';
                if(isset($_POST['add_giangvien']) && ($_POST['add_giangvien'])) {

                    $ten_gv = $_POST['ten_gv'];

                    if ( isset( $_FILES['hinh_gv'] ) ) {
                        $tagert_dir = "../admin/view/upfileanh/giangvien";
                        $name_image = $_FILES['hinh_gv']['name'];
                        $tagert_file = $tagert_dir . $name_image;
                        $maxfilesize = 800000;
                        $allowtypes = ['jpg' , 'png' , 'gif' , 'jpeg'];
                        $allowupload = TRUE;
                        $imageFileType = pathinfo ( $tagert_file , PATHINFO_EXTENSION );
                        if ( $_FILES['hinh_gv']['size'] > $maxfilesize ) {
                            echo " Không được upload ảnh lớn hơn " . $maxfilesize . "Byte";
                            $allowupload = FALSE;
                        }

                        if ( ! in_array ( $imageFileType , $allowtypes ) ) {
                            echo "Chỉ được upload các định dạng JPG , PNG , GIF , JPEG<br>";
                            $allowupload = FALSE;
                        }
                        if ( $allowupload == TRUE ) {
                            // Xử lý di chuyển ảnh từ máy tính sang server
                            // dung ham move_upload_file
                            if ( move_uploaded_file ( $_FILES['hinh_gv']['tmp_name'] , $tagert_file ) ) {
//                                echo " Upload thành công ".$_FILES['hinh_gv']['tmp_name']."<br>";
                            } else {
                                echo "Lỗi khi đang thực hiện upload<br>";
                            }
                        }
                    }
                    $thong_tin_gv = $_POST['thong_tin_gv'];
                    $trang_thai = $_POST['trang_thai'];
                    $listall_giangvien=listall_giangvien ();
                    insert_giangvien ($ten_gv,$name_image,$thong_tin_gv,$trang_thai);
                    $thongbao="Thêm giảng viên thành công";


                    $thongbao = 'Thêm thành công';

                }
                $listall_giangvien=listall_giangvien();
                  include '../admin/view/giangvien/listgiangvien.php';

                break;



//                SỬA THÔNG TIN GIẢNG VIÊN
//        =====================================================

            case 'edit_giangvien':

                include '../admin/view/giangvien/editgiangvien.php';
                $error_update_giangvien = [];
                if(isset($_POST['update_gv']) && ($_POST['update_gv'])){
                    $magv = $_POST['magv'];
                    $ten_gv = $_POST['ten_gv'];

                    if (isset($_FILES['hinh_gv'])){
                        $tagert_dir = "../admin/view/upfileanh/giangvien/";
                        $name_image = $_FILES['hinh_gv']['name'];
                        $tagert_file = $tagert_dir.$name_image;
                        $maxfilesize = 800000;
                        $allowtypes = ['jpg', 'png', 'gif', 'jpeg'];
                        $allowupload = true;
                        $imageFileType = pathinfo($tagert_file,PATHINFO_EXTENSION);
                        if ($_FILES['hinh_gv']['size'] > $maxfilesize){
                            $error_update_giangvien['imgSize'] = " Không được upload ảnh lớn hơn ".$maxfilesize."Byte";
                            $allowupload = false;
                        }

                        if (!in_array($imageFileType,$allowtypes)){
                            $error_update_giangvien['imgType'] = "Chỉ được upload các định dạng JPG , PNG , GIF , JPEG<br>";
                            $allowupload = false;
                        }
                        if ($allowupload == true){
                            // Xử lý di chuyển ảnh từ máy tính sang server
                            // dung ham move_upload_file
                            if (move_uploaded_file($_FILES['hinh_gv']['tmp_name'],$tagert_file)){
//                                echo " Upload thành công ".$_FILES['hinh_gv']['tmp_name']."<br>";
                            }else{
                                echo "Lỗi khi đang thực hiện upload<br>";
                            }
                        }
                    }
                    $thong_tin_gv = $_POST['thong_tin_gv'];
                    $trang_thai = $_POST['trang_thai'];
                    if (!$error_update_giangvien) {
                        update_khoahoc($ten_gv,$name_image, $thong_tin_gv,  $trang_thai);
                        $thongbao= 'Cập nhật thành công';

                    }

                }


                break;


//                XÓA THÔNG TIN GIẢNG VIÊN
//        =====================================================
            case 'delete_giangvien':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_giangvien($_GET['id']);
                }
                $listall_giangvien = listall_giangvien();
                include '../admin/view/giangvien/listgiangvien.php';
                break;

            //                ĐỒ THÔNG TIN GIẢNG VIÊN
//        =====================================================
                case 'list_giangvien':
                $listall_giangvien = listall_giangvien();
                include '../admin/view/giangvien/listgiangvien.php';
                break;

//HỌC VIÊN
            case 'list_hocvien':
                $listall_hocvien = listall_hocvien();
                include '../admin/view/hocvien/listhocvien.php';
                break;
            case 'add_hocvien':
                include '../admin/view/hocvien/addhocvien.php';



                    $thongbao = 'Thêm thành công';
                $listall_hocvien=listall_hocvien();


                break;
            case 'delete_hocvien':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_hocvien($_GET['id']);
                }
                $listall_hocvien = listall_hocvien();
                include '../admin/view/hocvien/listhocvien.php';
                break;
            case 'edit_hocvien':
                include '../admin/view/hocvien/edithocvien.php';
                if(isset($_POST['edit_hocvien']) && ($_POST['edit_hocvien'])) {

                    $ten_hv = $_POST['ten_hv'];


                    $email = $_POST['sdt'];
                    $sdt = $_POST['sdt'];
                    $dia_chi = $_POST['dia_chi'];
                    $listall_hocvien=listall_hocvien ();
                    insert_hocvien ($ten_hv,$email,$sdt,$dia_chi);
                    $thongbao="Thêm học viên thành công";


                    $thongbao = 'Thêm thành công';

                }
                $listall_hocvien=listall_hocvien();


                include '../admin/view/hocvien/listhocvien.php';
                break;
        //dangnhap-admin
            case 'dang_nhap':

                include '../admin/dang_nhap.php';
                break;
            case 'list_binhluan':
                include '../admin/view/binhluan/listbinhluan.php';
                break;
            case 'edit_binhluan':
                include "../admin/view/binhluan/editbinhluan.php";
            default:
                include '../admin/home.php';
        }
    }else{
        include '../admin/home.php';
    }

    include '../admin/footer.php';


?>