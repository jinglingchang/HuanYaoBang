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
	<link href="{$WebSiteUrlPublic}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{$WebSiteUrlPublic}/css/style.css" rel="stylesheet">
   <script src="{$WebSiteUrlPublic}/js/jquery.min.js"></script>
   <script src="{$WebSiteUrlPublic}/js/bootstrap.min.js"></script>
<!--必要样式-->
<link rel="stylesheet" type="textcss" href="{$WebSiteUrlPublic}/css/menu_elastic.css" />
<script src="{$WebSiteUrlPublic}/js/snap.svg-min.js"></script>
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body class="huibg">
<div class="vipcenter">
  <nav class="navbar text-center">
     <button class="topleft" onclick ="javascript:history.go(-1);"><span  class="iconfont icon-fanhui hiscolor"></span></button>
    <a class="navbar-tit center-block">医生招募</a>
    <button class="topnav" id="open-button"></button>
  </nav>
</div>

<div class="lev-warp">
  <table>
  <div class="doc-ti">个人信息</div>
    <tr>
        <td class="lev-td">姓名:</td>
        <td><input type="text" name="xingming" placeholder="请输入您的姓名"></td>
    </tr>
    <tr>
        <td class="lev-td">性别:</td>
        <td>
            <span><input type="radio" name="sex" id="1" />&nbsp;男</span>
            <span class="mf"><input type="radio" name="sex"  id="2" />&nbsp;女</span>
        </td>
    </tr>
    <tr>
        <td class="lev-td">所在医院:</td>
        <td><input type="text" name="yiyuan" placeholder="输入医院 "><td>
    </tr>
    <tr>
        <td class="lev-td">科室:</td>
        <td><input type="text" name="shoushushijian" placeholder="选择科室"></td>
    </tr>
    <tr>
        <td class="lev-td">年薪:</td>
         <td><input type="text" name="shoushushijian" placeholder="输入年薪，单位 元"></td>
    </tr>
    <tr>
        <td class="rt">认证照片:<div class="fontcolor-gray">工作证/医师/药师执照 选一</div></td><td class="textright pr" > <img src="{$WebSiteUrlPublic}/img/camera.png" class="r"></td>
    </tr>

  </table>
  <div class="ggs">
    <div class="ggd">
      <p>招募说明：</p>
      <p>诚恳邀请广大医师加入我们,共建一个术后服务患者的平台。</p>
      <p>咨询热线:4008-008-008</p>
    </div>
  </div>
</div>
<div>
  <button class="lev-button doc-bottom"  onclick="javascript:window.location.href='sqcg'">提交申请</button>
</div>  
</body>
</html>