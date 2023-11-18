<?php
ob_start();
include_once('../model/pdo.php');
include_once('../model/danhmuc.php');
include_once('../model/sanpham.php');
include('../model/binhluan.php');
include('../model/taikhoan.php');
include('public/head.php');
include('public/nav.php');

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            include('public/home.php');
            break;
        case 'danhmuc':
            $listdanhmuc=load_all_dm();
            include('public/danhmuc.php');
            break;

        case 'sanpham':
            $listsanpham = load_all_sp();
            include('public/sanpham.php');
            break;

        case 'themsanpham':
            $listdanhmuc = load_all_dm();
            include('public/them_sanpham.php');
            if (isset($_POST['themsanpham'])) {
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];

                $name_img = $_FILES['img']['name'];
                $tmp_img = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp_img, '../img/' . $name_img);

                $ngay_nhap = $_POST['ngay_nhap'];
                $mo_ta = $_POST['mo_ta'];
                $id_danhmuc = $_POST['id_danhmuc'];

                insert_sanpham($ten_sp, $gia_sp, $name_img, $ngay_nhap, $mo_ta, $id_danhmuc);
                header('location:index.php?act=sanpham');
            }
            break;

        case 'update_sanpham':
            $listdanhmuc = load_all_dm();
            if (isset($_GET['id_sanpham']) && $_GET['id_sanpham'] > 0) {
                $listsanpham = load_onesp($_GET['id_sanpham']);
                extract($listsanpham);
                if (isset($_POST['suasanpham'])) {
                    $ten_sp = $_POST['ten_sp'];
                    $gia_sp = $_POST['gia_sp'];
                    $giacu = $_POST['giacu'];

                    $name_img = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_img, '../img/' . $name_img);

                    $ngay_nhap = $_POST['ngay_nhap'];
                    $mo_ta = $_POST['mo_ta'];
                    $id_danhmuc = $_POST['id_danhmuc'];

                    update_sanpham($_GET['id_sanpham'], $ten_sp, $gia_sp, $giacu, $name_img, $ngay_nhap, $mo_ta, $id_danhmuc);
                    header('location:index.php?act=sanpham');
                }
            }

            include('public/update_sanpham.php');
            break;

        case 'xoa_sanpham':
            if ($_GET['id_sanpham'] > 0 && isset($_GET['id_sanpham'])) {
                xoa_sanpham($_GET['id_sanpham']);
                header('location:index.php?act=sanpham');
            }

            break;

           
            case 'them_danhmuc':
                include('public/them_danhmuc.php');
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    $ten_danhmuc=$_POST['ten_danhmuc'];
                    insert_danhmuc($ten_danhmuc);
                    header("location:index.php?act=danhmuc");
                }
                break;
            case 'xoa_danhmuc':
                if(isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] > 0){
                    xoa_danhmuc($_GET['id_danhmuc']);
                    header('location:index.php?act=danhmuc');
                }
                $listdanhmuc = load_all_dm();
                break;
            case 'sua_danhmuc':
                if(isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] > 0){
                    $danhmuc =load_one_dm($_GET['id_danhmuc']);
                    if(isset($_POST['suadanhmuc'])){
                        $ten_danhmuc=$_POST['ten_danhmuc'];
                        update_danhmuc($_GET['id_danhmuc'],$ten_danhmuc);
                        header("location:index.php?act=danhmuc");
                    }
                }
                include('public/sua_danhmuc.php');

                break;
            

        case 'binhluan':
            $listbinhluan=loadall_bl(0);
            include "public/binhluan.php";
            break;
        case 'xoabinhluan':
            if(isset($_GET['id_binhluan']) && $_GET['id_binhluan'] > 0){
                delete_bl($_GET['id_binhluan']);
                
            }
            $listbinhluan=loadall_bl(0);
            include('public/binhluan.php');
            break;
        case 'taikhoan':
            $listtaikhoan=load_all_taikhoan();
                include "public/taikhoan.php";
                break;
        case 'xoataikhoan':
            if(isset($_GET['id_user']) && $_GET['id_user'] > 0){
              delete_taikhoan($_GET['id_user']);
                        
                }
            $listtaikhoan=load_all_taikhoan();
            include('public/taikhoan.php');
            break;
        default:
            include('public/404.php');
    }
} else {
    include('public/home.php');
}

include('public/footer.php');
?>