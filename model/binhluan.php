<?php
function insert_bl($noidung_bl,$id_user,$id_sanpham,$ngay_bl){
    $sql="insert into binhluan(noidung_bl,id_user,id_sanpham,ngay_bl) values('$noidung_bl',$id_user,$id_sanpham,'$ngay_bl')";
    pdo_execute($sql);
}
function loadall_bl($id_sanpham){
    $sql="select * from binhluan join taikhoan on taikhoan.id_user=binhluan.id_user where 1 ";
    if($id_sanpham>0)
    $sql.=" AND id_sanpham='".$id_sanpham." '";
    $sql.=" order by id_binhluan desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_bl($id_binhluan){
    $sql="delete from binhluan where id_binhluan=".$id_binhluan;
    pdo_execute($sql);
}
?>