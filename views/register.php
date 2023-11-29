<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='dangky.css'>
    <title>Đăng ký thành viên</title>
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
    <h3>Đăng ký</h3>
    <form action="admin.php" method="POST">
        <table>
            <tr>
                <td><input type="text" name="username" placeholder="Tên đăng nhập"></td>
            </tr>
            <tr>
                <td><input type="text" name="sdt" placeholder="Số Điện Thoại"></td>
            </tr>
            <tr>
                <td><input type="email" name="email" placeholder="email"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Mật khẩu"></td>
            </tr>
            <tr>
                <td><input type="password" name="repassword" placeholder="Nhập lại mật khẩu"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit" href="admin.php">Tiếp tục</button>

                </td>
            </tr>
        </table>
    </form>
</body>

</html>