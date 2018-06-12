
<?php   
  

  $zhanghao = ($_POST['zhanghao']);  
  $mima = ($_POST['mima']); 
  $con=mysqli_connect("127.0.0.1","root","123","hou")or die("数据库链接错误".mysql_error());
  $sql = "INSERT INTO `hou_zhanghao` (`zhanghao`, `mima`) VALUES ('$zhanghao', '$mima'); ";
  $result=mysqli_query($con,$sql);
    if($result) echo  "注册成功";
  //if(!mysqli_query($sql,$con)){
 //  die('Error: ' .mysqli_error()) ;
 // }
    //echo "k";
  mysqli_close($con);
 //$con=mysqli_connect("127.0.0.1","root","123","hou")or die("数据库链接错误".mysql_error());
  //   
  //   $sql = "INSERT INTO hou_login(zhanghao, mima)";
  //   $result = mysqli_query($sql);
  //   if($result && mysqli_affected_rows($conn) > 0 ){
 //}
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
      <a href="index.php">点击进入主页</a>
  </body>
  </html>>