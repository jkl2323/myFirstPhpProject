<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/15
 * Time: 12:42
 */

    require "config.php";
    $username=$_POST['user'];
    $password=$_POST['password'];
    echo "账号:".$username."用户名".$password;
//if(!empty($username)&&!empty($password)){

//    $sql="SELECT * FROM `user` WHERE userName='{$username}'AND `password`='{$password}'";
//    $result = mysqli_query($link,$sql);
//    if(mysqli_num_rows($result)>0){
//        echo "<script>alert('登陆成功');window.location='../list.html'</script>";
//    }else{
//        echo "<script>alert('登陆失败,用户名或密码错误');window.location='./login.php'</script>";
//    }
//}else{
//    echo "<script> alert('用户名或密码不能为空');window.location='./login.php'</script>";
//}
