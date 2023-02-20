
<section class="wrapper">
        <section class="than">
            <section class="noidung"> 
                <section class="chitiet">
                
                    <section class="header_ct">

                        <p>Sản phẩm <?=$name_dm?></p>
                        
                    </section>
                    <section class="text3">
                        <?php
                            foreach ($listdm as $sanpham) {
                                extract($sanpham);
                                $hinh = $hinh_path.$img;
                                $listsp ="index.php?art=sanphamct&idsp=".$idsp;
                                echo '
                                    <div class="sanphamdm">
                                    <a href="'.$listsp.'">
                                        <img src="'.$hinh.'" alt=""><br>
                                        <span>'.$price.'</span>
                                        <p>'.$name_sp.'</p>
                                    </a>
                                    </div>
                                ';
                            }

                        ?>
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
        display: grid;
        grid-template-columns: repeat(3,1fr);
        padding: 10px;
    }
    .sanphamdm{
    width: 290px;
    height: 280px;
    border: 1px solid rgb(231, 224, 224);
    margin-left: 10px;
    border-radius: 5px;
    padding: 5px;
}
.sanphamdm img{
    margin-left: 3px;
    width: 270px;
    height: 200px;
    margin-bottom: 10px;
    text-align: center;
    margin-top: 10px;
}
.sanphamdm a span{
    font-size: 23px;
}
.sanphamdm a p {
    font-size: 18px;
}
.sanphamdm a{
    text-decoration: none;
    color: black;
}
</style>