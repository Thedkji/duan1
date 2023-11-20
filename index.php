<?php
session_start();
ob_start();
include_once "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "view/index/header.php";
include "golbal.php";




$dstop10=loadall_sanpham_top10();
$sptopct=loadall_sanpham_topchitiet();
$topsale=loadall_sanpham_topsale();
$spnew=loadall_sanpham_home();
$hangmoi=loadall_sanpham_hangmoi();
$hangmoict=loadall_sanpham_hangmoict();

if (isset($_GET['act']) && $_GET['act'] != "") {
   $act = $_GET['act'];
   switch ($act) {

      case 'sanpham':
         $listsanpham = load_all_sp();
         $listdanhmuc = load_all_dm();
         $sp_banchay = load_all_sp_banchay();
         if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
            $listsanpham = load_all_sp_danhmuc($_GET['iddm']);
         }
         include 'view/sanpham/sanpham.php';
         break;


      case 'chitietsanpham':
         if ($_GET['idsp'] > 0 && isset($_GET['idsp'])) {
            $idsp = $_GET['idsp'];
            $listsanpham = load_onesp($idsp);
            extract($listsanpham);
         }
         if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
            $load_one_dm = load_one_dm($_GET['iddm']);
            extract($load_one_dm);
         }
         include 'view/chitietsanpham/chitietsanpham.php';
         break;
      case "dangky":
         if (isset($_POST['dangky']) && ($_POST['dangky'])) {
            $email = $_POST['email'];
            $tel =   $_POST['tel'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            insert_taikhoan($email,$tel, $user,$pass,0);
            $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";
         }

         include "view/taikhoan/dangky.php";
         break;
      case 'dangnhap':
         if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $checkuser = checkuser($user, $pass);
            if (is_array($checkuser)) {
               $_SESSION['user'] = $checkuser;
               //  $thongbao=" Bạn đã đăng nhập thành công!";
               header('Location: index.php');
            } else {
               $thongbao = "Tài khoản không tồn tại.Vui lòng kiểm tra hoặc đăng ký!";
            }
         }

         include "view/taikhoan/dangnhap.php";
         break;

         case 'dangxuat':
            unset($_SESSION['user']);
            header("location:index.php");
            break;

         case 'thongtincuatoi':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
               $id_user=$_POST['id_user'];
               $email = $_POST['email'];
               $tel =   $_POST['tel'];
               $user = $_POST['user'];
               $pass = $_POST['pass'];
               $diachi = $_POST['diachi'];
               update_taikhoan($id_user,$email,$tel, $user,$pass,$diachi);
               $_SESSION['user'] = checkuser($user, $pass);
               $thongbao = "Cập nhật thông tin thành công"; 
            }
            include "view/taikhoan/thongtin.php";
         break;

         case 'quenmatkhau':
            if(isset($_POST['timmatkhau']) && $_POST['timmatkhau']){
               $email = $_POST['email'];
               $check_email=check_email($email);
               if(is_array($check_email)){
                  $thongbao = "Mật khẩu của bạn là :".$check_email['pass'];
               }else{
                  $thongbao = "Ko tìm thấy mật khẩu vui lòng kiểm tra lại email";
               }
            }
            include "view/taikhoan/quenmatkhau.php";
            break;
   }


} else {
   include "view/index/home.php";
}

include "view/index/footer.php";

