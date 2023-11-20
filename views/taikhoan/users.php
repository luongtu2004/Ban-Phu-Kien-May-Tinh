<style>
    .login-1 {
        text-align: left;
    }

    .login-2 {
        margin-top: 10px;
    }

    .title-login {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .login-users {
        margin-top: 10px;
    }

    .users-1 {
        margin-bottom: 15px;
    }

    .users-1 input {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        margin-top: 5px;
    }

    .users-button {
        display: flex;
        justify-content: space-between;
    }

    .users-button input[type="submit"],
    .users-button input[type="reset"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .users-button input[type="submit"]:hover,
    .users-button input[type="reset"]:hover {
        background-color: #45a049;
    }

    /* Styles for the error message */
    .thongbao {
        color: red;
        margin-top: 10px;
    }
</style>

<div class="login">
    <div class="login-1">
        <div class="login-2">
            <div class="title-login">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="login-users">
                <form action="../index.php?act=users" method="post">
                    <div class="users-1">
                        Tên đăng nhập: <br>
                        <input type="text" name="user_name">
                    </div>
                    <div class="users-1">
                        Mật Khẩu <br>
                        <input type="password" name="password">
                    </div>
                    <div class="users-1">
                        Email <br>
                        <input type="email" name="email">
                    </div>
                    <div class="users-1">
                        Address <br>
                        <input type="text" name="address">
                    </div>
                    <div class="users-1">
                        Phone <br>
                        <input type="number" name="phone">
                    </div>
                    <div class="users-button">
                        <a href="../index.php?act=users"> <input type="submit" name="dangky" value="Đăng Ký"></a>
                        <input type="reset" value="Nhập lại">

                    </div>
                    <h2 class="thongbao">
                    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao ?>
                    </h2>
                </form>
            </div>

        </div>
    </div>
</div>