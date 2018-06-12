<?php 
//注销登录  
if($_GET['action'] == "logout"){  
    unset($_SESSION['id']);  
    unset($_SESSION['zhanghao']);  
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';  
    exit;  
} 
//登录  
if(!isset($_POST['submit'])){  
    exit('非法访问!');  
}  
//error_reporting(0);
//$zhanghao = htmlspecialchars($_POST['zhanghao']);  
//$mima = MD5($_POST['mima']);  
$zhanghao = ($_POST['zhanghao']);  
$mima = ($_POST['mima']); 
  
//包含数据库连接文件  0
//include('conn.php');
 $conn = mysqli_connect("127.0.0.1","root","123","hou") or die("数据库链接错误".mysql_error()  );
//检测用户名及密码是否正确  
//$check_query = mysqli_query($conn,"select zhanghao from hou_zhanghao where  zhanghao='$zhanghao'     mima='$mima'      limit 1");  
//if($result == mysqli_fetch_array($check_query,MYSQLI_BOTH)){ 
    //if($check_query){
     //比较账号密码都正确的是都在数据库中存在 
      $sql = "select zhanghao from hou_zhanghao where zhanghao='$zhanghao' and mima='$mima'";   
      $r =mysqli_query($conn,$sql);
   // $res = mysqli_num_rows($r);
      if(mysqli_num_rows($r)==1){
     $row = mysqli_fetch_array($r);
 //选出账号对应的密码，比较是否正确
  //  $sql="select * from hou_zhanghao where zhanghao='$zhanghao'";  
   //$rs=mysqli_query($sql,$conn); //执行sql查询
   //$num=mysqli_num_rows($rs); //获取记录数
  // $row=mysql_fetch_array($rs);
  // if($mim===$row['mima']){ //对密码进行判断。

  //登录成功  
    session_start();  
    $_SESSION['zhanghao'] = $row['zhanghao'];  
 //   $_SESSION['mima'] = $result['mima'];  
    echo $zhanghao,' 欢迎你！进入 <a href="2.php">主页</a><br />';  
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';  
    exit;  
} else {  
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');  
}  
?>