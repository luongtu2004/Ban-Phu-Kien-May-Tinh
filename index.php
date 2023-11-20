<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phụ Kiện LapTop</title>
</head>

<body>
    <?php
    session_start();
    ob_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/cart.php";
    include "model/users.php";
    include "views/header.php";
    include "global.php";

    if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    $dstop5 = loadall_sanpham_top5();


    if (isset($_GET['act']) && $_GET['act'] != '') {
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                // if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                if (!empty($_POST['kyw'])) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }
                $dssp = loadall_sanpham($kyw, $iddm);
                $tendm = load_ten_dm($iddm);
                include './views/sanpham.php';
                break;

            case 'sanphamct':
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = loadone_sanpham_cungloai($product_id, $iddm);
                    extract($onesp);
                    include "../Ban-Phu-Kien-May-Tinh/views/spct.php";
                } else {
                    include "../Ban-Phu-Kien-May-Tinh/views/header.php";
                }
                break;
            case 'users':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $user_name = $_POST['user_name'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    insert_users($user_name, $password, $email, $address, $phone);
                    $thongbao = "Đăng ký tài khoản thành công";
                }
                include "./views/taikhoan/users.php";
                break;
            case 'dangnhap':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $user_name = $_POST['user_name'];
                    $password = $_POST['password'];
                    $check_user = check_user($user_name, $password);
                    if (is_array($check_user)) {
                        $_SESSION['users'] = $check_user;
                        header("location:index.php");
                    } else {
                        $thongbao = "tên tài khoản hoặc mật khẩu không đúng";
                    }
                }
                include "./views/header.php";
                break;
            case 'edit_tk':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $user_name = $_POST['user_name'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $id = $_POST['id'];
                    update_users($id, $user_name, $password, $email, $address, $phone);
                    $_SESSION['users'] = check_user($user_name, $password);
                    $thongbao = "cập nhật thành công";
                }
                include "./views/taikhoan/edit_tk.php";
                break;
            case 'quenmk':
                if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                    $email = $_POST['email'];
                    $check_email = check_email($email);
                    if (is_array($check_email)) {
                        $thongbao = "Mật khẩu của bạn là" . $check_email['password'];
                    } else {
                        $thongbao = "Email không tồn tại";
                    }
                }
                include "./view/taikhoan/quenmk.php";
                break;
            case 'addtocart':
                //add thông tin sp từ cái form add to cart đến session
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                    $product_id = $_POST['product_id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $ttien = $soluong * $price;
                    $spadd = [$product_id, $name, $img, $price, $soluong, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                }
                include "./views/cart/viewcart.php";
                break;
            case 'delcart':
                if (isset($_GET['idcart'])) {
                    array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
                } else {
                    $_SESSION['mycart'] = [];
                }
                header('Location: http://localhost/index.php?act=viewcart');
                break;
            case 'viewcart':
                include "./views/cart/viewcart.php";
                break;
            case 'bill':
                include "./views/cart/bill.php";
                break;
            case 'billcomfirm':
            if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $pttt=$_POST['pttt'];
                $ngaydathang=date('h:i:sa d/m/Y');
                $tongdonhang=tongdonhang();

                $idbill=insert_bill($name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                }

                $_SESSION['cart']=[];

            }
            $bill=loadone_bill($idbill);
            $billct=loadall_cart($idbill);
            include "views/cart/billcomfirm.php";
            break;
                $bill = loadone_bill($id_bill);
                $billct = loadall_cart($id_bill);
                include "./views/cart/billcomfirm.php";
                break;
                case 'gioithieu':
                    include "./views/gioithieu.php";
                    break;
                case 'lienhe':
                    include "./views/lienhe.php";
                    break;
                default:
                    include "./views/main.php";
                    break;
        }
    } else {
        include './views/main.php';
    }
    include './views/footer.php';

    ?>
</body>

</html>