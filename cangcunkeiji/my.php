<?php  
session_start();  
  
//检测是否登录，若没登录则转向登录界面  
if(!isset($_SESSION['zhanghao'])){  
    header("Location:login.html");  
    exit();  
}  
//包含数据库连接文件  
include('conn.php');  
$zhanghao = $_SESSION['zhanghao'];  
$mima = $_SESSION['mima'];  
$user_query = mysqli_query("$conn","select * from hou_login where zhanghao = '$zhanghao' limit 1");  
$row = mysqli_fetch_array($user_query);  
echo '用户信息：<br />';  
echo '用户ID：',$hanghao,'<br />';  
echo '用户名：',$mima,'<br />';  
echo '<a href="login.php?action=logout">注销</a> 登录<br />';  
?> 