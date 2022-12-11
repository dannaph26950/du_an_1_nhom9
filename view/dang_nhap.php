<?php
//var_dump($_SESSION['user']);
//$link = $_SERVER['HTTP_REFERER'];
//echo $link;
//die();
//if($link == "http://localhost/du_an_1_nhom9/view/index.php?act=add_lop") {
//    echo "<script>function back_trang_truoc(){history.back();}</script>";
//}

?>
<center><h1 style="margin-top: 30px">Đăng nhập</h1></center>
<form method="post" action="index.php?act=dang_nhap" style="margin: 0px 400px;">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tài khoản: </label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tai_khoan">
        <p style="color: red"><?php echo isset($error_dk["tai_khoan1"]) ? $error_dk["tai_khoan1"] : ""; ?></p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mat_khau">
        <p style="color: red"><?php echo isset($error_dk["mat_khau"]) ? $error_dk["mat_khau"] : ""; ?></p>
    </div>

    <div style="display: flex; align-items:center; margin-left: 300px ; ">
            <input type="submit" value="Đăng Nhập " name="dang_nhap" class="btn btn-primary " style="width: 200px; margin-right: 20px;" onclick="back_trang_truoc()" id="submit-form"   >
        <a href="index.php?act=quen_mk" >Quên mật khẩu</a>
    </div>
    <div style="margin-top: 300px; background-color: white"></div>
</form>
<!--<label for="submit-form" tabindex="0">Submit</label>-->
<?php
////if(isset($_SESSION['user'])){
////    if($link == "http://localhost/du_an_1_nhom9/view/index.php?act=add_lop"){
////        ?>
<!--        <input onclick="back_trang_truoc()" type="submit" value="test" >-->
<?php
//    }
//}
//    ?>


