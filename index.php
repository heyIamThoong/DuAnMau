<?php
    session_start();
    include 'model/pdo.php';
    include 'model/danhmuc.php';
    include 'model/sanpham.php';
    include 'global.php';
    include 'model/taikhoan.php';
    $spnew = loadall_sanpham_home();
    $dmsp = loadall_danhmuc();
    $top10 = loadall_sanpham_top10();

    include 'views/header.php';
    if(isset($_GET['art'])){
        $art = $_GET['art'];
        
        switch ($art) {
            case 'sanphamct':
                if(isset($_GET['idsp']) && $_GET['idsp']>0){
                    $idsp = $_GET['idsp'];
                    $onesp=loadone_sanpham($idsp);
                    extract($onesp);
                    // var_dump($onesp);
                    // die();
                    $sp_cungloai=load_sanpham_cungloai($iddm,$idsp);
                    include 'views/sanphamct.php';
                }
                else{
                    include 'views/home.php';
                }
                break;
            case 'sanpham':
                if(isset($_POST['kyw']) && $_POST['kyw']){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['id']) && $_GET['id']>0){
                    $iddm = $_GET['id'];  
                }
                else{
                    $iddm = "";
                }
                $listdm=loadall_sanpham($kyw,$iddm);
                $name_dm=load_danhmuc_name($iddm);
                include 'views/sanphamdm.php';
                break;
            case 'dangky':
                if(isset($_POST['dangky'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    add_taikhoan($user,$pass,$email);
                    $thongbao = "Đăng ký thành công , vui lòng đăng nhập điiii";
                }
                include 'views/taikhoan/dangky.php';
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checktk = check_user($user,$pass);
                    if(is_array($checktk)){
                        $_SESSION['user'] = $checktk;
                        header('location: index.php');
                    }else{
                        $thongbao = "Đăng nhập thất bại rồiiii";
                    }
                }
                include 'views/taikhoan/dangky.php';
                break;
            case 'editUser':
                if(isset($_POST['capnhat']) && $_POST['capnhat']){
                    $id_user = $_POST['id_user'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tell = $_POST['tell'];
                    edit_taikhoan($id_user,$user,$pass,$email,$address,$tell,$vaitro);
                    $_SESSION['user'] = check_user($user,$pass);
                    header('location: index.php?art=editUser');
                }
                include 'views/taikhoan/editUser.php';
                break;
            case 'quenmk':
                if(isset($_POST['quenmk'])){
                    $email = $_POST['email'];
                    $checkEmail = check_email($email);
                    if(is_array($checkEmail)){
                        $thongbao = "mật khẩu của bạn là:".$checkEmail['pass'];
                    }else{
                        $thongbao = "email của bạn không tồn tại";
                    }
                    
                }
                include 'views/taikhoan/quenmk.php';
                break;
            case 'thoat':
                session_unset();
                header('location: index.php');
                break;
            default:
                include 'views/home.php';
                break;
        }
    }else{
        include 'views/home.php';
    }
    include 'views/footer.php';

?>