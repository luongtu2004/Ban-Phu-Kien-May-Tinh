<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/cart.php";
include "./views/header.php";
include "global.php";
// include "model/taikhoan.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
// $dstop5 = loadall_sanpham_top5();


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

        // case 'sanphamct':
        //     if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
        //         $product_id = $_GET['idsp'];
        //         $onesp = loadone_sanpham($product_id);
        //         extract($onesp);
        //         $sp_cung_loai = loadone_sanpham_cungloai($product_id, $iddm);
        //         extract($onesp);
        //         include "views/sanphamct.php";
        //     } else {
        //         include "views/home.php";
        //     }
        //     break;
        // case 'dangky':
        //     if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        //         $email = $_POST['email'];
        //         $user = $_POST['user'];
        //         $pass = $_POST['pass'];
        //         insert_taikhoan($email, $user, $pass);
        //         $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện...";
        //     }
        //     include "view/taikhoan/dangky.php";
        //     break;
        // case 'dangnhap':
        //     if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        //         $user = $_POST['user'];
        //         $pass = $_POST['pass'];
        //         $checkuser=checkuser($user,$pass);
        //         if(is_array($checkuser)){
        //             $_SESSION['user']=$checkuser;
        //             // $thongbao = "Bạn đã đăng nhập thành công";
        //             header('Location: index.php');
        //         }else{
        //             $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký !";
        //         }
        //     }
        //     include "view/taikhoan/dangky.php";
        //     break;
        // case 'edit_taikhoan':
        //         if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        //             $user = $_POST['user'];
        //             $pass = $_POST['pass'];
        //             $email = $_POST['email'];
        //             $address = $_POST['address'];
        //             $tel = $_POST['tel'];
        //             $id = $_POST['id'];

        //             update_taikhoan($id,$user,$pass,$email,$address,$tel);
        //             $_SESSION['user']=checkuser($user,$pass);
        //             header('Location: index.php?act=edit_taikhoan');

        //         }
        //         include "view/taikhoan/edit_taikhoan.php";
        //         break;
        // case 'quenmk':
        //     if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
        //         $email = $_POST['email'];
        //         $checkemail=checkemail($email);
        //         if(is_array($checkemail)){
        //             $thongbao="Mật khẩu của bạn là : ".$checkemail['pass'];
        //         }else{
        //             $thongbao="Email này không tồn tại";
        //         }
        //     }
        //     include "view/taikhoan/quenmk.php";
        //     break;
        // case 'thoat':
        //     session_unset();
        //     header('Location: index.php');
        //     break;
        case 'addtocart':
            //add thông tin sp từ cái form add to cart đến session
            if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                $product_id=$_POST['product_id'];
                $name=$_POST['name'];
                $img=$_POST['img'];
                $price=$_POST['price'];
                $soluong=1;
                $ttien=$soluong * $price;
                $spadd=[$product_id,$name,$img,$price,$soluong,$ttien];
                array_push($_SESSION['mycart'],$spadd);
            }
            include "views/cart/viewcart.php";
            break;
        case 'delcart':
            if(isset($_GET['idcart'])){
                array_slice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{
                $_SESSION['mycart']=[];
            }
            header('Location: http://localhost/index.php?act=viewcart');
            break;
        case 'viewcart':
            include "views/cart/viewcart.php";
            break;
        case 'bill':
            include "views/cart/bill.php";
            break;
        case 'billcomfirm':
            if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                $user_name=$_POST['name'];
                $email=$_POST['email'];
                $phone=$_POST['tel'];
                $pttt=$_POST['pttt'];
                $ngaydathang=date('h:i:sa d/m/Y');
                $total_bill=tongdonhang();

                $id_bill=insert_bill($user_name,$email,$phone,$pttt,$total_bill);

                foreach ($_SESSION['mycart'] as $cart) {
                    // array(6) { [0]=> string(1) "4" [1]=> string(81) "Mainboard Asus ROG STRIX Z690-E Gaming wifi ( LGA 1200 - ATX Form Factor - DDR4 )" [2]=> string(12) "sanpham1.png" [3]=> string(7) "9999000" [4]=> int(1) [5]=> int(9999000) }
                    insert_cart($cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$id_bill);
                }

                $_SESSION['cart']=[];

            }
            $bill=loadone_bill($id_bill);
            $billct=loadall_cart($id_bill);
            include "views/cart/billcomfirm.php";
            break;
        // case 'gioithieu':
        //     include "view/gioithieu.php";
        //     break;
        // case 'lienhe':
        //     include "view/lienhe.php";
        //     break;
        // case 'gopy':
        //     include "view/gopy.php";
        //     break;
        // case 'hopdap':
        //     include "view/hoidap.php";
        //     break;
        // default:
        //     include "views/main.php";
        //     break;
    }
} else {
    include './views/main.php';
}
include './views/footer.php';

?>