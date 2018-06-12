
<?php   
  
 $conn = mysqli_connect("127.0.0.1","root","123","hou") or die("数据库链接错误".mysql_error());  
            // mysqli_select_db($conn,"hou") or die("数据库访问错误".mysql_error());
 // $sql="SELECT id,zhanghao,mima FROM hou_login";  
 // $result = mysqli_query("$conn","sql");

 //return  mysqli_fetch_array($result);  




  function getModelList($result){
  $sql = "SELECT id,zhanghao,mima FROM hou_login";   // SQL临时变量

  // 读入SQL脚本文件
  $fileHandle = fopen("sql/sidebar.sql","r");
 while(!feof($fileHandle)){
    $sql = $sql.fgets($fileHandle);
  }

  // 执行查询，并放入结构数组中
 return $result->query($sql)->fetchAll(PDO::FETCH_BOTH);
}
?> 