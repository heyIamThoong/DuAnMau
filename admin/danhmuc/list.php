<section class="wrapper">
    <div class="row">
            <div class="text">
                <h3>Danh sách Danh Mục</h3>
            </div>
            <div class="row_frmcontent">
                <table border="1" cellspacing="0">
                    <tr class="b">
                        <th colspan="2">Mã Loại</th>
                        <th colspan="2">Tên Loại</th>
                    </tr>
                    <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=".$id;
                            $xoadm = "index.php?act=xoadm&id=".$id;
                        echo '<tr>
                                    <td ><input type="checkbox" name="" id=""></td>
                                    <td >'.$id.'</td>
                                    <td >'.$name.'</td>
                                    <td >
                                    <a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                    <a href= "'.$xoadm.'" ><input  type="button" value="Xóa"></a>
                                    </td>
                                </tr>';
                        }
                    ?>   
                </table>
                <div class="row_mb10">
                    <input type="button" value="Chọn tất cả" class="button">
                    <input type="button" value="Bỏ chọn tất cả" class="button">
                    <input type="button" value="Xóa các mục đã chọn" class="button">
                    <a href="index.php?act=adddm">
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