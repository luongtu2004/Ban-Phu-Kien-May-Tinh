<div class="row mb">
    <div class="boxleft mr">
        <div class="row mb">
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row formtl">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb1">
                        Email <br>
                        <input type="email" name="email">
                    </div>
                    <div class="row mb">
                        <input type="submit" name="quenmk" value="Quên mật khẩu"></a>
                        <input type="reset" value="Nhập lại">
                    </div>
                    <h2 class="thongbao">
                    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao ?>
                    </h2>
                </form>
            </div>

        </div>
    </div>
    <?php include 'view/boxright.php'?>
</div>