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
   $topsale=loadall_sanpham_topsale();
   $spnew=loadall_sanpham_home();
   $hangmoi=loadall_sanpham_hangmoi();

   if(isset($_GET['act'])&&$_GET['act']!=""){
      $act = $_GET['act'];
      switch ($act) {

      case 'sanpham':
      $listsanpham=load_all_sp();
      $listdanhmuc=load_all_dm();
      $sp_banchay=load_all_sp_banchay();
      if(isset($_GET['iddm'])&&$_GET['iddm']>0 ){
         $listsanpham=load_all_sp_danhmuc($_GET['iddm']);
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
                  if(isset($_POST['dangky'])&&($_POST['dangky'])){
                  $email=$_POST['email'];
                  $user=$_POST['user'];
                  $pass=$_POST['pass'];
                  insert_taikhoan($email,$user,$pass);
                  $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";   
                  }
  
                      include "view/taikhoan/taikhoan.php";
                      break;     
            case 'dangnhap':
                  if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                  $user=$_POST['user'];
                  $pass=$_POST['pass'];
                  $checkuser=checkuser($user,$pass);
                  if(is_array($checkuser)){
                   $_SESSION['user']=$checkuser;
                            //  $thongbao=" Bạn đã đăng nhập thành công!";
                  header('Location: index.php');
                   }else{
                    $thongbao="Tài khoản không tồn tại.Vui lòng kiểm tra hoặc đăng ký!";
                  }
                
                                
                         }
                
                        include "view/taikhoan/taikhoan.php";
                        break;
                   
            }

      
   }else{
      include "view/index/home.php";
   }

   include "view/index/footer.php";

