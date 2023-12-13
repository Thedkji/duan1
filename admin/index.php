<?php
ob_start();
session_start();
include_once('../model/pdo.php');
include_once('../model/danhmuc.php');
include_once('../model/sanpham.php');
include('../model/binhluan.php');
include('../model/taikhoan.php');
include('../model/donhang.php');
include('../model/thongke.php');
include('public/head.php');
include('public/nav.php');


if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            include('public/home.php');
            break;
        case 'danhmuc':
            $listdanhmuc = load_all_dm();
            include('public/danhmuc.php');
            break;

        case 'sanpham':
            $listsanpham = load_all_sp();
            include('public/sanpham.php');
            break;

        case 'themsanpham':
            $listdanhmuc = load_all_dm();
            if (isset($_POST['themsanpham'])) {
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];

                $name_img = $_FILES['img']['name'];
                $tmp_img = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp_img, '../img/' . $name_img);

                $ngay_nhap = $_POST['ngay_nhap'];
                $mo_ta = $_POST['mo_ta'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $listsanpham = load_all_sp();
                foreach ($listsanpham as $sp) {
                    if ($sp['ten_sp'] == $ten_sp) {
                        $thongbao = "<h4 style='color:red'>Tên sản phẩm đã tồn tại vui lòng chọn tên khác</h4>";
                    } elseif ($name_img == $sp['img']) {
                        $thongbao = "<h4 style='color:red'>ảnh sản phẩm đã tồn tại vui lòng chọn ảnh khác</h4>";
                    }
                }
                if (!isset($thongbao)) {
                    insert_sanpham($ten_sp, $gia_sp, $name_img, $ngay_nhap, $mo_ta, $id_danhmuc);
                    header('location:index.php?act=sanpham');
                }
            }
            include('public/them_sanpham.php');
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

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $listdanhmuc = load_all_dm();
                //kiểm tra dữ liệu trong db xem có trùng lặp ko
                foreach ($listdanhmuc as $danhmuc) {
                    if ($danhmuc['ten_danhmuc'] == $ten_danhmuc) {
                        $thongbao = "<h4 style='color:red'>Tên danh mục đã tồn tại vui lòng chọn tên khác</h4>";
                        break;
                    }
                }
                //nếu ko trùng lặp thì add vào db
                if (!isset($thongbao)) {
                    insert_danhmuc($ten_danhmuc);
                    header("location:index.php?act=danhmuc");
                }
            }
            include('public/them_danhmuc.php');
            break;
        case 'xoa_danhmuc':
            if (isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] > 0) {
                xoa_danhmuc($_GET['id_danhmuc']);
                header('location:index.php?act=danhmuc');
            }
            $listdanhmuc = load_all_dm();
            break;
        case 'sua_danhmuc':
            if (isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'] > 0) {
                $danhmuc = load_one_dm($_GET['id_danhmuc']);
                if (isset($_POST['suadanhmuc'])) {
                    $ten_danhmuc = $_POST['ten_danhmuc'];
                    update_danhmuc($_GET['id_danhmuc'], $ten_danhmuc);
                    header("location:index.php?act=danhmuc");
                }
            }
            include('public/sua_danhmuc.php');

            break;


        case 'binhluan':
            $listbinhluan = loadall_bl(0);
            include "public/binhluan.php";
            break;
        case 'xoabinhluan':
            if (isset($_GET['id_binhluan']) && $_GET['id_binhluan'] > 0) {
                delete_bl($_GET['id_binhluan']);

            }
            $listbinhluan = loadall_bl(0);
            include('public/binhluan.php');
            break;
        case 'taikhoan':
            $listtaikhoan = load_all_taikhoan();
            include "public/taikhoan.php";
            break;
        case 'xoataikhoan':
            if (isset($_GET['id_user']) && $_GET['id_user'] > 0) {
                delete_taikhoan($_GET['id_user']);

            }
            $listtaikhoan = load_all_taikhoan();
            include('public/taikhoan.php');
            break;
        case 'donhang':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];

            } else {
                $kyw = "";
            }
            $listdonhang = load_all_donhang($kyw, 0);
            $listtaikhoan = load_all_taikhoan();


            include('public/donhang.php');
            break;
        case 'xoadonhang':
            if (isset($_GET['id_donhang']) && $_GET['id_donhang'] > 0) {
                delete_donhang($_GET['id_donhang']);
                header('location:index.php?act=donhang');
            }
            $listdonhang = load_all_donhang();
            include('public/donhang.php');
            break;

        case 'donhangct':
            if (isset($_GET['id_donhangct']) && $_GET['id_donhangct'] > 0) {
                $id_donhangct = $_GET['id_donhangct'];

                $listdhct = loadone_donhangct($id_donhangct);
                $_SESSION['id_user'] = $_GET['id_user'];
                if (isset($_GET['id_user'])) {
                    $listdh = loadone_donhang_user($id_donhangct, $_GET['id_user']);
                }
                // Kiểm tra xem có dữ liệu không trước khi include file
                if (isset($listdhct)) {
                    include('public/donhangct.php'); // Nơi hiển thị thông tin đơn hàng chi tiết
                } else {
                    echo "Không tìm thấy đơn hàng."; // Hoặc xử lý thông báo nếu không tìm thấy đơn hàng
                }


            }
            break;
        case 'chitietdh':
            if (isset($_GET['id_user']) && $_GET['id_user'] > 0) {
                $id_ctdh = $_GET['id_user'];
                $listctdh = load_one_donhangct($id_ctdh);

                // Kiểm tra xem có dữ liệu không trước khi include file
                if ($listctdh) {
                    include('public/chitietdh.php'); // Nơi hiển thị thông tin đơn hàng chi tiết
                } else {
                    echo "Không tìm thấy đơn hàng."; // Hoặc xử lý thông báo nếu không tìm thấy đơn hàng
                }
            }
            break;
        case 'update_donhangct':
            if (isset($_GET['id_donhangct']) && $_GET['id_donhangct'] > 0) {
                $id_donhangct = $_GET['id_donhangct'];
                $donhangct = loadone_donhangct($id_donhangct);

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['trangthai'])) {
                    $trangthai = $_POST['trangthai'];

                    // Thực hiện cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
                    update_donhangct($id_donhangct, $trangthai);
                    // Chuyển hướng hoặc thực hiện hành động tiếp theo sau khi cập nhật

                    // Ví dụ: chuyển hướng người dùng sau khi cập nhật
                    $id_user = $_SESSION['id_user'];
                    $address = "index.php?act=donhangct&id_donhangct= $id_donhangct&id_user=$id_user";
                    header("Location: $address");
                    exit(); // Kết thúc quá trình thực thi để tránh tiếp tục chạy mã
                }
            }
            include('public/update_donhangct.php');
            break;

        case "thongke":
            $listthongke = loadall_thongke();
            include('public/list_thongke.php');
            break;

        case 'thongke_doanhthu':
            include('public/thongke_doanhthu.php');
            break;

        default:
            include('public/404.php');
    }
} else {
    include('public/home.php');
}

include('public/footer.php');
?>