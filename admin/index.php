<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/users.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "header.php";
    if (isset($_GET['act']) && !empty($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao ="Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
                case 'listdm':
                    $listdm = loadAll_danhmuc();
                    include "danhmuc/list.php";
                    break;
                case 'xoadm':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        delete_danhmuc($_GET['id']);
                    }
                        $listdm = loadAll_danhmuc();
                        include "danhmuc/list.php";
                        break;
                case 'suadm' :
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                       $dm = loadOne_danhmuc($_GET['id']);
                    }
                    include 'danhmuc/update.php';
                    break;
                case 'updatedm' :
                    if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                        $tenloai = $_POST['tenloai'];
                        $id = $_POST['id'];
                        update_danhmuc($id,$tenloai);
                    }
                        $listdm = loadAll_danhmuc();
                        include "danhmuc/list.php";
                    break;
               
                    // Sản phẩm
                case 'addsp':
                    if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                        $namesp = $_POST['namesp'];
                        $price = $_POST['price'];
                        $img = $_FILES['img']['name'];
                        $mota = $_POST['mota'];
                        $iddm = $_POST['iddm'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir.basename($_FILES["img"]["name"]);
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        insert_sanpham($namesp,$price,$img,$mota,$iddm);
                        $thongbao ="Thêm thành công";
                    }
                    $listdm = loadAll_danhmuc();
                    include "sanpham/add.php";
                    break;
                    
                    case 'listsp':
                        if(isset($_POST['listok'])&& ($_POST['listok'])){
                            $kyw = $_POST['kyw'];
                            $iddm = $_POST['iddm'];
                        }else{
                            $kyw ='';
                            $iddm = 0;
                        }
                        $listdm = loadAll_danhmuc();
                        $listsp = loadAll_sanpham($iddm,$kyw);
                        include "sanpham/list.php";
                        break;
                    case 'xoasp':
                        if(isset($_GET['id']) && ($_GET['id']>0)){
                            delete_sanpham($_GET['id']);
                        }
                        $listsp = loadAll_sanpham();
                        include "sanpham/list.php";
                            break;
                    case 'suasp' :
                        if(isset($_GET['id']) && ($_GET['id']>0)){
                           $sp = loadOne_sanpham($_GET['id']);
                        }
                        $listdm = loadAll_danhmuc();
                        include 'sanpham/update.php';
                        break;
                    case 'updatesp' :
                        if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                        $id = $_POST['idsp'];
                        $namesp = $_POST['namesp'];
                        $price = $_POST['price'];
                        $img = $_FILES['img']['name'];
                        $mota = $_POST['mota'];
                        $iddm = $_POST['iddm'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir.basename($_FILES["img"]["name"]);
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        update_sanpham($id,$namesp,$price,$img,$mota,$iddm); 
                        $listsp = loadAll_sanpham();
                        }
                            $listdm = loadAll_danhmuc();
                            include "sanpham/list.php";
                        break;
                        
                        // users
                    case 'dskh':
                            $listtk = loadAll_tk();
                            include "taikhoan/listkh.php";
                                break;
                    case 'suatk':
                        if(isset($_GET['id']) && ($_GET['id']>0)){
                            $tk = loadOne_tk($_GET['id']);
                         }
                         include "taikhoan/update.php";
                        break;
                    case 'updatekh':
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                            $user_name = $_POST['user_name'];
                            $password = $_POST['password'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $phone = $_POST['phone'];
                            $id = $_POST['id'];
                            update_users($id, $user_name, $password, $email, $address, $phone);
                            $thongbao = "cập nhật thành công";
                            $tk = loadAll_tk();
                      }
                            include "taikhoan/update.php";
                            break;
                    case 'xoatk':
                        if(isset($_GET['id']) && ($_GET['id']>0)){
                               delete_tk($_GET['id']);
                            }
                            $listtk = loadAll_tk();
                            include "taikhoan/listkh.php";
                        break;
                        // bình luận
                    case 'dsbl':
                        $listbl = loadAll_bl();
                        include "binhluan/list.php";
                        break;
                    case 'xoabl':
                            if(isset($_GET['id']) && ($_GET['id']>0)){
                                   delete_bl($_GET['id']);
                                }
                                $listbl = loadAll_bl();
                                include "binhluan/list.php";
                            break;
                    case 'thongke':
                        $dsthongke =load_thongke_sanpham_danhmuc();
                        include "thongke/list.php";
                            break;
                    case 'bieudo':
                        $dsthongke =load_thongke_sanpham_danhmuc();
                        include "thongke/bieudo.php";
                            break;
                default:
                include "home.php";
                    break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>