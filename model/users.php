<?php 
function insert_users($user_name,$password,$email,$address,$phone){
    $sql = "insert into users (user_name,password,email,address,phone) values('$user_name','$password','$email','$address','$phone')";
    pdo_execute($sql);
}
function check_user($user_name,$password){
    $sql = "select * from users where user_name ='".$user_name."' AND password =".$password."";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_email($email){
    $sql = "select * from users where email ='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_users($id,$user_name,$password,$email,$address,$phone){
    $sql = "update users set user_name ='".$user_name."', password ='".$password."', email ='".$email."', address ='".$address."', phone ='".$phone."' where id=".$id;
    pdo_execute($sql);
}
function loadAll_tk(){
    $sql ="select * from users order by id";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadOne_tk($id){
    $sql = "select * from users where id =".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function delete_tk($id){
    $sql = "delete from users where id =".$id;
    pdo_execute($sql);
}
?>