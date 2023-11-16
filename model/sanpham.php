<?php
    function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm,$brand_id ){
        $sql = "insert into product(name,mota,price,iddm,brand_id) values('$tensp','$mota','$giasp','$hinh','$iddm','$brand_id')";
        pdo_execute($sql);
    }
    function xoa_sanpham($product_id){
        $sql = "delete from product where product_id=".$product_id;
        pdo_execute($sql);
    }
    // function loadall_sanpham_top5(){
    //     $sql = "select * from  product where 1 order by luotxem desc limit 0,5 ";
        
    //     $listsanpham= pdo_query($sql);
    //     return $listsanpham;
    // }
    function loadall_sanpham_home(){
        
        $sql = "select * from  product order by product_id desc limit 0,9 ";
        $listsanpham= pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($kyw ="", $iddm= 0){
        $sql = "select * from  product where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham= pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql ="select * from danhmuc where id=".$iddm;
            $dm= pdo_query_one($sql);
            extract($dm);
            return $dm;
        }else{
            return "";
        }
    }   
    function loadone_sanpham($id){
        $sql ="select * from sanpham where id=".$id;
        $sp= pdo_query_one($sql);
        return $sp;
    }   
    function loadone_sanpham_cungloai($id,$iddm){
        $sql ="select * from sanpham where iddm=".$iddm." AND id <>".$id;
        $listsanpham= pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id,$iddm,$tensp,$giasp,$motasp,$hinh){
        if($hinh!="")
            $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."',  price='".$giasp."', mota='".$motasp."', img='".$hinh."' where id=".$id;
        else
            $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."',  price='".$giasp."', mota='".$motasp."' where id=".$id;
        pdo_execute($sql);
    }
