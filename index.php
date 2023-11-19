<!-- <?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?>  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="giao_dien.css">
</head>
<body>
<div class="nhungdanhmuc">
	<div class="tendanhmuc">Danh mục sản phẩm </div>
	<div class="noidung" style="text-align:left;">
    <?php include("chuc_nang/menu_doc/menu_doc.php"); ?>
	</div>
</div> 
<div>
	<?php include("chuc_nang/san_pham/xuat.php"); ?>                         	
 <?php 
    include("chuc_nang/dieu_huong.php");
?>	
                                   
</div>
                						
</body>
</html>