<section class="wrapper">
        <section class="than">
            <section class="noidung">
                <section class="chitiet">
                    <?php
                        extract($onesp);
                    ?>
                    <section class="header_ct">
                        <p><?=$name_sp?></p>
                    </section>
                    <section class="text3">
                        <?php
                                $hinh = $hinh_path.$img;
                                echo '<img src="'.$hinh.'" alt="">
                                    <ul>
                                        <li>Mã Hàng Hoá: '.$iddm.'</li>
                                        <li>Giá: '.$price.'</li>
                                    </ul>
                                    <p>'.$mota.'</p>'; 
                        ?>
                    </section>
                </section>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("views/binhluan/binhluanform.php", {idpro: <?=$idsp?>});
                    });
                </script>
                <section class="chitiet" id="binhluan">
                    <!-- <section class="header_ct">
                        <p> Bình luận</p>
                    </section>
                    <section class="text3"></section> -->
                </section>
                <section class="chitiet">
                    <section class="header_ct">
                        <p>Sản phẩm cùng loại</p>
                    </section>
                    <section class="text3">
                        <ul>
                            <?php
                                foreach ($sp_cungloai as $sanpham_cungloai) {
                                    extract($sanpham_cungloai);
                                    $listsp = "index.php?art=sanphamct&idsp=".$idsp;
                                    echo '<li><a href="'.$listsp.'">'.$name_sp.'</a></li>';
                                }
                            ?>
                        </ul>    
                    </section>
                </section>
            </section>
            <section class="content">
               <?php
                    include 'boxright.php';
               ?>
            </section>
        </section>
    </section>
</section>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .chitiet{
        border: 1px solid #C0C0C0;
        margin-bottom: 15px;
        border-radius: 5px;
    }
    .header_ct{
        width: 100%;
        height: 40px;
        background: rgb(223, 215, 223);
    }
    .header_ct p{
        font-weight: bold;
        font-size: 23px;
        padding-top: 5px;
        margin-left: 10px;
    }
    .text3{
        /* width: 100%; */
        height: 400px;
    }
    .text3 img{
        width: 350px;
        height: 220px;
        margin-top: 20px;
        margin-left: 320px;
    }
    .text3 p{
        margin-top: 10px;
        margin-left: 15px;
    }
    .text3 ul{
        margin-top: 25px;
        margin-left: 100px;
    }
    .text3 ul li{
        margin-top: 10px;
    }
    .text3 a{
        text-decoration: none;
        color: black;
    }
</style>