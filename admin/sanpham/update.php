<?php

if(is_array($sp)){
    extract($sp);
}
$hinhpath = "../upload/".$img;
if(is_file($hinhpath)){
    $hinh = "<img src='".$hinhpath."' height='100'>";
}else{
    $hinh = "không có ảnh";
}
?>
<section class="wrapper">
    <div class="row">
                <div class="text">
                    <h1>Cập Nhật hàng hoá</h1>
                </div>
                <div class="row frmcontent">
                    <form action="index.php?act=updatesp" method="POST"  enctype="multipart/form-data">
                        <div class="row_mb10">
                            Mã danh mục <br>
                            <select name="iddm" id="">
                            <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        if($iddm==$id)
                                            echo '<option value="'.$id.'" selected>'.$name.'</option>';
                                        else
                                            echo '<option value="'.$id.'">'.$name.'</option>';
                                    }
                                ?>  
                            </select>
                        </div>
                        <div class="row_mb10">
                            Tên sản phẩm <br>
                            <input type="text"   name="tensp" value="<?=$name_sp?>">
                        </div>
                        <div class="row_mb10">
                            Giá <br>
                            <input type="text"   name="giasp" value="<?=$price?>">
                        </div>
                        <div class="row_mb10">
                            Ảnh <br>
                            <?=$hinh?>
                            <input type="file"   name="anh" value="" style="border:none;">
                        </div>
                        <div class="row_mb10">
                            Mô tả <br>
                            <input type="text"   name="mota" value="<?=$mota?>">
                        </div>
                        <div class="row_mb10">  
                            <input type="hidden" name="idsp" value="<?=$idsp ?>">
                            <input type="submit"  value="Cập nhật" name="capnhat" class="button">
                            <input type="reset"   value="Nhập lại" class="button">
                        <a href="index.php?act=listsp">
                            <input type="button"  value="Danh sách" class="button">
                        </a>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .text{
        width: 100%;
        height: 50px;
        background: rgb(123, 151, 192);
        }
        .text>h1{
            /* margin-left: 20px; */
            font-size: 20px;
            padding-top: 10px;
        }
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



