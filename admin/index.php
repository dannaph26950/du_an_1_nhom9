<?php 
if(isset($_GET['loai-khoa-hoc'])){
    $VIEW_NAME='loaikhoahoc.php';
}

elseif(isset($_GET['khoa-hoc'])){
    $VIEW_NAME='khoahoc.php';
}
elseif(isset($_GET['khac-hang'])){
    $VIEW_NAME='khachhang.php';
}
elseif(isset($_GET['binh-luan'])){
    $VIEW_NAME='binhluan.php';
}
elseif(isset($_GET['thong-ke'])){
    $VIEW_NAME='thongke.php';
}else{
   $VIEW_NAME="trangchu.php" ;
}

include_once "./layout.php";

?>