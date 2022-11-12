<?php 

if(isset($_GET['san-pham'])){
$VIEW_NAME='san-pham.php';

}elseif(isset($_GET['gio-hang'])){
    $VIEW_NAME='gio-hang.php';
}else{
    $VIEW_NAME='home.php';
}

include_once "./layout.php";



?>