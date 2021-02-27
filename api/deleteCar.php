<?php
    $username = $_GET['username'];
    $id = $_GET['goods_id'];

    $con = mysqli_connect('localhost','root','123456','vivo');

    // 删除对应用户的goods_id
    $sql = "DELETE FROM `car` WHERE `userName` = '$username' AND `goods_id`='$id'";


    $res = mysqli_query($con,$sql);


    if(!$res){
        die('数据库链接错误' . mysqli_error($con));
    }

    print_r(json_encode(array('code'=>$res,'msg'=>'删除成功'),JSON_UNESCAPED_UNICODE));
?>