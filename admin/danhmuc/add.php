<section class="row">
    <section class="wrapper">
        <section class="text">
            <h1>THÊM MỚI Danh Mục</h1>
        </section>
        <form action="index.php?act=adddm" method="POST">
            <p>Mã loại:</p>
            <input type="text" name="mloai" disabled>
            <p>Tên loại:</p>
            <input type="text"  name="tenloai" ><br><br>
            <input type="submit" value="Thêm mới" name="themmoi" class="button">
            <input type="reset" value="Nhập lại" class="button">
            <a href="index.php?act=listdm">
                        <input type="button" value="Danh sách" class="button">
                      </a>
            <br><br>
            <?php
                if(isset($thongbao)&&($thongbao!=""))
                     echo $thongbao;
            ?>
        </form>
    </section>
</section>
<style>
    .text{
        width: 100%;
        height: 50px;
        background: rgb(123, 151, 192);
        }
        .text>h1{
            margin-left: 20px;
            padding: 16px;
            font-size: 20px;
        }
        form{
            margin-top: 20px;
        }
        form>p{
            margin-bottom: 5px;
            font-size: 17px;
        }
        form>input{
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

