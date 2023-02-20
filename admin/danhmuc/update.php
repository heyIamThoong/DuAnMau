<?php

if(is_array($dm)){
    extract($dm);
}

?>
<section class="wrapper">
    <div class="row">
                <div class="text">
                    <h1>Cập Nhật Danh Mục</h1>
                </div>
                <div class="row frmcontent">
                    <form action="index.php?act=updatedm" method="POST">
                        <div class="row_mb10">
                            Mã Loại <br>
                            <input type="text"  name="maloai" disabled>
                        </div>
                        <div class="row_mb10">
                            Tên Loại <br>
                            <input type="text"   name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ?>">
                        </div>
                        <div class="row_mb10">  
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                            <input type="submit"  value="CẬP NHẬT" name="capnhat" class="button">
                            <input type="reset"   value="NHẬP LẠI" class="button">
                        <a href="index.php?act=listdm">
                            <input type="button"  value="DANH SÁCH" class="button">
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



