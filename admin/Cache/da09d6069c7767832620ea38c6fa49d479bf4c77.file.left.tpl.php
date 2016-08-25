<?php /* Smarty version Smarty-3.0-RC2, created on 2016-08-24 11:07:31
         compiled from "/web/www/medhelper_admin/Tpl/default/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37069603657bd0f73618987-05858588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da09d6069c7767832620ea38c6fa49d479bf4c77' => 
    array (
      0 => '/web/www/medhelper_admin/Tpl/default/left.tpl',
      1 => 1472008048,
    ),
  ),
  'nocache_hash' => '37069603657bd0f73618987-05858588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script src="<?php echo $_smarty_tpl->getVariable('WEBSITEPUBLIC')->value;?>
/javascript/jquery.js"></script>
<link href="<?php echo $_smarty_tpl->getVariable('WEBSITEPUBLIC')->value;?>
/css/css.css" rel="stylesheet" type="text/css">
<script>
$(function() {

    $('table').css('display', 'block');

    $('table').css('width', '200px');

    $('a').css('width', '100%');


    $('.left-a').click(function() {

        $('.left-a').removeClass('selected');

        $(this).addClass('selected');

    })

    $('a').click(function(){

        var module_name = $(this).text()

        $('#top_name').text(module_name)

        console.log(module_name)

    })
})
</script>
<div class="left_background" style='width:200px;background-color: white;border-right: 1px solid #d9dadc'>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table01" style=''>
        <tr>
            <td>
                <!--                    公司模块开始-->
                <table  border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">用户管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree120" style="DISPLAY: none"  border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=user&functionname=user_list" target="mainFrame" class="left-fontSmall">用户信息</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=user&functionname=commect_list" target="mainFrame" class="left-fontSmall">评论信息</a>
                            </div>
                        </td>
                    </tr>
                </table>
<!--
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29" >
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">知识商城管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <table id="subtree124" style="DISPLAY: none" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=shop&functionname=shop_list" target="mainFrame" class="left-fontSmall">知识商城列表</a>
                            </div>
                        </td>
                    </tr>
                </table>
-->
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">订单管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree121" style="DISPLAY: none" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=order&functionname=order_list" target="mainFrame" class="left-fontSmall">订单列表</a>
                            </div>
                        </td>
                    </tr>
                </table>


                <table width="100%" border="0" cellpadding="0" cellspacing="0" class=" zhucaidan " id="table120">
                    <tr>
                        <td height="29">
                            <table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="85%">
                                        <a href="javascript:vold(0)" target="mainFrame" class="left-font03 left-font">医生管理</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table id="subtree121" style="DISPLAY: none" border="0" align="center" cellpadding="0" ellspacing="0" class="left-table03 tableDefault">
                    <tr>
                        <td width="100%">
                            <div class='left-a'>
                                <a style='' href="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=doctor&functionname=doctor_list" target="mainFrame" class="left-fontSmall">医生列表</a>
                            </div>
                        </td>
                    </tr>
                </table>




            </td>
        </tr>
    </table>
</div>
