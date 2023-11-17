<?php
function load_all_dm(){
    $sql="select * from danhmuc order by id_danhmuc desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function load_one_dm($id_danhmuc){
    $sql = "select * from danhmuc where id_danhmuc = $id_danhmuc";
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}
// insert dm
function insert_danhmuc($ten_danhmuc){
    $sql = "insert into danhmuc (ten_danhmuc) value ('$ten_danhmuc')";
    pdo_execute($sql);
}

//delete
function xoa_danhmuc($id_danhmuc){
    $sql = "delete from danhmuc where id_danhmuc = $id_danhmuc";
    pdo_execute($sql);
}

//update
function update_danhmuc($id_danhmuc,$ten_danhmuc){
    $sql="update danhmuc set ten_danhmuc = '".$ten_danhmuc."' where id_danhmuc=".$id_danhmuc;
    pdo_execute($sql);
}


?>