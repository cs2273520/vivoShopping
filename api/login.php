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
    // 没有匹配的数据 登录失败
    echo json_encode(array(
      "code" => 0,
    ));
  } else {
    // 有匹配的数据 登录成功
    echo json_encode(array(
      "code" => 1,
    ));
  }

?>
