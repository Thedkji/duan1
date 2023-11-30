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
$_SESSION['donhang']= load_all_donhang();
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
         if (isset($_POST['add_giohang']) && $_POST['add_giohang']) {
            $id_sanpham = $_POST['id_sanpham'];
            $img = $_POST['img'];
            $ten_sp = $_POST['ten_sp'];
            $gia_sp = $_POST['gia_sp'];
            $giacu = $_POST['giacu'];

            $soluong = 1; // Số lượng mặc định khi thêm vào giỏ hàng
            $thanhtien = $soluong * $gia_sp;
            $sp_add = [$id_sanpham, $img, $ten_sp, $gia_sp, $giacu, $soluong, $thanhtien];

            if (isset($_POST['sl']) && ($_POST['sl']) > 0) {
               $soluong = $_POST['sl'];
            }

            $found = false; // Biến kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
            foreach ($_SESSION['giohang'] as &$item) {
               if ($item[2] == $ten_sp) { // Kiểm tra tên sản phẩm
                  $soluong += $item[5]; // Tăng số lượng của sản phẩm đã có trong giỏ hàng
                  $thanhtien = $soluong * $gia_sp; // Tính lại tổng tiền dựa trên số lượng mới
                  $item[5] = $soluong; // Cập nhật số lượng mới vào giỏ hàng
                  $item[6] = $thanhtien; // Cập nhật tổng tiền mới
                  $found = true; // Đã tìm thấy sản phẩm trong giỏ hàng
                  break;
               }
            }

            if (!$found) { // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới vào
               $sp_add[5] = $soluong; // Cập nhật số lượng cho sản phẩm mới
               $sp_add[6] = $soluong * $gia_sp; // Cập nhật tổng tiền cho sản phẩm mới
               $_SESSION['giohang'][] = $sp_add; // Thêm sản phẩm mới vào giỏ hàng
            }
         }
         include "view/giohang/view_giohang.php";
         break;




      case 'xoa_giohang':
         if (isset($_GET['id_cart'])) {
            array_splice($_SESSION['giohang'], $_GET['id_cart'], 1); //vị trí đầu là mảng , vị trí 2 vị trí cần xóa , vị trí 3 xóa mấy phần tử
         } else {
            $_SESSION['giohang'] = [];
         }
         header('location:index.php?act=add_giohang');
         break;

      

         case 'thanhtoan':
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
               $id_sanpham=$_POST['id_sanpham'];
               $hoten = $_POST['hoten'];
               $diachi = $_POST['diachi'];
               $tel = $_POST['tel'];
               $email = $_POST['email'];
               $ngay_dathang = date('Y-m-d h:m:s');
               $tong_donhang = $_SESSION['tongtien'];
               $phuongthuc_tt = $_POST['phuongthuc_tt'];
               $madh='TA'.rand(10000,99999);
               if(isset($_SESSION['user'])){
                  $id_user=$_SESSION['user']['id_user'] ;
               }else{
                  $id_user=0;
               }
               $id_donhangct = taodonhang($id_user,$id_sanpham,$hoten, $diachi, $tel, $email, $tong_donhang, $phuongthuc_tt, $ngay_dathang,$madh);
               $_SESSION['donhangct']=$id_donhangct;
               //insert đơn hàng :$_SESSION['giohang'] & id_donhangct
               foreach ($_SESSION['giohang'] as $giohang) {
                  // $sp_add = [$id_sanpham, $img, $ten_sp, $gia_sp, $giacu, $soluong, $thanhtien];
                  //tk tồn tại thì lấy id ngược lại =0               
                  insert_giohang($id_user, $giohang[0], $giohang[1], $giohang[2], $giohang[3], $giohang[5],$giohang[6],$id_donhangct);
               }
              
               header('location:index.php?act=thanhtoantc');
            }
           
            include "view/thanhtoan/thanhtoan.php";
            break;

         case 'thanhtoantc':
            $list_donhangct = loadone_donhangct($_SESSION['donhangct']);
            include "view/thanhtoan/thanhtoantc.php";
            //xóa giỏ hàng sau khi đặt thành công
            $_SESSION['giohang']=[];
            break;

         case 'donhangcuatoi':
            if(isset($_GET['id_user'])){
               $list_donhangct_cuatoi=loadone_donhangct_dh_cuatoi($_GET['id_user']);
               var_dump($list_donhangct_cuatoi);
            }
            
            include "view/donhangcuatoi/donhangcuatoi.php";
            break;
   }
   


} else {
   include "view/index/home.php";
}

include "view/index/footer.php";

