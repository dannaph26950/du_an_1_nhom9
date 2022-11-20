<?php 
require "connect.php";
$id=$_GET["id"];
$sql="DELETE from khoa_hoc WHERE id_khoa_hoc='$id'";
$conn->exec($sql);
echo "<script>window.location.href='index.php'</script>";

?>