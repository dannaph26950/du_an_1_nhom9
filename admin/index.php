<?php
session_start();
//Phải thêm các file từ model vào
    include '../admin/model/pdo.php';
    include  '../admin/model/khoahoc.php';
    include '../admin/model/loaikhoahoc.php';
    include '../admin/model/giangvien.php';
    include '../admin/model/hocvien.php';
    include '../admin/model/lop.php';
    include '../admin/model/binhluan.php';
    include '../admin/model/giohang.php';
    include '../admin/model/taikhoan_admin.php';

// file trang dao diện và các chức năng khác nằm ở đây
    include '../admin/header.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
//        danhmuc --------------------------------------------
            case 'add_danhmuc':
                if(isset($_POST['add_loaikhoahoc']) && ($_POST['add_loaikhoahoc'])){
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
//        khoahoc --------------------------------------------
            case 'add_khoahoc':
                if(isset($_POST['add_khoahoc']) && ($_POST['add_khoahoc'])){
                    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
                    $id_danh_muc = $_POST['id_danhmuc'];
                    if (isset($_FILES['anh'])){
                        $tagert_dir = "../Upfileanh/";
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
                            if (move_uploaded_file($_FILES['anh']['tmp_name'],$tagert_file)){
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
                    $list_lop = listall_lop();
                    $listall_danhmuc = listall_danhmuc();
                include '../admin/view/sanpham/addsanpham.php';
                break;
            case 'edit_khoahoc':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    $listone_khoahoc=listone_khoahoc($id);
                }
                $listall_danhmuc = listall_danhmuc();
                $list_lop = listall_lop();
                include '../admin/view/sanpham/editsanpham.php';
                break;
            case 'update_khoahoc':

                $error_update_khoahoc = [];
                if(isset($_POST['update_KH']) && ($_POST['update_KH'])){
                    $id = $_POST['id'];

                    $ten_khoa_hoc = $_POST['ten_KH'];
                    if (isset($_FILES['anh'])){
                        $tagert_dir = "../Upfileanh/";
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
                            if (move_uploaded_file($_FILES['anh']['tmp_name'],$tagert_file)){
                            }else{
                                echo "Lỗi khi đang thực hiện upload<br>";
                            }
                        }
                    }
                    $gia = $_POST['gia_KH'];
                    $thoi_gian_hoc = $_POST['thoiGian_KH'];
                    $mo_ta = $_POST['mota_KH'];
                    $id_danh_muc = $_POST['id_danh_muc'];
                    $id_lop= $_POST['id_lop'];
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
                        update_khoahoc($ten_khoa_hoc,$name_image, $gia, $thoi_gian_hoc, $mo_ta, $id_danh_muc,$id_lop,$id);
                        $thongbao= 'Cập nhật thành công';

                    }

                }
                $listall_khoahoc = listall_khoahoc();
                include '../admin/view/sanpham/listsanpham.php';
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
//        giang vien --------------------------------------------
            case 'add_giangvien':
                if(isset($_POST['add_giangvien']) && ($_POST['add_giangvien'])) {

                    $ten_gv = $_POST['ten_gv'];

                    if ( isset( $_FILES['hinh_gv'] ) ) {
                        $tagert_dir = "../Upfileanh/giangvien/";
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


                }

                include '../admin/view/giangvien/addgiangvien.php';
                break;
            case 'edit_giangvien':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    $listone_giangvien=listone_giangvien($id);
                }
                include '../admin/view/giangvien/editgiangvien.php';
                break;
            case 'update_giangvien':
                $error_update_giangvien = [];
                if(isset($_POST['update_giangvien']) && ($_POST['update_giangvien'])){
                    $ten_gv = $_POST['ten_gv'];
                    $id = $_POST['id'];

                    if (isset($_FILES['hinh_gv'])){
                        $tagert_dir = "../Upfileanh/giangvien/";
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
                        update_giangvien($ten_gv,$name_image, $thong_tin_gv, $trang_thai,$id);
                        $thongbao= 'Cập nhật thành công';

                    }

                }
                $listall_giangvien = listall_giangvien();
                include '../admin/view/giangvien/listgiangvien.php';
                break;
            case 'delete_giangvien':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_giangvien($_GET['id']);
                }
                $listall_giangvien = listall_giangvien();
                include '../admin/view/giangvien/listgiangvien.php';
                break;
            case 'list_giangvien':
                $listall_giangvien = listall_giangvien();
                include '../admin/view/giangvien/listgiangvien.php';
                break;
//        hoc vien --------------------------------------------
            case 'delete_hocvien':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_hocvien($_GET['id']);
                }
                $listall_hocvien = listall_hocvien();

                include '../admin/view/hocvien/listhocvien.php';
                break;
            case 'list_hocvien':
                $listall_hocvien = listall_hocvien();
                include '../admin/view/hocvien/listhocvien.php';
                break;
            case 'add_hocvien':

                if(isset($_POST['add_hocvien']) && ($_POST['add_hocvien'])) {

                    $ten_hv=$_POST['ten_hv'];
                    $taikhoan=$_POST['tai_khoan'];
                    $matkhau=$_POST['mat_khau'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $dia_chi=$_POST['dia_chi'];

                    insert_hocvien ($ten_hv,$taikhoan,$matkhau,$email,$sdt,$dia_chi);
                    $thongbao="Thêm học viên thành công";

                }
                $listall_hocvien=listall_hocvien();
                include '../admin/view/hocvien/addhocvien.php';
                break;
            case 'edit_hocvien':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    $listone_hocvien=listone_hocvien($id);
                }
                include '../admin/view/hocvien/edithocvien.php';
                break;
            case 'update_hocvien':

                if(isset($_POST['update_hv']) && ($_POST['update_hv'])){
                    $id_hoc_vien = $_POST['id'];
                    $ten_hv=$_POST['ten_hv'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $dia_chi = $_POST['dia_chi'];
                    update_hocvien($ten_hv,$email,$sdt,$dia_chi,$id_hoc_vien);
                    $thongbao="Cập nhật học viên thành công";
                }
                $listall_hocvien = listall_hocvien();
                include '../admin/view/hocvien/listhocvien.php';
                break;
//        Lớp--------------------------------------------
            case 'list_lop' :

                $list_lop=listall_lop ();
                include '../admin/view/lop/listlop.php';
                break;
            case 'add_lop':
                $error_add_lop = [];
                if(isset($_POST['add_lop']) && ($_POST['add_lop'])){
                    $ten_lop = $_POST['ten_lop'];
                    $thoi_gian_khai_giang = $_POST['thoi_gian_khai_giang'];
                    $dia_diem_hoc = $_POST['dia_diem_hoc'];
                    $so_luong = $_POST['so_luong'];
                    $id_gv = $_POST['id_gv'];
                    $id_khoa_hoc = $_POST['id_khoa_hoc'];
                    $trang_thai = $_POST['trang_thai'];
                    if(empty($ten_lop)){
                        $error_add_lop["name"] = "Không được để trống!!!";
                    }
                    if(empty($thoi_gian_khai_giang)){
                        $error_add_lop["time"] = "Không được để trống!!!";
                    }
                    if(empty($dia_diem_hoc)){
                        $error_add_lop["dia_diem"] = "Không được để trống!!!";
                    }
                    if(empty($so_luong)){
                        $error_add_lop["so_luong"] = "Không được để trống!!!";
                    }
                    if(empty($id_gv)){
                        $error_add_lop["id_gv"] = "Không được để trống!!!";
                    }
                    if(empty($id_khoa_hoc)){
                        $error_add_lop["id_kh"] = "Không được để trống!!!";
                    }
                    if(empty($trang_thai)){
                        $error_add_lop["trang_thai"] = "Không được để trống!!!";
                    }
                    if (!$error_add_lop) {
                        insert_lop($ten_lop,$thoi_gian_khai_giang,$dia_diem_hoc,$so_luong,$id_gv,$id_khoa_hoc,$trang_thai);
                        $thongbao = 'Đã thêm vào danh mục';
                    }
                }
                $listall_giangvien = listall_giangvien();
                $listall_khoahoc = listall_khoahoc();
                include '../admin/view/lop/addlop.php';
                break;
            case 'edit_lop':
                if(isset($_GET['id'])&&$_GET['id']>0);{
                $id = $_GET['id'];
                $list_lop = loadone_lop($id);
                }
                $listall_khoahoc = listall_khoahoc();
                $listall_giangvien = listall_giangvien();
                include '../admin/view/lop/editlop.php';
                break;
            case 'update_lop':

                if(isset($_POST['update_lop']) && ($_POST['update_lop'])){
                    $id_lop = $_POST['id'];
                    $ten_lop = $_POST['ten_lop'];
                    $thoi_gian_khai_giang = $_POST['thoi_gian_khai_giang'];
                    $dia_diem_hoc = $_POST['dia_diem_hoc'];
                    $so_luong = $_POST['so_luong'];
                    $id_gv = $_POST['magv'];
                    $id_khoa_hoc = $_POST['id_khoa_hoc'];
                    $trang_thai = $_POST['trang_thai'];

                    update_lop($ten_lop,$thoi_gian_khai_giang,$dia_diem_hoc,$so_luong,$id_gv,$id_khoa_hoc,$trang_thai,$id_lop);
                    $thongbao = 'Đã thêm vào danh mục';
                }
                $list_lop = listall_lop();

                include '../admin/view/lop/listlop.php';
                break;
            case 'xoa_lop':
                if(isset($_GET['id'])&&$_GET['id']>0);{
                $id_lop = $_GET['id'];
                delete_lop($id_lop);
            }
                $list_lop = listall_lop();
                include '../admin/view/lop/listlop.php';
                break;
//        dangnhap-admin---------------------------------------
            case 'dang_nhap':
                if (isset($_POST['dang_nhap'])&&($_POST['dang_nhap'])){
                    $taikhoan = $_POST['tai_khoan'];
                    $matkhau = $_POST['mat_khau'];
                    $checkuser = checkuser($taikhoan,$matkhau);
                    if (is_array($checkuser)){
                        $_SESSION['taikhoan'] = $checkuser;
                        echo "<script>alert('Đăng Nhập Thành Công!');</script>";
                        echo "<script>window.location.href='index.php';</script>";
                    }else{
                        echo "<script>alert('Chưa đúng mật khẩu hoặc tài khoản!');</script>";
                    }
                }
                include '../admin/dang_nhap.php';
                break;
            case 'dang_xuat':
                session_unset();
                echo "<script>window.location.href='index.php';</script>";
                break;
//        binh luan -------------------------------------------------
            case 'list_binhluan':
                $listall_binhluan = listall_binhluan();
                include '../admin/view/binhluan/listbinhluan.php';
                break;
            case 'xoa_binhluan':
                if(isset($_GET['id'])&&$_GET['id']>0);{
                $id_binhluan = $_GET['id'];
                delete_binhluan($id_binhluan);
            }
                $listall_binhluan = listall_binhluan();
                include '../admin/view/binhluan/listbinhluan.php';
                break;

            case 'edit_binhluan':
                if(isset($_GET['id'])&&$_GET['id']>0);{
                $id_binhluan = $_GET['id'];
                $listone_binhluan= listone_binhluan($id_binhluan);
                }
                include "../admin/view/binhluan/editbinhluan.php";

            case 'update_binhluan':
                if(isset($_POST['update_binhluan']) && ($_POST['update_binhluan'])){
                    $id_binhluan = $_POST['id'];
                    $ten_bl = $_POST['ten_bl'];
                   $id_hoc_vien = $_POST['id_hoc_vien'];
                    $id_khoa_hoc = $_POST['id_khoa_hoc'];
                    $trang_thai = $_POST['trang_thai'];
                    update_binhluan($ten_bl,$id_khoa_hoc,$id_hoc_vien,$trang_thai,$id_binhluan);
                    $thongbao = 'Đã thêm vào danh mục';
                }
                $listall_binhluan = listall_binhluan();
                include '../admin/view/binhluan/listbinhluan.php';
                break;
//        giỏ hàng --------------------------------------------------
            case 'list_giohang':
                $listall_giohang = listall_giohang() ;
                include '../admin/view/giohang/listgiohang.php';
                break;
            default:
                include '../admin/home.php';
        }
    }else{
        include '../admin/home.php';
    }

    include '../admin/footer.php';



?>