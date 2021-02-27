<?php

    // 商品数量更改的时候让后端数据库同时更新

    $id = $_GET['goods_id'];
    $num = $_GET['goods_num'];
    $username = $_GET['username'];

    $con = mysqli_connect('localhost','root','123456','vivo');

    $sql = "UPDATE `car` SET `goods_num` = '$num' WHERE `userName`= '$username' AND `goods_id` = '$id'";

    $res = mysqli_query($con,$sql);

    if(!$res){
        die('数据库链接失败'  . mysqli_error($con));
    }

    print_r(json_encode(array('code'=>$res,'msg'=>'修改成功'),JSON_UNESCAPED_UNICODE));

?>