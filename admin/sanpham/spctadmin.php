<?php
$_SESSION['trang_chi_tiet_gio_hang'] = "co";
$link_anh = $img_path . $sanpham['img'];

echo "<table>";
echo "<tr>";
echo "<td width='300px' align='left' >";
echo "<img src='$link_anh' width='220px' >";
echo "</td>";
echo "<td valign='top' >";
echo "<div>";
echo "<a href='#'>";
echo $sanpham['name'];
echo "</a>";
echo "</div>";
echo "<br>";
echo "<br>";
$price = $sanpham['price'];
$price = number_format($price, 0, ",", ".");
echo $price;
echo " đ";
echo "<br>";
echo "<br>";
?>
<form action="index.php?act=addtocart" method="post">
	<input type="hidden" name="product_id" value="<?php echo $sanpham['product_id'] ?>">
	<input type="hidden" name="name" value="<?php echo $sanpham['name'] ?>">
	<input type="hidden" name="img" value="<?php echo $sanpham['img'] ?>">
	<input type='number' name='so_luong' value='1' style='width:50px' min="0">
	<input type="hidden" name="price" value="<?php echo $sanpham['price'] ?>">
	<input type="submit" name="addtocart" value="Thêm vào giỏ hàng">

</form>
<?php
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='2' >";
echo "<br>";
echo "<br>";
echo "<div >";

echo "<h1>Giới thiệu sản phẩm</h1>";
echo "</div>";
echo $sanpham['mota'];
echo "</td>";
echo "</tr>";
echo "<tr>";

// 	echo "<td colspan='3' >";
// 		echo "<br>";
// 		echo "<br>";
// 		echo"<div >";

// 		echo "<b>Giới thiệu sản phẩm</b>";
// 		echo"</div>";
// 		echo $sanpham['noidung'];
// 	echo "</td>";
// echo "</tr>";
echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>

        td {
            vertical-align: top;
        }
		h1{
			color: orange;
			font-size: 20px;
		}
        img {
            max-width: 100%;
            height: auto;
        }

        .product-info {
            padding: 20px;
        }

        .product-info a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .price {
            font-size: 1.2em;
            color: #e44d26;
        }

        form {
            margin-top: 10px;
        }

        form input[type='number'] {
            width: 50px;
			height: 23px;
			color: black;
        }

        form input[type='submit'] {
            background-color: #e44d26;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .product-description {
            padding: 20px;
        }

        .comments {
            margin-top: 20px;
        }

        table.comment-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .comment-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .boxtitle {
            background-color: black;
            color: #fff;
            padding: 10px;
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }


        .box-search {
            margin-top: 10px;
        }

        .box-search input[type='text'] {
            width: 70%;
            padding: 5px;
        }

        .box-search input[type='submit'] {
            background-color: #e44d26;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .thongbao {
            color: #fff;
            font-weight: bold;
			height: auto;
        }
		
    </style>
</head>

<body>
	<?php
	if (isset($_SESSION['users']['id'])) {
	?>
		<div class="boxtitle">BÌNH LUẬN</div>
		<div class="row-admin">
			<div class="container-admin">
				<table>
					<?php foreach ($binhluan as $value) : ?>
						<?php extract($value) ?>
						<tr>
							<td><?= $user_name ?></td>
							<td><?= $content ?></td>
							<td><?= $date ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
			<div class="search-admin">
				<form action="" method="post">
					<input type="hidden" name="idpro" value="<?= $id ?>">
					<input type="text" name="binhluan" placeholder="Viết bình luận">
					<input type="submit" name="submit" value="Gửi bình luận">
				</form>
			</div>
		</div>
	<?php } else { ?>
		<div class="boxtitle">BÌNH LUẬN</div>
		<div class="bl-admin">
			<?php
			$thongbao = "Đăng nhập để bình luận";
			?>
			<div class="thongbao"><?= $thongbao ?></div>
		</div>
	<?php
	} ?>
</body>

</html>