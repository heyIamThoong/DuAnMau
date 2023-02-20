<section class="wrapper">
    <section class="than">
        <section class="noidung"> 
            <section class="noidung1">
                <section class="text">
                    <h1>Thông tin đăng ký</h1>
                </section>
                <section class="form_dk">
                    <form action="index.php?art=dangky" method="POST">
                        <p>Nhập User:</p>
                        <input type="text" name="user" id="taiKhoan">
                        <p>Nhập Password:</p>
                        <input type="text" name="pass" id="matKhau">
                        <p>Nhập email</p>
                        <input type="text" name="email" id="email"><br>
                        <input id="lg_dn" name="dangky" type="submit" onclick="kiemtra()" class="button" value="Đăng ký">  </input>
                        <input type="reset" value="Nhập lại" class="button">

                        <?php
                            if(isset($thongbao)&&($thongbao!=""))
                                echo $thongbao;
                        ?>
                    </form>
                </section>
            </section>
        </section>
        <section class="content">
            <?php
                    include 'views/boxright.php';
            ?>
        </section>
    </section>
</section>
<style>
    .noidung1{
        border: 1px solid #D3D3D3;
        border-radius: 6px;
        height: 270px;
    }
    .text{
        width: 100%;
        height: 40px;
        background: rgb(223, 215, 223);
        border-radius: 6px;
    }
    .text h1{
        font-size: 20px;
        padding-top: 5px;
        margin-left: 10px;
    }
    .form_dk form{
        padding: 5px;
    }
    .form_dk form p{
        margin-bottom: 7px;
        margin-top: 5px;
    }
    .form_dk form input{
        width: 100%;
        border: 1px solid #CCCCCC;
        border-radius: 6px;
        height: 25px;
    }
    .form_dk .button{
        width: 100px;
        margin-top: 15px;
    }
    .button:hover{
        background: rgb(205 193 197);
        color: white;
    }
</style>