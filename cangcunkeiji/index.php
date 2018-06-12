
<!DOCTYPE HTML>

<html>
<head>
    <meta http-equiv="x-ua-compatible" content="IE=7,8,9" >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>侯成泽</title>
             <!-- 网页简介，让搜索引擎搜素 版权-->

        <meta name="keywords" content="商城">
        <meta name="description" content="商城。">
        <meta name="author" content="hcz">
        <meta name="copyright" content="hcz">

        <!-- 120秒刷新 -->
        <meta http-equiv="refresh" content="120"> 
        <meta property="og:url" content="http://cangcunkeji.cn/">    
        <link href="favicon.ico" rel="shortcut icon">
        <link href="default.css" rel="stylesheet">
        <script src="frontJs.js"></script>
</head>
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
    <a href="/"></a>
    
    </div>
    <div class="span5" id="shop_top_search">
    <form method="get" class="form-search" action="search.php">
        <div class="input-append span12">
            <input type="text" class="search-query span9" name="keywords" value="" placeholder="简简单单搜索">  <button type="submit" class="btn">商品搜索</button>
        </div>
    </form>
    </div>
</div>

<div class="row-fluid" id="shop_header_menu">
	<div class="span10 offset1">
    	<ul>
    		<li class="active"><a href="index.php">首页</a></li>
    		    	</ul>
	</div>
</div><div class="row-fluid">
    <div class="span10 offset1" id="shop_hot_keywords">
        &nbsp;热门关键词：
            	<a href="search?keywords=手机">手机</a>&nbsp;&nbsp;
    	    	<a href="search?keywords=平板">平板</a>&nbsp;&nbsp;
    	    	<a href="search?keywords=iphone">iphone</a>&nbsp;&nbsp;
    	    	<a href="search?keywords=眼镜">眼镜</a>&nbsp;&nbsp;
    	    </div>
</div>
<div id="index_body">
<div class="row-fluid">
	<div class="row span2 offset1">
        <div class="index-left-class">
            <ul class="nav nav-list">
                <li class="all-class">商品分类</li>
                
                            </ul>
        </div>
    </div>

    <div class="row span8">
		<div class="columns"><div id="myCarousel1515142819" class="well carousel slide" style="padding: 0 0 0 0;">
            <div class="carousel-inner">
            
            <div class="active item">
            <a target="_blank" href="goumai.php?id=1"><img src="images/1.jpg"></a>
                <div class="carousel-caption">
                  <p>广告图片1</p>
                </div>
            </div>
            
            <div class="item">
            <a target="_blank" href="goumai.php?id=2"><img src="images/2.png"></a>
                <div class="carousel-caption">
                  <p>广告图片2</p>
                </div>
            </div>
            
            <div class="item">
            <a target="_blank" href="goumai.php?id=3"><img src="images/3.png"></a>
                <div class="carousel-caption">
                  <p>广告图片3</p>
                </div>
            </div>
            
            <div class="item">
            <a target="_blank" href="goumai.php?id=4"><img src="images/4.png"></a>
                <div class="carousel-caption">
                  <p>广告图片4</p>
                </div>
            </div>
            
            <div class="item">
            <a target="_blank" href="goumai.php?id=5"><img src="images/5.png"></a>
                <div class="carousel-caption">
                  <p>广告图片5</p>
                </div>
            </div>
            
            </div>
            <a class="carousel-control left" href="#myCarousel1515142819" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel1515142819" data-slide="next">&rsaquo;</a>
            </div></div>     <!-- 右侧热门商品 -->
     
    </div>

</div>

  <!--  推荐商品 -->
 
<div class="row-fluid" style="margin-bottom:10px;">
	<div class="span10 offset1">
	 <a target="_blank" href="goumai.php?id=6"><img src="images/6.png" border='0' class="span12" /></a>
	</div>
</div>
   <!-- 最新商品 -->
 
<div class="row-fluid"  style="margin-bottom:10px;">
	<div class="span10 offset1">
	<a target="_blank" href="goumai.php?id=7"><img src="images/7.png" border='0' class="span12" /></a>
	</div>
</div>
   <!--  特价商品 -->
      
</div>
</div>
<!--
<div class="footer">
<p align="center" style="padding-bottom:8px;padding-top:8px;">Copyright &copy;2012-2018  <a href="http://www.dbshop.net/" target="_blank" style="color:#FFF">DBShop</a> 版权所有<br /></p>
</div>
<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <h3>DBShop电子商务系统 提示</h3>
  </div>
  <div class="modal-body">
    <p id="message_show"></p>
  </div>
  <div class="modal-footer" id="message_url">
  </div>
</div>
<script>
    /*悬浮停留提示封装*/
    $('.shop_admin_help_note').popover({trigger:'hover',html:true});
</script>


<style type="text/css">
    .go-top{position:fixed;width:40px;bottom:15%;right:0;z-index:890;}
    .go-top .go-top-box{width:100%;margin-bottom:3px;background:#d9d9d9;text-align:center;}
    .go-top .go-top-box a{display:block;height:35px;padding-top:5px;}
    .go-top .go-top-box a:hover{background:#777777;text-decoration:none;}
    .go-top .go-top-box a:hover .asid_title,.go-top .go-top-box .asid_title{color:#fff;font-size:12px;display:block;padding-left:6px;line-height:18px;width:30px;margin-top:-2px;}
</style>
<div class="go-top" id="go-top">
    <div class="go-top-box relative" style="display:none;">
        <a href="#"><img alt="返回顶部" title="返回顶部" class="adid_icon" src="/public/img/icon_back.png"></a>
    </div>
</div>
<script>
    (function(e){e.fn.hhShare=function(t){var n={cenBox:"go-top-box",icon:"adid_icon",addClass:"red_bag",titleClass:"asid_title",triangle:"asid_share_triangle",showBox:"asid_sha_layer"},r=e.extend(n,t);this.each(function(){var t=e(this),n=e("."+r.cenBox).last();n.hide(),e("."+r.triangle+","+"."+r.showBox).hide(),e("."+r.cenBox).live({mouseenter:function(){var t=e(this).find("."+r.icon),n=e(this).find("."+r.icon).attr("alt");t.hide(),e(this).addClass(r.addClass),e(this).children("a").append('<b class="'+r.titleClass+'">'+n+"</b>"),e(this).find("."+r.triangle+","+"."+r.showBox).show()},mouseleave:function(){var t=e(this).find("."+r.icon),n=e(this).find("."+r.icon).attr("alt");t.show(),e(this).removeClass(r.addClass),e(this).find("."+r.titleClass).remove(),e(this).find("."+r.triangle+","+"."+r.showBox).hide()}}),e(window).scroll(function(){e(window).scrollTop()>100?n.fadeIn():n.fadeOut()}),n.click(function(){return e("body,html").animate({scrollTop:0},500),!1})})}})(jQuery);
    $(function(){
        $('#go-top').hhShare({
            icon       : 'adid_icon'
        });
    });
</script>-->
</body>
</html>
