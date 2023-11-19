<?php
function insert_taikhoan($user,$pass,$email){
    $sql="insert into taikhoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
}
function load_all_taikhoan(){
    $sql="select * from taikhoan order by id_user desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function delete_taikhoan($id_user){
    $sql = "delete from taikhoan where id_user = $id_user";
    pdo_execute($sql);
}

?>