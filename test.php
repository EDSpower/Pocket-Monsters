<?php


    $link = mysqli_connect('127.0.0.1','root','123456','itcast');
    $sql = "select * from test";
    $res = mysqli_query($link,$sql);
    $arr = mysqli_fetch_all($res,1);
    mysqli_close($link);
