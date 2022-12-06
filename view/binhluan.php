<?php
session_start();
$idpro = $_REQUEST['idpro'];
include '../model/pdo.php';
include '../model/binhluan.php';
include '../model/hocvien.php';

// $listone_hocvien = listone_hocvien(3)[0]['ten_hv'];
// echo "<pre>";
// print_r($listone_hocvien);
// die();

$dsbl = listall_binhluan($idpro);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../view/assets/css/style.css">
    <link rel="stylesheet" href="../view/assets/css/app.min.css">
    <link rel="stylesheet" href="../view/assets/css/fontawesome.min.css">
    <style>
        p {
            font-family: sans-serif;
        }

        .div-infor {
            margin-left: 40px;
        }

        .idhocvien {
            display: flex;

        }
    </style>
</head>

<body>
    <div class="box-cate">

        <div class="box-content2 binhluan">
            <!-- list bình luận  -->
            <?php foreach ($dsbl as $key => $value) { ?>
                <div class="as-post-comment">
                    
                    <div class="comment-content">
                        <h4 class="name" style="font-family: 'Roboto', sans-serif;font-size: 20px;color: #0a53be"><?php echo listone_hocvien($value['id_hoc_vien'])[0]['ten_hv'] ?> - Mã học viên: <?php echo $value['id_hoc_vien'] ?></h4><span class="commented-on"><i class="fal fa-calendar-alt"></i>
                             <?php $originalDate = $value['ngay_bl'] ; $newDate = date(" H:i:s d-m-Y", strtotime($value['ngay_bl'])); echo $newDate  ?>

                        </span>
                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5" style="display: none ;"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on
                                <span class="rating">1</span> customer rating</span>
                        </div>
                        <p class="text"><?php echo $value['ten_bl'] ?></p>
                    </div>
                </div>
                
            <?php } ?>

        </div>
        <div class="form-title">
            <p class="" style="color: blue; font-style:italic;">Thêm bình luận cho khóa học này <span style="color: red">**</span></p>
            <div class="box-footer searchbox">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                    <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <input type="text" name="message" id="" placeholder="Nhập bình luận..." style="width:100%; height: 100px; ">
                        <center>
                            <input type="submit" name="send" value="BÌNH LUẬN" class="btn btn-primary" style="width: 200px; margin-top: 20px">
                        </center>

                    <?php } else { ?>
                        <span style="color: red">Bạn cần đăng nhập để sử dụng tính năng bình luận này</span>
                    <?php } ?>
                </form>
            </div>
        </div>

        <?php
        //    var_dump($_SESSION['user']['id_hoc_vien']);
        if (isset($_POST['send']) && ($_POST['send'])) {
            $noidung = $_POST['message'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id_hoc_vien'];
            $ngaybl = date('h:i:sa d/m/Y');


            insert_binhluan($noidung, $idpro, $iduser, $ngaybl);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>

</body>

</html>