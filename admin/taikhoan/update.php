<?php
    foreach ($listtk as $taikhoan) {
        extract($taikhoan);
    }
?>
<section class="wrapper">
    <form action="index.php?act=updatetk" method="POST">
        <p>User</p>
        <input type="text" name="user" value="<?=$user?>">
        <p>Pass</p>
        <input type="text" name="pass" value="<?=$pass?>">
        <p>Email</p>
        <input type="text" name="email" value="<?=$email?>">
        <p>Address</p>
        <input type="text" name="address" value="<?=$address?>">
        <p>Tell</p>
        <input type="text" name="tell" value="<?=$tell?>">
        <p>Vai trò</p>
        <input type="text" name="vaitro" value="<?=$vaitro?>">
        <input type="hidden" name="id_user" value="<?=$id_user?>"><br>

        <input type="submit" value="Cập nhật" name="capnhat" class="button">
    </form>
</section>
<style>
    form{
            margin-top: 20px;
        }
        form>p{
            margin-bottom: 5px;
            font-size: 17px;
        }
        input{
            margin-bottom: 10px;
            width: 100%;
            height: 30px;
            border: 1px solid rgb(236, 219, 219);
            border-radius: 7px;
        }
        .button{
            width: 80px;
            height: 28px;
            background: white;
            border: 1px solid  rgb(236, 219, 219);
            border-radius: 5px;
        }
        .button:hover{
            color: white;
            background: steelblue;
        }
        .button>a{
            text-decoration: none;
            color: black;
        }
        .button>a:hover{
            color: white;
            background: steelblue;
        }
</style>