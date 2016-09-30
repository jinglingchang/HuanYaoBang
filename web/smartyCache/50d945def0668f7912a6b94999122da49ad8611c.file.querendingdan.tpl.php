<?php /* Smarty version Smarty-3.0-RC2, created on 2016-09-24 13:26:32
         compiled from "/Users/Lev/Sites/HuanYaoBang/web/Lib/Homepage/Tpl/Homepage/querendingdan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170209899557e60e88f36dd4-44500519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d945def0668f7912a6b94999122da49ad8611c' => 
    array (
      0 => '/Users/Lev/Sites/HuanYaoBang/web/Lib/Homepage/Tpl/Homepage/querendingdan.tpl',
      1 => 1474461270,
    ),
  ),
  'nocache_hash' => '170209899557e60e88f36dd4-44500519',
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
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
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
     <button class="topleft" onclick ="javascript:history.go(-1);"><span style="    color: #fff;" class="iconfont icon-fanhui"></span></button>
    <a class="navbar-tit center-block">确认订单</a>
    <button class="topnav" id="open-button"></button>
  </nav>
</div>

<div class="lev-warp">
  <table>
    <tr>
        <td class="lev-td">手术信息:</td>
        <td><input type="text" name="shoushuxinxi" placeholder=""></td>
    </tr>
    <tr><td colspan="2" style=" height:0.8em; background: #ebebeb"></td></tr>
    <tr>
        <td class="lev-td">姓名:</td>
        <td><input type="text" name="xingming" placeholder="请输入您的姓名"></td>
    </tr>
    <tr>
        <td class="lev-td">性别:</td>
        <td>
            <span><input type="radio" name="sex" id="1" />&nbsp;男</span>
            <span style=" margin-left: 1em; "><input type="radio" name="sex"  id="2" />&nbsp;女</span>
        </td>
    </tr>
    <tr>
        <td class="lev-td">医院:</td>
        <td><input type="text" name="yiyuan" placeholder="请选择手术医院"></td>
    </tr>
    <tr>
        <td class="lev-td">手术时间:</td>
        <td><input type="text" name="shoushushijian" placeholder="请选择手术时间"></td>
    </tr>
    <tr>
        <td class="lev-td">购买件数:</td>
        <td>2</td>
    </tr>
    <tr>
        <td class="lev-td">服务时间:</td>
        <td><input type="text" name="fuwushijian" placeholder="年 / 月 / 日 / 时间段"></td>
    </tr>
    <tr>
        <td class="lev-td">地址:</td>
        <td><input type="text" name="dizhi" placeholder="省 / 市 / 区"></td>
    </tr>
    <tr>
      <td class="lev-td">详细地址:</td>
      <td><input type="text" name="xiangxidizhi" placeholder="请填写详细地址"></td>
    </tr>
    <tr><td colspan="2" style=" height:0.8em; background: #ebebeb"></td></tr>
    <tr>
        <td class="lev-td">药包费用:</td>
        <td><input type="text" name="yaobaofeiyong" placeholder=""></td>
    </tr>
    <tr>
        <td class="lev-td">预付:</td>
        <td><input type="text" name="yufu" placeholder=""></td>
    </tr>
  </table>
</div>
<div>
  <button class="lev-button" onclick="javascript:window.location.href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/homepage/zhifujieguo'" >支付定金50元</button>
</div>
<div style=" height:3em"></div>

</body>
</html>