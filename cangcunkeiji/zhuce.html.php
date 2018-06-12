<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
 <title>注册界面</title>

 <script type="text/javascript">
 function checkinput()
 //var reg = /^[0-9a-zA-Z]*$/g;//正则表达式，必须是数字或者字母
 var zh = document.getElementById("zhanghao").value;
 var mm = document.getElementById("mima").value;
 var mmconfirm = document.getElementById("pwdconfirm").value;
 {
 if(zh=="")
 {
 alert("请输入用户名");
 zh.focus();
 return false;
 }
 if(!zh.length ==11 ){
 	alert("请输入手机号");
 	myform.name.focus();
 	return false;
 }
 if (mm=="")
 {
 alert("请输入密码");
 mm.focus();
 return false;
 }

 if(mm != mmconfirm){
 alert("你输入的两次密码不一致，请重新输入！");
 mmconfirm.focus();
 return false;
 }

 //if (myform.yzm.value=="")
 //{
 //alert("请输入验证码");
 //myform.yzm.focus();
 //return false;
 //}

 }
 </script>
 <style type="text/css">

 body{background-color: rgba(223, 255, 231, 0.28)
 }
 .container{
 border-radius: 25px;
 box-shadow: 0 0 20px #222;
 width: 380px;
 height: 400px;
 margin: 0 auto;
 margin-top: 200px;
 background-color: rgba(152, 242, 242, 0.23);
 }
 .right {
 position: relative;
 left: 40px;
 top: 20px;

 }
 input{
 width: 180px;
 height: 25px;
 }

 button{
 background-color: rgba(230, 228, 236, 0.93);
 border: none;
 color: #110c0f;
 padding: 10px 70px;
 text-align: center;
 display: inline-block;
 font-size: 16px;
 cursor: pointer;
 margin-top: 30px;
 margin-left: 50px;
 }

 </style>


</head>
<body>
<form action="zhucejiamce.php" method="post" name="myform" onsubmit=" return checkinput();" >
 <div class="container">
 <div class="right">
 <h2>用户注册</h2>

 <p>手 机 号：<input type="text" name="zhanghao" id="zhanghao"   pattern="^1\d{10}$"  ></p>
 <p>密　　码: <input type="password" name="mima" id="mima"></p>
 <p>确认密码: <input type="password" name="pwdconfirm" id="pwdconfirm"></p>
 <p>验 证 码：<input type="text" name="yzm" id="yzm">
 <img src="yanzhengma.php" onClick="this.src='yanzhengma.php?nocache='+Math.random()" style="cursor:hand"></p>
 <p><button type="submit" name="add" value="注册" >立即注册</button></p>
 </div>
 </div>
 </form>
</body>
</html>