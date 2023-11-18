<?php
function insert_sanpham($ten_sp,$gia_sp,$img,$ngay_nhap,$mo_ta,$id_danhmuc){
    $sql="insert into sanpham (ten_sp,gia_sp,img,ngay_nhap,mo_ta,id_danhmuc) value ('$ten_sp',$gia_sp,'$img','$ngay_nhap','$mo_ta',$id_danhmuc)";
    pdo_execute($sql);
}

function load_all_sp(){
    $sql='select * from sanpham  join danhmuc on sanpham.id_danhmuc=danhmuc.id_danhmuc order by id_sanpham desc ';
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_all_sp_banchay(){
    $sql='select * from sanpham where 1 and luotxem <>0 order by luotxem desc ';
    $sp_banchay = pdo_query($sql);
    return $sp_banchay;
}

function load_all_sp_danhmuc($iddm){
    $sql='select * from sanpham where id_danhmuc='.$iddm;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function xoa_sanpham($id_sanpham){
    $sql="delete  from sanpham where id_sanpham=$id_sanpham";
    pdo_execute($sql);
}

function load_onesp($id_sanpham){
    $sql='select * from sanpham where id_sanpham='.$id_sanpham;
    $load_onesp = pdo_query_one($sql);
    return $load_onesp;
}

function update_sanpham($id_sanpham,$ten_sp, $gia_sp,$giacu, $name_img, $ngay_nhap, $mo_ta, $id_danhmuc){
    if($name_img!=""){
        $sql="update sanpham set ten_sp='$ten_sp',gia_sp=$gia_sp,giacu=$giacu,img='$name_img',ngay_nhap='$ngay_nhap',mo_ta='$mo_ta',id_danhmuc=$id_danhmuc where id_sanpham=$id_sanpham";
    }else{
        $sql="update sanpham set ten_sp='$ten_sp',gia_sp=$gia_sp,giacu=$giacu,ngay_nhap='$ngay_nhap',mo_ta='$mo_ta',id_danhmuc=$id_danhmuc where id_sanpham=$id_sanpham";
    }
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="select *  from  sanpham where 1 order by id_sanpham desc limit 0,6";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select *  from  sanpham where 1 order by luotxem desc limit 0,4";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_topsale(){
    $sql="select *  from  sanpham where 1 order by gia_sp asc limit 0,4";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_hangmoi(){
    $sql="select *  from  sanpham where 1 order by ngay_nhap desc limit 0,3";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
?>