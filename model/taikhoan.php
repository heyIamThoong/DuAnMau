<?php
    function add_taikhoan($user,$pass,$email){
        $sql = "insert into taikhoan(user,pass,email) values('$user','$pass','$email')";
        pdo_execute($sql);
    }
    function delete_taikhoan($id_user){
        $sql = "delete from taikhoan where id_user =".$id_user;
        pdo_execute($sql);
    }
    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id_user ASC";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_taikhoan($id_user){
        $sql = "select * from taikhoan where id_user=".$id_user;
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function check_user($user,$pass){
        $sql = "select * from taikhoan where user = '".$user."' and pass = '".$pass."'";
        $checktk = pdo_query_one($sql);
        return $checktk;
    }
    function edit_taikhoan($id_user,$user,$pass,$email,$address,$tell,$vaitro){
        if($vaitro!=""){
            $sql = "update taikhoan set user = '$user', pass = '$pass', email = '$email', address = '$address', tell = '$tell', vaitro = '$vaitro' where id_user = '$id_user'";
        }else{
            $sql = "update taikhoan set user = '$user', pass = '$pass', email = '$email', address = '$address', tell = '$tell' where id_user = '$id_user'";
        }
        
        pdo_execute($sql);
        // var_dump($sql);
        // die();
    
    }
    function check_email($email){
        $sql = "select * from taikhoan where email = '".$email."'";
        $checkemail = pdo_query_one($sql);
        return $checkemail;
    }
?>