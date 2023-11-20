<style>
    .container ul {
        text-decoration: none;
    }

    table td {
        padding: 0px 20px;
    }

    .box-search {
        background-color: #eee;
        padding: 10px 5px;
        width: 100%;
        text-align: center;
    }

    .box-search input[type="text"] {
        width: 70%;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px 10px;
    }

    .box-search input[type="submit"] {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px 10px;
        background-color: blueviolet;
        color: white;
        font-weight: bold;
    }

    .thongbao {
        color: red;
        font-weight: bold;
    }

    .row1 {
        border-top: none;
        border-bottom: 1px solid #ccc;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-radius: 0px 0px 5px 5px;
        padding: 5px 10px;
    }
</style>
<div class="row mb">
    <div class="boxleft mr">
        <div class="boxtitle"><?= $namesp ?></div>
        <div class="row1 mb">
            <?php
            extract($loadOne)
            ?>
            <div class="container">
                <?php
                $hinh = $upimg . $img;
                echo '<div class="row spct mt mb"><img src="' . $hinh . '""></div>';
                ?>

                <ul>
                    <li>Mã Hàng hóa: <?= $id ?></li>
                    <li>Tên Hàng hóa: <?= $namesp ?></li>
                    <li>Giá sản phẩm: <?= $price ?></li>
                    <li>lượt xem: <?= $view ?></li>
                </ul>
            </div>
            <h3>Mô tả :</h3> <?= $mota ?>
        </div>
        <?php
        if (isset($_SESSION['users']['id'])) {
        ?>
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="row1 mb">
                <div class="container">
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
                <div class="box-search mt">
                    <form action="" method="post">
                        <input type="hidden" name="idpro" value="<?= $id ?>">
                        <input type="text" name="content" placeholder="Viết bình luận">
                        <input type="submit" name="submit" value="Gửi bình luận">
                    </form>
                </div>
            </div>
        <?php } else { ?>
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="row1 mb">
                <?php
                $thongbao = "Đăng nhập để bình luận";
                ?>
                <div class="thongbao"><?= $thongbao ?></div>
            </div>
        <?php } ?>

        <div class="boxtitle mb">SẢN PHẨM CÙNG LOẠI</div>
        <div class="row mb">
            <div class="row">
                <?php foreach ($spcl as $spcl) : ?>
                    <?php extract($spcl) ?>
                    <?php
                    $anh = $upimg . $img;
                    ?>
                    <div class="boxsp mr ">
                        <div class="img row">
                            <a href="index.php?act=spct&idsp=<?= $id ?>"><img src="<?= $anh ?>" alt=""></a>
                        </div>
                        <div class="row text">
                            <a href="index.php?act=spct&idsp=<?= $id ?>"><?= $namesp ?></a>
                            <p><?= $price ?></p>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>


    </div>
    <?php include './views/main.php' ?>
</div>