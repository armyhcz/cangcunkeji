<?php
//$price = ($_GET['price']);
//echo "$price";
$shangpinid = ($_GET['id']);
//echo "$i";

//连接数据库//
$con = mysqli_connect("127.0.0.1","root","123","hou") or die("数据库链接错误".mysql_error());
//根据上一个月面传来的商品id搜索查到余额
  $sqli="SELECT * FROM hou_commodity WHERE id= '$shangpinid'";
  $resulti=mysqli_query($con,$sqli);
  $r = mysqli_fetch_assoc($resulti);{
    $price=$r["price"];
  }
  //获得账号信息搜索账号的id，余额，收货地 址
  session_start(); 
  $zhanghao=$_SESSION['zhanghao'];
  //
  $sql="SELECT * FROM hou_money WHERE zhanghao ='$zhanghao' ";
  $result=mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  if($row==null){
    $money=您没有进行充值点此处进行充值;
  }else{
  $id=$row["id"];
  $zhanghao=$row["zhanghao"];
  $money=$row["money"];
  $dizhi=$row["dizhi"];
}
  //echo "$id";
 // echo "$zhanghao";
   $yuer=$money-$price;
   //if($_GET["action"]  == "yuer"){
    //echo  "<a href='yuer.php?price='.$price.''>test</a>";
   // include "yuer.php";
   //}
   
mysqli_close($con);
?>
<link href="default.css" rel="stylesheet">
<body id="hcz-body">
<div class="row-fluid shop_header" id="shop_header">
            <div class="span3 offset1">
                    </div>
        <div class="span7 shop_header_right">
            <ul class="db-nav">
                 <li class="item"><a href="/cart">购物车<span class="badge badge-success" id="top_cart" style="margin:0;display:none;">0</span> </a></li>
                <li class="item split"></li>
                <li class="item"><a href="/home">用户中心</a></li>
                <li class="item split"></li>
                <li class="item"><a href="/home/order">我的订单</a></li>
                <li class="item split"></li>
                <li class="item"><a href="login.html">登录</a></li>
        
                <li class="item split"></li>
                <li class="item"><a href="zhuce.html">注册</a> 
                <li class="item split"></li>
            </ul>
        </div>
    </div>
   
 
<div class="row-fluid">
	<div class="span5 offset1" id="shop_logo_img">
    <a href="/"><img src="/public/upload/common/shop_logo.png" border="0"></a>
    
    </div>
    <div class="span5" id="shop_top_search">
    <form method="get" class="form-search" action="search">
        <div class="input-append span12">
            <input type="text" class="search-query span9" name="keywords" value="" placeholder="简简单单搜索">  <button type="submit" class="btn">商品搜索</button>
        </div>
    </form>
    </div>
</div>

<div class="row-fluid" id="shop_header_menu">
	<div class="span10 offset1">
    	<ul>
    		<li class="active"><a href="/">首页</a></li>
    		    	</ul>
	</div>
</div>

   <div class="na">
    <li class="item"><a href="/cart"><?php session_start(); echo  "".$_SESSION['zhanghao'];?>你好，您的账户余额为：<?php echo "$money";?><span class="badge badge-success" id="top_cart" style="margin:0;display:none;">0</span> </a></li>
            
                <li class="item"><a href="/home">商品价格：<?php echo "$price" ?></a></li>
                 <li class="item"><a href="yuer.php?row='.$row.'">加入购物车</a></li></li>
                <li class="item"><a href="<?php echo"yuer.php?yuer=".$yuer?>">立即购买</a>||<a href="/home/order">第三方支付</a></li>
                 <html>

 

              
    