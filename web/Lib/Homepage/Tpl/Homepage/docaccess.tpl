<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_1459473269_4751618.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="css/menu_elastic.css" />
<link rel="stylesheet" type="text/css" href="css/star.css" />
<script src="js/snap.svg-min.js"></script>
<script src="js/star.js"></script>
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body class="huibg">
<div class="vipcenter">

  <nav class="navbar text-center">
     <button class="topleft" onclick ="javascript:history.go(-1);"><span  class="iconfont icon-fanhui hiscolor"></span></button>
    <a class="navbar-tit center-block">评价医生</a>
    <button class="topnav" id="open-button"></button>
  </nav>
</div>
<table class="seleho-tabw"  id="docaccess">
  <tr >
    <td>准时程度</td>
    <td> 
    <input id="zhunshi" name="serving" value="0" type="hidden">
    <input id="zhuanye" name="zhuanye" value="0" type="hidden">
    <input id="service" name="service" value="0" type="hidden">
    <input id="colligate" name="colligate" value="0" type="hidden">
      <div>
        <span class="Select"> 
          <a onMouseOver="javascript:setProfix('star_');showStars(1,'zhunshi');"
          onMouseOut="javascript:setProfix('star_');clearStars('zhunshi');" href="javascript:setProfix('star_');setStars(1,'zhunshi');">
          <img id="star_1"  src="img/icon_star_1.gif"></a>

          <a onMouseOver="javascript:setProfix('star_');showStars(2,'zhunshi');"
          onMouseOut="javascript:setProfix('star_');clearStars('zhunshi');"
          href="javascript:setProfix('star_');setStars(2,'zhunshi');">
          <img id="star_2"  src="img/icon_star_1.gif"></a>

          <a onMouseOver="javascript:setProfix('star_');showStars(3,'zhunshi');" onMouseOut="javascript:setProfix('star_');clearStars('zhunshi');"
          href="javascript:setProfix('star_');setStars(3,'zhunshi');">
          <img id="star_3"  src="img/icon_star_1.gif"></a>

          <a onMouseOver="javascript:setProfix('star_');showStars(4,'zhunshi');" onMouseOut="javascript:setProfix('star_');clearStars('zhunshi');" 
          href="javascript:setProfix('star_');setStars(4,'zhunshi');">
          <img id="star_4"  src="img/icon_star_1.gif"></a>

          <a onMouseOver="javascript:setProfix('star_');showStars(5,'zhunshi');"
          onMouseOut="javascript:setProfix('star_');clearStars('zhunshi');" href="javascript:setProfix('star_');setStars(5,'zhunshi');">
          <img id="star_5" src="img/icon_star_1.gif"></a>
        </span>
      </div>
    </td>
  </tr> 


  <tr >
    <td>专业程度</td>
    <td> 
      <span class="Select"> 
        <a onMouseOver="javascript:setProfix('zhuanye_');showStars(1,'zhuanye');" 
        onMouseOut="javascript:setProfix('zhuanye_');clearStars('zhuanye');"
         href="javascript:setProfix('zhuanye_');setStars(1,'zhuanye');">
         <img id="zhuanye_1" src="img/icon_star_1.gif"></a>
         
        <a onMouseOver="javascript:setProfix('zhuanye_');showStars(2,'zhuanye');"
         onMouseOut="javascript:setProfix('zhuanye_');clearStars('zhuanye');" 
         href="javascript:setProfix('zhuanye_');setStars(2,'zhuanye');">
         <img id="zhuanye_2"  src="img/icon_star_1.gif"></a>
         
        <a onMouseOver="javascript:setProfix('zhuanye_');showStars(3,'zhuanye');" 
        onMouseOut="javascript:setProfix('zhuanye_');clearStars('zhuanye');" 
        href="javascript:setProfix('zhuanye_');setStars(3,'zhuanye');">
        <img id="zhuanye_3"  src="img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('zhuanye_');showStars(4,'zhuanye');" 
        onMouseOut="javascript:setProfix('zhuanye_');clearStars('zhuanye');" 
        href="javascript:setProfix('zhuanye_');setStars(4,'zhuanye');">
        <img id="zhuanye_4"  src="img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('zhuanye_');showStars(5,'zhuanye');" 
        onMouseOut="javascript:setProfix('zhuanye_');clearStars('zhuanye');" 
        href="javascript:setProfix('zhuanye_');setStars(5,'zhuanye');">
        <img id="zhuanye_5"  src="img/icon_star_1.gif"></a> 
      </span>
    </td>
  </tr>

  <tr>
    <td>服务态度</td>
    <td> 
      <span class="Select"> 
        <a onMouseOver="javascript:setProfix('service_');showStars(1,'service');" 
        onMouseOut="javascript:setProfix('service_');clearStars('service');"
         href="javascript:setProfix('service_');setStars(1,'service');">
        <img id="service_1" src="img/icon_star_1.gif"></a>        
        <a onMouseOver="javascript:setProfix('service_');showStars(2,'service');" 
        onMouseOut="javascript:setProfix('service_');clearStars('service');"
         href="javascript:setProfix('service_');setStars(2,'service');">
         <img id="service_2"  src="img/icon_star_1.gif"></a>         
         <a onMouseOver="javascript:setProfix('service_');showStars(3,'service');" 
         onMouseOut="javascript:setProfix('service_');clearStars('service');"
          href="javascript:setProfix('service_');setStars(3,'service');">
         <img id="service_3"  src="img/icon_star_1.gif"></a>         
         <a onMouseOver="javascript:setProfix('service_');showStars(4,'service');" 
         onMouseOut="javascript:setProfix('service_');clearStars('service');"
          href="javascript:setProfix('service_');setStars(4,'service');">
         <img id="service_4"  src="img/icon_star_1.gif"></a>         
         <a onMouseOver="javascript:setProfix('service_');showStars(5,'service');" 
         onMouseOut="javascript:setProfix('service_');clearStars('service');" 
         href="javascript:setProfix('service_');setStars(5,'service');">
         <img id="service_5" src="img/icon_star_1.gif"></a> </span>
    </td>
  </tr>
  <tr class="myor-a">
    <td>综合评分</td>
    <td ><div class="fontcolor-red ">3.5分</div></td>
  </tr>

</table>


<div class="myor-a"> 
  <textarea rows="3" cols="20" class="docaccess-textarea">
    李医生很棒   
  </textarea>
</div>
<div>
  <button class="lev-button doc-bottom" onclick="javascript:window.location.href='docaccessdetail.html'">提交评价</button>
</div>



<script src="js/classie.js"></script>
<script src="js/main3.js"></script>
</body>
</html>

