<?php

function taodonhang($id_user,$id_sanpham,$hoten,$diachi,$tel,$email,$tong_donhang,$phuongthuc_tt,$ngay_dathang,$madh){
    $sql="insert into donhang_chitiet (id_user,id_sanpham,hoten,diachi,tel,email,tong_donhang,phuongthuc_tt,ngay_dathang,madh) value ($id_user,$id_sanpham,'$hoten','$diachi',$tel,'$email',$tong_donhang,$phuongthuc_tt,'$ngay_dathang','$madh')";
    $id_donhangct = pdo_execute_last_insert_id($sql);
    return $id_donhangct;
}

function insert_giohang($id_user,$id_sanpham,$img,$ten_sp,$gia_sp,$soluong,$thanhtien,$id_donhangct){
    $sql="insert into donhang (id_user,id_sanpham,img,ten_sp,gia_sp,soluong,thanhtien,id_donhangct) value ($id_user,$id_sanpham,'$img','$ten_sp',$gia_sp,$soluong,$thanhtien,$id_donhangct)";
    pdo_execute($sql);
    return $sql;
}
function load_all_donhang($kyw="",$id_user=0){
    $sql="select * from donhang where 1";
    if($id_user>0) $sql.=" AND id_user=".$id_user;
    if($kyw!="") $sql.=" AND id_user like '%".$kyw."%'";
    $sql.=" order by id_donhang desc";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function delete_donhang($id_donhang){
    $sql="DELETE donhang, donhang_chitiet FROM donhang
    LEFT JOIN donhang_chitiet ON donhang.id_donhangct = donhang_chitiet.id_donhangct
    WHERE donhang.id_donhang =$id_donhang";
    pdo_execute($sql);
}
function loadall_donhangct(){
    $sql='select * from donhang_chitiet order by id_donhangct desc  ';
    $load_allctsp = pdo_query($sql);
    return $load_allctsp;
}

function loadone_donhang_user($id_donhangct,$id_user){
    $sql="select * from donhang where id_user=$id_user and id_donhangct=$id_donhangct";
    $load_one_dhct = pdo_query($sql);
    return $load_one_dhct;
}

function loadone_donhangct_dh_cuatoi($id_user){
    $sql="select * from donhang_chitiet where id_user=$id_user";
    $load_one_dhct = pdo_query($sql);
    return $load_one_dhct;
}
function loadone_donhangct($id_donhangct){
    $sql="select * from donhang_chitiet where id_donhangct=$id_donhangct";
    $load_onesp = pdo_query_one($sql);
    return $load_onesp;
}
function load_one_donhangct($id_user) {
    $sql="select donhang.id_user,donhang.gia_sp,donhang.soluong,sanpham.ten_sp,sanpham.img from donhang join sanpham on donhang.id_sanpham=sanpham.id_sanpham where id_user=$id_user";
    $load_one_sp = pdo_query($sql); 

    return $load_one_sp;

}

function update_donhangct($id_donhangct, $trangthai) {
    $sql = "UPDATE donhang_chitiet SET trangthai='".$trangthai."' WHERE id_donhangct=$id_donhangct";
    
    // Chuẩn bị và thực thi truy vấn
    
    pdo_execute($sql);
}


function get_ttdh($n){
    switch ($n) {
        case '0':
            # code...
            $tt="Đơn hàng mới";
            break;
        case '1':
                # code...
            $tt="Đang xử lý";
            break;
        case '2':
                    # code...
            $tt="Đang giao hàng";
            break;
        case '3':
                        # code...
             $tt="Hoàn tất";
            break;
        case '4':
            $tt="Hủy";
        default:
            # code...
           
            break;
    }
    return $tt;
}
function ttnh($i){
    switch ($i) {
        case '1':
            # code...
            $tt="Thanh toán khi nhận hàng";
            break;
        // case '2':
        //     $tt="Thanh toán online";
        default:
        $tt="Thanh toán khi nhận hàng";
        break;
        
    }
    return $tt;
}
?>