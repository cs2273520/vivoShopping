<?php

$con = mysqli_connect('localhost','root','123456','vivo');


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM `userlist` WHERE `username`='$username' AND `password`='$password'";

$res = mysqli_query($con,$sql);

if (!$res) {
    die('error for mysql: ' . mysqli_error());
  }

  $row = mysqli_fetch_assoc($res);


  if (!$row) {
    // 没有匹配的数据则添加用户名
    $addUser = "INSERT INTO `userlist` VALUES (null, '$username', '$password')";

    $addRes = mysqli_query($con,$addUser);

    echo json_encode(array(
      "code" => 0,
      "message" => "用户名可以注册"
    
    ));
  } else {
    // 有匹配的数据 用户名已经存在
    echo json_encode(array(
      "code" => 1,
      "message" => "用户名已存在"
    ));
  }
