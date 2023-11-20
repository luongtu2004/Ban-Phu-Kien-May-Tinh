<link rel="stylesheet" href="../css/style.css">
<?php
if (isset($_SESSION['users'])) {
    extract($_SESSION['users']);
?>
    <div class="login">
        <div class="title-login">TÀI KHOẢN</div>
        <div class="form-login">
            Xin chào <br>
            <?= $user_name ?> &nbsp;|&nbsp;<a href="../index.php?act=logout">Đăng xuất</a>

            <?php if (isset($role) && $role != 0) { ?>
                <li>
                    <a href="../admin/index.php">Đăng nhập admin</a>
                </li>
            <?php } else { ?>

            <?php } ?>
            <div class="row mb">
                <li>
                    <a href="index.php?act=edit_tk">Cập nhật thông tin tài khoản</a>
                </li>
            </div>
        </div>
    </div>
<?php
} else {
?>
    <div class="login">
        <div class="title-login">TÀI KHOẢN</div>
        <div class="form-login">
            <form action="../index.php" method="post">
                <div class="login-1">
                    Tên đăng nhập <br>
                    <input type="text" name="user_name"><br>
                </div>
                <div class="login-2">
                    Mật khẩu <br>
                    <input type="password" name="password"> <br>
                </div>
                <div class="login-3">
                    <input type="checkbox" name=""> Ghi nhớ tài khoản? <br>
                </div>
                <div class="login-4">
                    <a href="index.php"><input type="submit" name="dangnhap" value="Đăng nhập"><br></a>
                </div>
                <h2 class="login-thongbao">
                    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao ?>
                </h2>
            </form>
            <li>
                <a href="../index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
                <a href="../index.php?act=users">Đăng kí thành viên</a>
            </li>
            <li>
                <a href="/admin/index.php">Đăng Nhập Với Quản Trị</a>
            </li>
        </div>

    </div>
<?php } ?>