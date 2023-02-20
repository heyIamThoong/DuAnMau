<section class="wrapper">
    <div class="row">
            <div class="text">
                <h3>Danh sách Danh Mục</h3>
            </div>
            <form action="index.php?act=listsp" method="POST">
                <input type="text" name="kyw">
                <select name="iddm" >
                    <option value="" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
                <input type="submit" name="listok" value="OK" class="button">
            </form>
            <div class="row_frmcontent">
                <table border="1" cellspacing="0">
                    <tr class="b">
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Hình</th>
                        <th>Lượt xem</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&idsp=".$idsp;
                            $xoasp = "index.php?act=xoasp&idsp=".$idsp;
                            $hinhpath = "../upload/".$img;
                            if(is_file($hinhpath)){
                                $hinh = "<img src='".$hinhpath."' height='100'>";
                            }else{
                                $hinh = "không có ảnh";
                            }
                        echo '<tr>
                                    <td ><input type="checkbox" name="" id=""></td>
                                    <td >'.$iddm.'</td>
                                    <td >'.$name_sp.'</td>
                                    <td >'.$price.'</td>
                                    <td >'.$hinh.'</td>
                                    <td >'.$luotxem.'</td>
                                    <td>
                                        <a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                        <a href= "'.$xoasp.'" ><input  type="button" value="Xóa"></a>
                                    </td>
                                </tr>';
                        }
                    ?>   
                </table>
                <div class="row_mb10">
                    <input type="button" value="Chọn tất cả" class="button">
                    <input type="button" value="Bỏ chọn tất cả" class="button">
                    <input type="button" value="Xóa các mục đã chọn" class="button">
                    <a href="index.php?act=addsp">
                        <input type="button" value="Nhập thêm" class="button">
                    </a>
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
        .text h1{
            margin-left: 20px;
            padding: 16px;
            font-size: 20px;
        }
        table{
            margin-top: 10px;

        }
        
        table tr th{
            padding: 10px;
            border:none;
        }
        table tr td{
            padding:10px;
        }
        .button{
            margin-top: 10px;
            padding: 5px;
            background: white;
            border: 1px solid  rgb(236, 219, 219);
            border-radius: 5px;
        }
        .button:hover{
            color: white;
            background: steelblue;
        }
        .button a{
            text-decoration: none;
            color: black;
        }
        .button a:hover{
            color: white;
            background: steelblue;
        }
        .b{
            background: rgb(123, 151, 192);
        }
</style>   