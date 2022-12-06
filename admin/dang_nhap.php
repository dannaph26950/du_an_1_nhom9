<center><h1 style="margin-top: 30px">Đăng nhập</h1></center>
<form method="post" action="index.php?act=dang_nhap" style="margin: 0px 400px;">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tài khoản: </label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tai_khoan">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mat_khau">
    </div>

    <div style="display: flex; align-items:center; margin-left: 300px ; ">
        <input type="submit" value="Đăng Nhập" name="dang_nhap" class="btn btn-primary" style="width: 200px; margin-right: 20px;" >
        <a href="index.php?act=quen_matkhau" >Quên mật khẩu</a>
    </div>
    <div style="margin-top: 300px; background-color: white"></div>


    <?php
    if (isset($thongbao) && ($thongbao != '')){
        echo $thongbao;
    }
    ?>
</form>
