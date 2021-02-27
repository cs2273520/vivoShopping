<?php


    // 连接数据库
    $con = mysqli_connect('localhost','root','123456','vivo');
    // 起始页
    $start = $_GET['start'];
    // 一页中显示的商品数量
    $len = $_GET['len'];


    $s = ($start-1)*$len;
  

    $sql = "SELECT * FROM `goods` LIMIT $s,$len";


    $res = mysqli_query($con,$sql);


    if(!$res){
        die('error' . mysqli_error());
    }
    // 数据解析
    $dataArr = array();
    $row = mysqli_fetch_assoc($res);
    while($row){
        array_push($dataArr,$row);
        $row = mysqli_fetch_assoc($res);
    }
    // row得到的是当前请求的数据个数
    
    
    $sql2 = "SELECT COUNT(*) `count` FROM `goods`";
    $res2 = mysqli_query($con,$sql2);
  
    if (!$res2) {
      die('error for mysql: ' . mysqli_error());
    }
    $row2 = mysqli_fetch_assoc($res2);

    // 将数据返回前端

    echo json_encode(array(
      "total" => $row2['count'],
      "list" => $dataArr,
      "code" => 1,
      "message" => "获取列表数据成功"
    ));
?>