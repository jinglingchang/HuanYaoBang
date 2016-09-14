<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-14 17:57:03
         compiled from "/private/var/www/html/employer_tool/Public/html//multPage/_header_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319893105575fd4ef686702-09564794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7c05f1e855eb6d16d28a078ffb30b333f5db39b' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//multPage/_header_1.tpl',
      1 => 1465816493,
    ),
  ),
  'nocache_hash' => '319893105575fd4ef686702-09564794',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!-- 菜单栏 -->

<script>
    var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
';
    header.setUrl(url);
</script>

<div class='header'>
    <div style=" width: 1200px; margin: 0 auto">
        <div class='Floatleft' onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
homepage/index'" style='width:144px;'>
            <div style='height:18px;'></div>
            <img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/home/logo.png' 
                 style='width:144px; margin-top: -5px;cursor: pointer;'></div>
            <?php if ($_smarty_tpl->getVariable('user_id')->value>0){?>
            <!--         <div class='Floatleft header_font_css' 
                         style='color:#fff; font-size: 16px;margin-left: 35px;'>
                        <div style='width:50px;height:1.5px;margin:0 auto;' id='consoleTop'>&nbsp;</div>
            
                        <div class='headers' id='console' 
                             style='width:100px;height:70px;margin:0 auto;line-height:64px;' 
                             onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
workbench/index'">工作台</div>
            
                    </div> -->

            <div class='Floatleft header_font_css' style='margin-left: 35px;'>
                <div style='width:70px;height:1.5px;margin:0 auto;' id='interviewMangerTop'>&nbsp;</div>
                <div class='headers' id='interviewManger' 
                     style='width:100px;height:70px;margin:0 auto;line-height:64px; color:#fff' onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/newSearchResume'">简历搜索</div>
            </div>

            <div class='Floatleft header_font_css' style="display: none;">
                <div id='positionMangerTop'style='width:70px;height:1.5px;margin:0 auto;'>&nbsp;</div>
                <div class='headers' id='positionManger' 
                     style='width:100px;height:70px;margin:0 auto;line-height:64px; color:#fff' onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
position/positionList'">职位管理</div>
            </div>

            <div class='Floatleft header_font_css' style='margin-left: 45px;'>
                <div style='width:70px;height:1.5px;margin:0 auto;' id='resumeMangerTop'>&nbsp;</div>
                <div class='headers' id='resumeManger' 
                     style='width:100px;height:70px;margin:0 auto;line-height:64px; color:#fff' onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_management'">我的简历</div>
            </div>

            <div class='Floatleft header_font_css' style='margin-left: 45px;'>
                <div style='width:70px;height:1.5px;margin:0 auto;' id='resumeManger2Top'>&nbsp;</div>
                <div class='headers' id='resumeManger2' 
                     style='width:100px;height:70px;margin:0 auto;line-height:64px; color:#fff' onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/benefit'">我的收益</div>
            </div>

            <div class='Floatleft header_font_css' style='margin-left: 45px;'>
                <div style='width:70px;height:1.5px;margin:0 auto;' id='resumeManger1Top'>&nbsp;</div>
                <div class='headers' id='resumeManger1' 
                     style='width:100px;height:70px;margin:0 auto;line-height:64px; color:#fff' onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/personAccount'">个人中心</div>
            </div>


        <?php }?>
        <div class='Floatleft header_font_css_two' 
             style='position:relative; display: none;' id='header_more_div'>
            <div id='header_more'>更多</div>
            <ul id='header_more_list' style='display:none'>
                <div style='height:16px;'>&nbsp;</div>
                <li class='header_more_list_li' 
                    onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
more/aboutUs'">关于我们</li>
                <li class='header_more_list_li' 
                    onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
more/contactUs'">联系我们</li>
                <li class='header_more_list_li' 
                    onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
more/commonProblems'">常见问题</li>
            </ul>
        </div>

        <div class='Floatright'id='header_right' style="margin-right: -25px;">
            <?php if ($_smarty_tpl->getVariable('user_id')->value>0){?>
                <!--   <div class='Floatleft header_font_css' style=''>
                      <div id='feedBackTop'style='width:50px;height:1.5px;margin:0 auto;'>&nbsp;</div>
                      <div class='headers' id='feedBack' 
                               style='width:100px;height:70px;margin:0 auto;line-height:64px;' >
                          <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/homepage/feed_back" style="color:#fff">反馈</a>
                      </div>
                  </div> -->

                <div class='Floatleft header_font_css messageList' style=''>
                    <div style='width:50px;height:1.5px;margin:0 auto;' id='messageTop'>&nbsp;</div>
                    <div class='headers' id='message' 
                         style='width:100px;height:70px;margin:0 auto;line-height:64px;'>
                        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/iconlist/message" target='_blank' style="color:#fff;position:relative;">消息<?php if ($_smarty_tpl->getVariable('message_tip')->value==1){?><i class='message_icon'></i><?php }?></a>

                        
                    </div>
                </div>

                <div class='Floatleft header_font_css dropDownMenu'style='position:relative'>
                    <div style='height:8px;'>&nbsp;</div>
                    <span>
                        <img src="<?php echo $_smarty_tpl->getVariable('logo')->value;?>
" style='width:50px; height: 50px;'></span>

                    <ul class="menuWrap" style="width: 117px;top: 70px;right: -7px;display: none;">
                       <!--  <li id="hBasicInfo">
                            <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/personAccount" target='_blank'>个人中心</a>
                        </li> -->

                        <li id="hLogout" onclick='header.userLogout()'>
                            <a href="javascript:void 0;">退出</a>
                        </li>
                    </ul>
                </div>
            <?php }else{ ?>
                <div id='login' class='Floatleft header_right_font' 
                     onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/login'">登录</div>
                <div id='register' class='Floatleft header_right_font' 
                     onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/newCreatAccount'">注册</div>
            <?php }?>
        </div>
        <div style="clear: both;"></div>
    </div>
</div>


<style type="text/css">
    .loading{
        position: fixed; width: 100%; background: rgba(0,0,0,0.5); height: 100%; padding-top: 16%;vertical-align:middle;display: none; z-index: 999999;
    }

    .message_icon{

         display:block;
  background:#f00;
  border-radius:50%;
  width:5px;
  height:5px;
  top:6px;
  right:-6px;
  position:absolute;
    }

</style>
<div class="loading"><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/_loading.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></div>

<script>

    var module = '<?php echo $_smarty_tpl->getVariable('module')->value;?>
'



    $('.headers').mouseover(function () {

        var selectIdName = $(this).attr('id');

        $('#' + selectIdName + 'Top').css('border', '1.5px solid #3398FF')

        $('#' + selectIdName + 'Top').css('border-radius', '5px')

        displaySelect();

    })


    $('.headers').mouseout(function () {
        var selectIdName = $(this).attr('id');
        $('#' + selectIdName + 'Top').css('border', 'none')
        $('#' + selectIdName + 'Top').css('border-radius', '0')

        displaySelect();
    })

    displaySelect();



    // var thisURL = document.URL;
    // thisURL.match("workbench") 


    // $('.header_more_list_li').mouseover(function () {

    //     $(this).css('background-color', '#ececec')
    // })

    // $('.header_more_list_li').mouseout(function () {

    //     $(this).css('background-color', 'white')

    // })


    // $('#header_more_div').mouseover(function () {

    //     $('#header_more_list').css('display', 'block')

    // })

    // $('#header_more_div').mouseout(function () {

    //     $('#header_more_list').css('display', 'none')

    // })

    //$('.menuWrap').css('display', 'block')

    $('.dropDownMenu').mouseover(function () {

        $('.menuWrap').css('display', 'block')

    })

    $('.dropDownMenu').mouseout(function () {

        $('.menuWrap').css('display', 'none')

    })

    function displaySelect() {

        if (module == 'Resume/newSearchResume') {

            $('#interviewMangerTop').css('border', '1.5px solid #3398FF')

            $('#interviewMangerTopTop').css('border-radius', '5px')

        } else if (module == 'Position/positionList') {

            $('#positionMangerTop').css('border', '1.5px solid #3398FF')

            $('#positionMangerTop').css('border-radius', '5px')

        } else if (module == 'Resume/resume_management') {

            $('#resumeMangerTop').css('border', '1.5px solid #3398FF')

            $('#resumeMangerTop').css('border-radius', '5px')
        }
    }


</script>