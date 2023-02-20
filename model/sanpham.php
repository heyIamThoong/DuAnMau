<?php
    function add_sanpham($tensp,$giasp,$img,$mota,$iddm){
        $sql="insert into sanpham(name_sp,price,img,mota,iddm) values('$tensp','$giasp','$img','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($idsp){
        $sql = "delete from sanpham where idsp =".$idsp;
        pdo_execute($sql);
    }
    function loadall_sanpham_top10(){
        $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home(){
        $sql = "select * from sanpham where 1 order by idsp desc limit 0,9";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name_sp like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }else{

        }
        $sql.=" order by idsp ASC";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_danhmuc_name($iddm){
        if($iddm>0 ){
            $sql = "select * from danhmuc where id =".$iddm;
        $name_dm= pdo_query_one($sql);
        extract($name_dm);
        return $name;
        }else{
            return "";
        }
    }
    function loadone_sanpham($idsp){
        $sql = "select * from sanpham where idsp =".$idsp;
        $sp= pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai($iddm,$idsp){
        $sql = "select * from sanpham where iddm = '.$iddm.' and idsp <> ".$idsp;
        $listsanpham = pdo_query($sql);
        // var_dump($listsanpham);
        // die();
        return $listsanpham;
    }
    function update_sanpham($idsp,$iddm,$tensp,$giasp,$img,$mota){
        if($img !="")
            $sql="update sanpham set iddm = '".$iddm."', name_sp= '".$tensp."', price = '".$giasp."', img= '".$img."', mota='".$mota."'  where idsp=".$idsp;
        else
            $sql="update sanpham set iddm = '".$iddm."', name_sp= '".$tensp."', price = '".$giasp."', mota='".$mota."' where idsp=".$idsp;
        pdo_execute($sql);
        // var_dump($sql);
        // die();
    }
?>