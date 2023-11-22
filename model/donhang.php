<?php
function taodonhang($tong_donhang,$diachi,$tel,$email,$phuongthuc_tt,$madh){
    $sql="insert into donhang (tong_donhang,diachi,tel,email,phuongthuc_tt,madh) value ($tong_donhang,'$diachi',$tel,'$email',$phuongthuc_tt,'$madh')";
    pdo_execute($sql);
    $last_id=pdo_get_connection()->lastInsertId();
    return $last_id;
}
function addtocart($iddh,$id_sanpham,$img,$ten_sp,$gia_sp,$soluong){
    $sql="insert into donhang_chitiet (id_donhang,id_sanpham,img,ten_sp,don_gia,soluong) value ($iddh,$id_sanpham,'$img','$ten_sp',$gia_sp,$soluong)";
    pdo_execute($sql);
    return $sql;
}
?>