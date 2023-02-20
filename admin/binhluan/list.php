 <section class="wrapper">
    <section class="than">
           <section class="text">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
           </section>
           <table border="1">
                <tr style="background: rgb(123, 151, 192);">
                    <td></td>
                    <td>ID</td>
                    <td>Nội dung</td>
                    <td>User</td>
                    <td>IdPro</td>
                    <td>Ngày bình luận</td>
                    <td></td>
                </tr>
                <?php
                    foreach ($listbl as $binhluan) {
                        extract($binhluan);
                        $xoabl = "index.php?act=xoabl&id=".$id;

                        echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td> <a href="'.$xoabl.'"><input type="button" class="button" value="Xoá"></a></td>
                        </tr>';
                    }
                    
                ?>
                
           </table>
    </section>
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
</style>   