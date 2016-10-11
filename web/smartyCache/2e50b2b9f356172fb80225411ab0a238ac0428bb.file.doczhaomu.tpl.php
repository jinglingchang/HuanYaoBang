<?php /* Smarty version Smarty-3.0-RC2, created on 2016-10-11 10:35:32
         compiled from "C:\wamp\www\hybbbb\web/Lib/Homepage/Tpl/Homepage/doczhaomu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1020357fc4ff43c2396-63899520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e50b2b9f356172fb80225411ab0a238ac0428bb' => 
    array (
      0 => 'C:\\wamp\\www\\hybbbb\\web/Lib/Homepage/Tpl/Homepage/doczhaomu.tpl',
      1 => 1476152444,
    ),
  ),
  'nocache_hash' => '1020357fc4ff43c2396-63899520',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
	<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/style.css" rel="stylesheet">
   <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/jquery.min.js"></script>
   <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/bootstrap.min.js"></script>
<!--必要样式-->
<link rel="stylesheet" type="textcss" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/menu_elastic.css" />
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/snap.svg-min.js"></script>
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

  </table>
</div>

<div class="doc-up">
    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/img/u1305.png" class="doc-uppic" title="上传图片">
</div>
<div>
  <button class="lev-button doc-bottom"  onclick="javascript:window.location.href='zhifujieguo'">提交申请</button>
</div>  
</body>
</html>