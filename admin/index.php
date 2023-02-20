<?php
    include '../model/pdo.php';
    include '../model/danhmuc.php';
    include '../model/sanpham.php';
    include '../model/taikhoan.php';
    include '../model/binhluan.php';
    include 'header.php';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $tenloai = $_POST['tenloai'];
                    add_danhmuc($tenloai);
                    $thongbao = 'Thêm thành Công';
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;
            case 'xoadm':
                if(isset($_GET['id'])&& ($_GET['id'])){
                    $id =$_GET['id'];
                    $sql = "delete from danhmuc where id =".$id;
                    pdo_execute($sql);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;   
            case 'suadm':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                } 
                    include "danhmuc/update.php";
                    break;          
            case 'updatedm':
                if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao ="Cập nhật thành công";
                }
                $sql = "select * from danhmuc order by name";
                $listdanhmuc = pdo_query($sql);
                include "danhmuc/list.php";
                break; 

            /** contrller sản phẩm */

            case 'addsp':
                if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];

                    $img = $_FILES['anh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                    move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
                    add_sanpham($tensp,$giasp,$img,$mota,$iddm);
                    $thongbao = 'Thêm thành Công';
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if (isset($_POST['listok']) && $_POST['listok']) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham($kyw,$iddm);
                    include "sanpham/list.php";
                    break;
            case 'xoasp':
                if(isset($_GET['idsp'])&& ($_GET['idsp']>0)){
                    delete_sanpham($_GET['idsp']);
                    }
                    $listsanpham = loadall_sanpham();
                    include "sanpham/list.php";
                    break;   
            case 'suasp':
                if(isset($_GET['idsp'])&& ($_GET['idsp']>0)){
                    $sp=loadone_sanpham($_GET['idsp']);
                } 
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;          
            case 'updatesp':
                if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                    $tensp = $_POST['tensp'];
                    $iddm = $_POST['iddm'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $idsp = $_POST['idsp'];

                    $img = $_FILES['anh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                    move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
                    
                    update_sanpham($idsp,$iddm,$tensp,$giasp,$img,$mota);
                    // var_dump(update_sanpham($id,$iddm,$tensp,$giasp,$img,$mota));
                    // die();
                    $thongbao ="Cập nhật thành công";
                }
                
                $listsanpham = loadall_sanpham();
                include "sanpham/list.php";
                break;

            /**controller tài khoản */
            case 'addtk':
                if(isset($_POST['themmoi'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    add_taikhoan($user,$pass,$email);
                }
                include 'taikhoan/add.php';
                break;
            case 'listtk':
                $listtk = loadall_taikhoan();
                include 'taikhoan/list.php';
                break;
            case 'suatk':
                if(isset($_GET['id_user'])){
                    $id_user = $_GET['id_user'];
                    $listtk = loadone_taikhoan($id_user);
                    include 'taikhoan/update.php';
                }
                break;
            case 'updatetk':
                if(isset($_POST['capnhat'])){
                    $id_user = $_POST['id_user'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tell = $_POST['tell'];
                    $vaitro = $_POST['vaitro'];
                    edit_taikhoan($id_user,$user,$pass,$email,$address,$tell,$vaitro);
                }
                $listtk = loadall_taikhoan();
                include 'taikhoan/list.php';
                break;
            case 'xoatk':
                if(isset($_GET['id_user'])){
                    $id_user = $_GET['id_user'];
                    delete_taikhoan($id_user);
                }
                $listtk = loadall_taikhoan();
                include 'taikhoan/list.php';
                break;

            /**controller Bình luận */

            case 'listbl':
                $listbl=loadall_binhluan(0);
                include 'binhluan/list.php';
                break;
            case 'xoabl':
                if(isset($_GET['id'])){
                   $id = $_GET['id'];
                   delete_binhluan($id);
                }
                $listbl=loadall_binhluan(0);
                include 'binhluan/list.php';
                break;
            case 'listThk':
                include 'thongke/list.php';
                break;
            default:
                include 'content.php';
                break;
        }
    }else{
        include 'content.php';
    }
    // include 'content.php';
    include 'footer.php';
?>