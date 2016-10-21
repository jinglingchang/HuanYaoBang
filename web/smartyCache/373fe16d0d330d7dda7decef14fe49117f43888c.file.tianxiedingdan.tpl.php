<?php /* Smarty version Smarty-3.0-RC2, created on 2016-10-20 10:20:32
         compiled from "/Users/Lev/Sites/HuanYaoBang/web/Lib/Homepage/Tpl/Homepage/tianxiedingdan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1839011046580829f0e7e869-62961834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '373fe16d0d330d7dda7decef14fe49117f43888c' => 
    array (
      0 => '/Users/Lev/Sites/HuanYaoBang/web/Lib/Homepage/Tpl/Homepage/tianxiedingdan.tpl',
      1 => 1476597538,
    ),
  ),
  'nocache_hash' => '1839011046580829f0e7e869-62961834',
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
    <a class="navbar-tit center-block">填写订单</a>
    <button class="topnav" id="open-button"></button>
  </nav>
</div>
<div id="bg" style="display: none;  position: absolute;  top: 0%;  left: 0%;  width: 100%;  height: 100%;  background-color: black;  z-index:1001;  -moz-opacity: 0.7;  opacity:.70;  filter: alpha(opacity=70);"></div>
<div id="show"   style="display: none;  position: absolute;  top: 25%;  left: 15%;  width: 69%;  height: 49%;  padding: 8px;  border: 8px solid #E8E9F7;  background-color: white;  z-index:1002;  overflow: auto;">

   <p style="color: #2a6496;">单件换药包</p>
   <p>200元（一个药包只能用于一次换药）</p>
   <p style="color: #2a6496;">优惠信息</p>
   <p>2件9.5折,3件9折</p>
   <p style="color: #2a6496;">换药须知</p>
   <p>1.建议购买件数：（一个药包只能用于一次换药）,有最低购买数量限制。</p>
   <p>2.根据自身情况,填写需购买换药包件数：①每2~3天换药;②根据不同部位，计算不同拆线时间;③一个换药包只能用于一次换药;</p>
   <div style="text-align: center;margin-top: 20px;width: 100%;"><button style="width: 60%;background-color: #78cdd4;border-radius: 8px;"  onclick="hidediv()">关闭</button></div>
</div>
<div class="lev-warp">
  <table>
    <tr>
        <td class="lev-td">手术信息:</td>
        <td><input type="text" name="shoushuxinxi" placeholder=""  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/homepage/shoushu'"></td>
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
<div class="row-div">
    <input type="checkbox" name="fuwuxieyi" value=""><a onclick="showdiv();"> 《换药帮服务协议》</a>
</div>

<div>
  <button class="lev-button" onclick="javascript:window.location.href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/homepage/querendingdan'">提交订单</button>
</div>
<div style=" height:3em"></div>

</body>
<script type="text/javascript">
    function showdiv() {            
        $('#bg').css('display','block');
        $('#show').css('display','block');
    }
    function hidediv() {
        $('#bg').css('display','none');
        $('#show').css('display','none');
    }
</script>
</html>