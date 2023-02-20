<?php
    session_start();
    include '../../model/pdo.php';
    include '../../model/binhluan.php';
    $idpro = $_REQUEST['idpro'];
    $dsbl = loadall_binhluan($idpro);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <section class="danhmuc">
        <section class="top">
            <p>bình luận</p>
        </section>
        <section class="text1 binhluan">
            <table>
                <?php
                    foreach ($dsbl as $binhluan) {
                        extract($binhluan);

                        echo '<tr><td>'.$noidung.'</td>';
                        echo '<td>'.$iduser.'</td>';
                        echo '<td>'.$ngaybinhluan.'</td></tr>';

                    }
                ?>
            </table>
        </section>
        
        <section class="top">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <input type="hidden" name="idpro" value="<?=$idpro?>" class="input">
                <input type="text" name="noidung">
                <input type="submit" value="Gửi bình luận" name="guibinhluan" class="button" style="width: 100px;">
            </form>
        </section>
        <?php
            if(isset($_POST['guibinhluan'])){
                $noidung=$_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser= $_SESSION['user']['user'];
                $ngaybinhluan = date('h:i:sa d/m/Y');
                add_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                header('location:'.$_SERVER['HTTP_REFERER']);
            }

        ?>
    </section>

</body>
</html>
<style>
*{
    margin: 0;
    padding: 0;
}
.danhmuc{
    margin-top: 15px;
    border: 1px solid rgb(223, 215, 223);
    border-radius: 6px;
}
.top{
    height: 40px;
    background: rgb(223, 215, 223);
    margin-top: none;
}
.top>p{
    font-size: 20px;
    padding-top: 5px;
    margin-left: 10px;
    font-weight: bold;
}
.top form{
    padding-top: 7px;
}
.input{
    margin-top: 3px;
    margin-left: 5px;
    border-radius: 6px;
    border: 1px solid rgb(223, 215, 223);
    height: 25px;
    width: 200px;
}
.button{
    height: 28px;
    background: white;
    border: 1px solid  rgb(236, 219, 219);
    border-radius: 5px;
}
.button:hover{
    color: white;
    background: steelblue;
}
.danhmuc>.text1{
    border-bottom: 1px solid rgb(223, 215, 223);
    padding: 5px;
    padding-left: 20px;
}

.danhmuc>.text1>a{
    text-decoration: none;
    color: black;
}
.binhluan table{
    width: 100%;
}
.binhluan table td:nth-child(1) {
    width: 50%;
}
.binhluan table td:nth-child(2) {
    width: 20%;
}
.binhluan table td:nth-child(3) {
    width: 30%;
}
</style>