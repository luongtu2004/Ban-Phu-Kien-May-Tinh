<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/users.php";
include "../model/binhluan.php";
include "../model/brand.php";
include "../model/cart.php";
include "header.php";
session_start();

if(!isset($_SESSION['users']) || $_SESSION['users']['role'] != 1){
    header('Location: http://localhost/index.php');
}

if (isset($_GET['act'])) {
    $act  = $_GET['act'];

    switch ($act) {
        case 'adddm':
            // Kiếm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoa_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);

            }
            include "danhmuc/updete.php";
            break;


        case 'updetedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $danhmuc_id = $_POST['danhmuc_id'];
                update_danhmuc($tenloai, $danhmuc_id);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;


            // controler  sản phẩm
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'addsp':
            // Kiếm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $brand_id=1;
                $hinh = $_FILES['hinhsp']['name'];
                $targer_dir = "../upload/";
                $target_file = $targer_dir . basename($_FILES["hinhsp"]["name"]);

                if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm,$brand_id);
                $thongbao = "Thêm thành công";
            }
            $listbrand=loadall_brand();
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;


        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoa_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/updete.php";
            break;

        case 'updetesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinhsp']['name'];
                // var_dump($_FILES);die;
                $targer_dir = "../upload/";
                $target_file = $targer_dir . basename($_FILES["hinhsp"]["name"]);
                // echo $target_file;die;
                if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'dskh':
            $listtaikhoan = loadAll_tk();
            include "taikhoan/list.php";
            break;
        case 'dsbl':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoa_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'thongke':
            $listbill = loadall_thongke();
            include "thongke/list.php";
            break;




        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";
