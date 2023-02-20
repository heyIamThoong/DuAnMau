
<section class="login">
    <section class="text">
        <h1>TÀI KHOẢN</h1>
    </section>
    <?php
        if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
    ?>
        <section class="url_dn">
            <p>Xin chào</p> <?=$user?>
            <li>
                <a href="index.php?art=quenmk">quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?art=editUser">Update tài khoản</a>
            </li>
            <?php if($vaitro==1){
            ?>
            <li>
                <a href="admin/index.php">Đăng nhập admin</a>
            </li>
            <?php } ?>
            <li>
                <a href="index.php?art=thoat">Thoát</a>
            </li>
        </section>
    <?php
        }else{
    ?>
        <form action="index.php?art=dangnhap" method="POST">
        <p>Tên đăng nhập</p>
        <input type="text" name="user" id="taikhoan">
        <p>Mật khẩu</p>
        <input type="password" name="pass" id="matkhau"><br>
        <input type="checkbox" > <span>ghi nhớ tài khoản?</span><br>
        <input type="submit" name="dangnhap" value="Đăng nhập"></input>
        <ul>
            <li><a href="index.php?art=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?art=dangky">Đăng ký thành viên</a></li>
        </ul>

        <?php
            if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
        ?>
    </form>
    <?php
        }
    ?>
</section>
<section class="danhmuc">
    <section class="top">
        <p>Danh mục</p>
    </section>
    <?php
        foreach ($dmsp as $danhmuc) {
            extract($danhmuc);
            $listdm = "index.php?art=sanpham&id=".$id;
            echo '<section class="text1"><a href="'.$listdm.'">'.$name.'</a></section>';
        }
    ?>
    
    <section class="top">
        <form action="index.php?art=sanpham" method="POST">
            <input type="text" name="kyw">
            <input type="submit" value="Search" class="search" style="width:50px;">
        </form>
    </section>
</section>
<section class="yeuthich">
    <section class="top">
        <p>Top 10 yêu thích</p>
    </section>
    <?php
        foreach ($top10 as $yeuthich) {
            extract($yeuthich);
            $listsp ="index.php?art=sanphamct&idsp=".$idsp;
            $hinh = $hinh_path.$img;
            echo '<section class="text1">
                <a href="'.$listsp.'">
                        <img src="'.$hinh.'" alt="">
                    '.$name_sp.'
                </a>
            </section>';
        }
        
    ?>
    
</section>
<style>
    .url_dn li a{
        text-decoration: none;
    }
    .url_dn{
        margin-left: 20px;
    }
    .url_dn li{
        padding: 2px;
    }
</style>