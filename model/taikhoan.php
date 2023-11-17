<?php
function load_all_taikhoan(){
    $sql="select * from taikhoan order by id_user desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id_user){
    $sql = "delete from taikhoan where id_user = $id_user";
    pdo_execute($sql);
}
?>