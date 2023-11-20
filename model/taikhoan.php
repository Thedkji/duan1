<?php
function insert_taikhoan($email,$tel,$user,$pass,$diachi){
    $sql="insert into taikhoan";
    if($diachi!=0){
        $sql.="(email,tel,user,pass) value ('$email',$tel,'$user','$pass')";
    }else{
        $sql.="(email,tel,user,pass,diachi) value ('$email',$tel,'$user','$pass','$diachi')";
    }
    pdo_execute($sql);
}

function update_taikhoan($id_user,$email,$tel,$user,$pass,$diachi){
    $sql="update taikhoan set email='$email',tel=$tel,user='$user',pass='$pass',diachi='$diachi' where id_user= $id_user";
    pdo_execute($sql);
}

function check_email($email)
{
    $sql = "select * from taikhoan where email = '$email'";
    $kq_email = pdo_query_one($sql);
    return $kq_email;
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