<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/19
 * Time: 16:37
 */
    define("HOST","localhost");
    define("USER","root");
    define("PASS","");
    define("DBNAME","bbs");
    $link = mysqli_connect(HOST,USER,PASS) or die("数据库连接失败");
    mysqli_set_charset($link,"UTF8");
    mysqli_select_db($link,DBNAME);