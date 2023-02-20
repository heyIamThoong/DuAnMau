<section class="wrapper">
    <div class="row">
            <div class="text">
                <h3>Danh sách khách hàng</h3>
            </div>
            <div class="row_frmcontent">
                <table border="1" cellspacing="0">
                    <tr class="b">
                        <th>STT</th>
                        <th >User</th>
                        <th >Pass</th>
                        <th >email</th>
                        <th >address</th>
                        <th >Tell</th>
                        <th >Vai trò</th>
                        <th></th>
                        
                    </tr>
                <?php
                    foreach ($listtk as $taikhoan) {
                        extract($taikhoan);
                        $sua = "index.php?act=suatk&id_user=".$id_user;
                        $xoa = "index.php?act=xoatk&id_user=".$id_user;
                        echo '<tr>
                                <td>'.$id_user.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tell.'</td>
                                <td>'.$vaitro.'</td>
                                <td>
                                    <a href="'.$sua.'"><input type="button" value="Sửa" class="button"></a>
                                    <a href="'.$xoa.'"><input type="button" value="Xoá" class="button"></a>
                                </td>
                            </tr>';
                    }
                ?>
                    
                </table>
                <div class="row_mb10">
                    <!-- <input type="button" value="Chọn tất cả" class="button">
                    <input type="button" value="Bỏ chọn tất cả" class="button">
                    <input type="button" value="Xóa các mục đã chọn" class="button"> -->
                    <a href="index.php?act=addtk">
                        <input type="button" value="Thêm tài khoản" class="button">
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
        .text h3{
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