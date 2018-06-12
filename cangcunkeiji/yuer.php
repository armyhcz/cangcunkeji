<?php
$con = mysqli_connect("127.0.0.1","root","123","hou") or die("数据库链接错误".mysql_error());
  session_start(); 
  $zhanghao=$_SESSION['zhanghao'];
//echo "$_GET[path]";
$yuer = ($_GET['yuer']);
//echo "$price";
//echo "$yuer";
//require_once "goumai.php";
    //    echo $yuer." world!";
//echo   $_GET['yuer'];
 $sql ="UPDATE hou_money SET yuer = '$yuer' WHERE zhanghao = '$zhanghao'"; 
$result=mysqli_query($con,$sql);
if($result && mysqli_affected_rows() > 0){
    echo "cc";
}
?>
<html>
    <body>
        <td>您的余额为：<?php echo "$yuer"; ?></td>


    </body>
</html>
