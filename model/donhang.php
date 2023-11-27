<?php
function taodonhang($hoten,$diachi,$tel,$email,$tong_donhang,$phuongthuc_tt,$ngay_dathang,$madh){
    $sql="insert into donhang_chitiet (hoten,diachi,tel,email,tong_donhang,phuongthuc_tt,ngay_dathang,madh) value ('$hoten','$diachi',$tel,'$email',$tong_donhang,$phuongthuc_tt,'$ngay_dathang','$madh')";
    $id_donhangct = pdo_execute_last_insert_id($sql);
    return $id_donhangct;
}
function insert_giohang($id_user,$id_sanpham,$img,$ten_sp,$gia_sp,$soluong,$thanhtien,$id_donhangct){
    $sql="insert into donhang (id_user,id_sanpham,img,ten_sp,gia_sp,soluong,thanhtien,id_donhangct) value ($id_user,$id_sanpham,'$img','$ten_sp',$gia_sp,$soluong,$thanhtien,$id_donhangct)";
    pdo_execute($sql);
    return $sql;
}

function load_all_donhang(){
    $sql="select * from donhang order by id_donhang desc";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function delete_donhang($id_donhang){
    $sql="delete from donhang where id_donhang=$id_donhang ";
    pdo_execute($sql);
}

function loadone_donhangct($id_donhangct){
    $sql='select * from donhang_chitiet where id_donhangct='.$id_donhangct;
    $load_onesp = pdo_query_one($sql);
    return $load_onesp;

}

function loadone_donhang($id_donhang){
    $sql='select * from donhang where id_donhang='.$id_donhang;
    $load_onesp = pdo_query_one($sql);
    return $load_onesp;

}
?>