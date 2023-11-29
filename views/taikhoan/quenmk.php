<div class="forgot-password">
    <div class="forgot-password-form">
        <div class=""><h2>QUÊN MẬT KHẨU</h2></div>
        <br>
        <div class="form-header">
            <form action="index.php?act=quenmk" method="post">
                <div class="form-group2">
                    Email
                    <input type="email" name="email">
                </div>
                <br>
                <div class="form-group">
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