<?php
// session_start();

// if (isset($_POST['submit'])) {
//     header('location: admin.php');
// }

// if (isset($_POST['submit'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $repassword = $_POST['repassword'];
//     if ($username == 'nhom5' && $password == '123456' && $repassword == '123456') {
//         $_SESSION['username'] = $username;
//         header('location:admin.php');
//     } else {
//         echo " Tài khoản hoặc mật khẩu sai";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {

        display: flex;
        justify-content: center;
        align-items: center;
    }

    h3 {
        text-align: center;
        font-size: 50px;
    }

    input {
        width: 400px;
        height: 50px;
    }

    button {
        background: orange;
        border: 1px solid olivedrab;
        color: olive;
        width: 100%;
        text-transform: uppercase;
        padding: 6px 10px;
        transition: 0.25s ease-in-out;
        margin-top: 30px
    }
    .login_laylai{
        float: right;
    }
    .login_laylai a{
        text-decoration: none;
        color: olive;
        
    }
    .login_laylai a:hover{
        text-decoration: underline;
    }
    .login_qmk a{
        text-decoration: none;
        color: olive;
        
    }
    .login_qmk a:hover{
        text-decoration: underline;
    }
</style>

<body>
    <h3>Đăng nhập</h3>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td><input type="text" name="username" placeholder="Tên đăng nhập"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Mật khẩu"></td>
            </tr> 
            <tr><td>
            <div class="login_laylai">
                <a href="#">Quên Mật Khẩu</a>
            </div>
            <div class="login_qmk">
                <a href="register.php">Đăng Ký</a>
            </div>
            </tr></td>
            <tr>
                <td><button type="submit" name="submit">Login</button></td>
            </tr>
        </table>
    </form>

</body>

</html>