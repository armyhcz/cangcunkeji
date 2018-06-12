
<table>
<tr align="left" bgcolor="#cccccc">
	<th>id</th><th>商品</th><th>价格</th><th>购买</th>
</tr>
<?php
   
   $keywords = ($_GET['keywords']);
   $con = mysqli_connect("127.0.0.1","root","123","hou") or die("数据库链接错误".mysql_error()); 
   mysqli_query($con,"SET NAMES 'utf8'");
    mysqli_query($con,"SET CHARACTER SET utf8"); 
   // $sql=mysqli_query($con,  "SELECT * FROM `hou_commodity`");
    $sql=mysqli_query($con,  "SELECT * FROM hou_commodity WHERE  name like            '%$keywords%'");
    //$result = mysqli_query($con,$sql);
    $datarow = mysqli_num_rows($sql); //长度
            //循环遍历出数据表中的数据
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysqli_fetch_assoc($sql);
                $id = $sql_arr['id'];
                $name = $sql_arr['name'];
                $price = $sql_arr['price'];
                $path = $sql_arr['path'];
                echo '<tr>';
                echo '<td>'.$id.'</td>';
                 echo '<td>'.$name.'</td>';
                  echo '<td>'.$price.'</td>';
                echo   '<td><a href="goumai.php?id='.$id.'">购买</a>';
                 
            }
?>
</table>