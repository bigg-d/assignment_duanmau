<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/binhluan.php";

include "view/header.php";

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];
$spnew = loadall_sanpham_home();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'shop':
            if (isset($_GET['iddm']) && $_GET['iddm']) {
                $iddm = $_GET['iddm'];
            } else {
                // $listsanpham = loadall_sanpham("", 0);
                $iddm = "";
            }
            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }


            $listsanpham = loadall_sanpham($kyw, $iddm);

            $listdanhmuc = loadall_danhmuc();
            include "view/shop.php";
            break;
        case 'detailProduct':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $sanpham = loadone_sanpham($id);
                extract($sanpham);
                $splienquan = loadall_sanpham_related($category_id, $id);
                $dsbl = loadall_binhluan($id);

            }
            include "view/detailProduct.php";
            break;

        case 'register':
            if (isset($_POST['submit']) && $_POST['submit']) {
                $name = $_POST['name'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                    
                if(strlen($password) >= 6){
                    insert_taikhoan($name, $email, $password);
                    $thongbao = "ĐĂNG KÍ THÀNH CÔNG";
                } else{
                    $thongbao = "Mật khẩu tối thiểu 6 kí tự";
                }
            }
            include "view/taikhoan/register.php";
            break;
        case 'login':
            if (isset($_POST['submit']) && $_POST['submit']) {
                $password = $_POST['password'];
                $email = $_POST['email'];
                $checkuser = checkuser($email, $password);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                } else {
                    $thongbao = "tai khoan khong ton tai";
                }
            }
            include "view/login.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['submit']) && $_POST['submit']) {
                $id = $_POST['id'];
                $user = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];

                update_user($id, $user, $password, $email, $address, $phone);
                unset($_SESSION['user']);

                header('location: index.php?act=login');
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'logout':
            unset($_SESSION['user']);
            // setcookie('remember', null, -1);

            include "view/login.php";
            break;

        case 'quenmk':
            if (isset($_POST['quenmk']) && $_POST['quenmk']) {
                $email = $_POST['email'];


                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = 'Mật khẩu của bạn là: ' . $checkemail["password"];
                } else {
                    $thongbao = "Email không tồn tại";
                }

            }
            include "view/taikhoan/quenmatkhau.php";
            break;
        case 'binhluan':
            if ((isset($_POST['guibinhluan'])) && ($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date('d/m/Y');

                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header("location: index.php?act=detailProduct&id='$idpro'");
            }
            // include "view/detailProduct.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * intval($price);
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);

            }
            include 'view/cart/cart.php';
            break;
        case 'deletecart':
            if (isset($_GET['idcart'])) {
                echo 'tttttt';
                unset($_SESSION['mycart'][$_GET['idcart']]);
            }else{
                $_SESSION['mycart'] = [];
            }
            header("Location:index.php?act=cart");
            break;
        case 'cart':
            include "view/cart/cart.php";
            break;

        default:
            include "view/home.php";
            break;
    }

} else {
    include "view/home.php";
}

include "view/footer.php";
?>