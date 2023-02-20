<section class="wrapper">
        <section class="than">
            <section class="noidung">
                <section class="banner">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="upload/1005.jpg" style="width:100%">
                        <!-- <div class="text">Caption Text</div> -->
                        </div>
                    
                        <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="upload/1006.jpg" style="width:100%">
                        <!-- <div class="text">Caption Two</div> -->
                        </div>
                    
                        <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="upload/1016.jpg" style="width:100%">
                        <!-- <div class="text">Caption Three</div> -->
                        </div>
                    
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>
                </section>
                <section class="sanpham">
                    <?php
                        foreach ($spnew as $sanpham) {
                            extract($sanpham);
                            $hinh = $hinh_path.$img;
                            $listsp ="index.php?art=sanphamct&idsp=".$idsp;
                            echo '
                                <div class="sanpham1">
                                <a href="'.$listsp.'">
                                    <img src="'.$hinh.'" alt=""><br>
                                    <span>'.$price.'$</span>
                                    <p>'.$name_sp.'</p>
                                </a>
                                </div>
                            ';
                        }

                    ?>
                    
                </section>
            </section>
            <section class="content">
                <?php
                    include 'boxright.php';
                ?>
            </section>
        </section>
    </section>