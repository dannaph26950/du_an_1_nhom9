<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan1_nhom9", $username, $password);
// thiết lập lỗi PDO thành ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Kết nối thành công!";
    }
    catch(PDOException $e)
    {
        echo "Kết nối thất bại :  " . $e->getMessage();
    }
?>