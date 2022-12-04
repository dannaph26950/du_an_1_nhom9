<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/assets/css/profile.css">
</head>
<body>
<div class="khung">

    <div class="phai">


        <h3 style="margin-left: 100px">Quên Mật Khẩu</h3>
        <form action="index.php?act=quen_mk" method="post">
            <div style="margin-left: 100px">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email của bạn: </label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tài khoản của bạn:  </label>
                    <input type="text" name="tai_khoan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <input type="submit" value="Gửi" name="quen_mk" class="btn btn-primary" style="width: 200px; margin: 0px 0px"   >
            </div>
        </form>
        <h5 class="text-danger">
            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </h5>

    </div>
</div>
</body>
</html>
