<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="main-chinh">
        <div class="main-phu">
            <div class="gioKhuyenMai1">
                <h3> Giờ vàng deal sốc</h3>
                <span>Kết thúc trong </span>
            </div>
            <div class="main-right">
                <div class="main-title">
                    <h3>Danh Mục</h3>
                </div>
                <div class="main-danhmuc">
                    <div class="main-content">
                        <ul>
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm = "index.php?act=sanpham&iddm=" . $danhmuc_id;
                                echo '<li><a href="' . $linkdm . '">' . $name_danhmuc . '</a></li>';
                            }
                            ?>
                        </ul>
                        <div class="main-searchdm">
                            <input type="text" placeholder="Nhập Từ Khóa Tìm KIếm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-row">
                <?php
                $i = 0;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $product_id;
                    $hinh = $img_path . $img;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '<div class="boxsanpham ' . $mr . '">
                            <div class=" row img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                            <p>' . $price . '</p>
                            <p>' . $mota . '</p>
                            <a href="' . $linksp . '">' . $name . '</a>
                            <div class= "row btnaddtocart">
                            <form action= "index.php?act=addtocart" method= "post">
                                <input type="hidden" name="product_id" value="' . $product_id . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="img" value="' . $img . '">
                                <input type="hidden" name="mota" value="' . $mota . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>
                            </div>
                        </div>';
                    $i += 1;
                }
                ?>
            </div>
        </div>
        <div class="main-line"></div>
    </div>
</body>

</html>