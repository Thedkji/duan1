<?php
session_start();
if (!isset($_SESSION['giohang']))
   $_SESSION['giohang'] = [];
ob_start();
include_once "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/donhang.php";
include "view/index/header.php";
include "golbal.php";




$dstop10 = loadall_sanpham_top10();
$sptopct = loadall_sanpham_topchitiet();
$topsale = loadall_sanpham_topsale();
$spnew = loadall_sanpham_home();
$hangmoi = loadall_sanpham_hangmoi();
$hangmoict = loadall_sanpham_hangmoict();

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
            $tel = $_POST['tel'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            insert_taikhoan($email, $tel, $user, $pass, 0);
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
         if (isset($_POST['capnhat']) && $_POST['capnhat']) {
            $id_user = $_POST['id_user'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $diachi = $_POST['diachi'];
            update_taikhoan($id_user, $email, $tel, $user, $pass, $diachi);
            $_SESSION['user'] = checkuser($user, $pass);
            $thongbao = "Cập nhật thông tin thành công";
         }
         include "view/taikhoan/thongtin.php";
         break;

      case 'quenmatkhau':
         if (isset($_POST['timmatkhau']) && $_POST['timmatkhau']) {
            $email = $_POST['email'];
            $check_email = check_email($email);
            if (is_array($check_email)) {
               $thongbao = "Mật khẩu của bạn là :" . $check_email['pass'];
            } else {
               $thongbao = "Ko tìm thấy mật khẩu vui lòng kiểm tra lại email";
            }
         }
         include "view/taikhoan/quenmatkhau.php";
         break;

      case "add_giohang":
         $tongtien="";
         if (isset($_POST['add_giohang']) && $_POST['add_giohang']) {
           
            $img = $_POST['img'];
            $id_sanpham = $_POST['id_sanpham'];
            $ten_sp = $_POST['ten_sp'];
            $gia_sp = $_POST['gia_sp'];
            $giacu = $_POST['giacu'];
            if(isset($_POST['sl']) &&($_POST['sl'])>0){
               $soluong = $_POST['sl'];
            }else{
               $soluong = 1;
            }
            $fg = 0;
            //kiểm tra sản phẩm xem có tồn tại trong giỏ hàng ko nếu có cập nhật lại số lượng
            $i = 0;
            foreach ($_SESSION['giohang'] as $item) {
               if ($item[2] == $ten_sp) {
                  $slnew = $soluong + $item[5];
                  $_SESSION['giohang'][$i][5] = $slnew;
                  $fg = 1;
                  break;
               }
               $i++;
            }
            //Khởi tạo 1 mảng con trc khi đưa vào giỏ
            if ($fg == 0) {
               $item = array($id_sanpham, $img, $ten_sp, $gia_sp, $giacu, $soluong);
               $_SESSION['giohang'][] = $item;
            }
            // unset($_SESSION['giohang']);
            
         }
         include "view/giohang/view_giohang.php";
         break;

      case 'xoa_giohang':
         if(isset($_GET['i'])&& $_GET['i']>=0){
            if(isset($_SESSION['giohang'])&& (count($_SESSION['giohang'])>=0))
            array_splice($_SESSION['giohang'],$_GET['i'],1) ;//thứ tự : mảng , vị trí xóa , số lượng xóa
         }else{
            if (isset($_SESSION['giohang'])) {
               unset($_SESSION['giohang']);
            }
         }
        
         if(isset($_SESSION['giohang'])&& (count($_SESSION['giohang'])>=0)){
            header('location:index.php?act=add_giohang');
         }else {
            header('location:index.php');
         }
      
         # code...
         break;
      
      case 'thanhtoan':
         if(isset($_POST['btn-thanhtoan'])&&($_POST['btn-thanhtoan'])){
            //lấy dữ liệu thanh toán
            $tongtien=$_POST['tongtien'];
            $diachi=$_POST['diachi'];
            $tel=$_POST['tel'];
            $email=$_POST['email'];
            $phuongthuc_tt=$_POST['phuongthuc_tt'];
            $madh="MQP".rand(0,9999);
            //tạo đơn hàng và trả về 1 id đơn hàng
            // $item = array($id_sanpham, $img, $ten_sp, $gia_sp, $giacu, $soluong);
            $iddh=taodonhang($tongtien,$diachi,$tel,$email,$phuongthuc_tt,$madh);
            if(isset($_SESSION['giohang'])&& (count($_SESSION['giohang'])>=0)){
              foreach ($_SESSION['giohang'] as $item) { 
                  addtocart($iddh,$item[0],$item[1],$item[2],$item[3],$item[5]);
              } 
              unset($_SESSION['giohang']);
              header("location:index.php?act=add_giohang");
            }
            
         }
         include "view/thanhtoan/thanhtoan.php";
         break;
   }


} else {
   include "view/index/home.php";
}

include "view/index/footer.php";

