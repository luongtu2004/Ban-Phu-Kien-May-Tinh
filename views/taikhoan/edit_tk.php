<div class="login-ttk">
    <div class="login-ttk1">
        <div class="loginttk2">
            <div class="title-login">CẬP NHẬT TÀI KHOẢN</div>
            <div class="loginttk3">
                <?php 
                if(isset($_SESSION['users'])&&(is_array($_SESSION['users']))){
                    extract($_SESSION['users']);
                }
                ?>
                <form action="/index.php" method="post">
                    <div class="box-ttk">
                        Tên đăng nhập: <br>
                        <input type="text" name="user_name" value="<?=$username?>">
                    </div>
                    <div class="box-ttk">
                        Mật Khẩu <br>
                        <input type="password" name="password" value="<?=$password?>">
                    </div>
                    <div class="box-ttk">
                        Email <br>
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="box-ttk">
                        Address <br>
                        <input type="text" name="address" value="<?=$address?>" >
                    </div>
                    <div class="box-ttk">
                        Phone <br>
                        <input type="number" name="phone" value="<?=$phone?>">
                    </div>
                    <div class="ttk-button">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <a href="/index.php?act=users"> <input type="submit" name="capnhat" value="Cập nhật"></a>
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao ?>
                    </h2>
            </div>

        </div>
    </div>

    <?php include './views/login.php' ?>
</div>