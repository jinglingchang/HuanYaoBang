<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-13 14:55:14
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/User/Tpl/User/user_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53520871357357a52174da8-09114686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc2ef0753b25163f0886443a74c899da2d60b2c' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/User/Tpl/User/user_info.tpl',
      1 => 1463120217,
    ),
  ),
  'nocache_hash' => '53520871357357a52174da8-09114686',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head></head>
    <meta charset="UTF-8">
    <title>个人信息</title>

    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/message.js"></script>

    <style type="text/css">
        * {
            font-family: "Microsoft YaHei" ! important;
        }

        *:focus {
            outline: none;
        }
        body{
            background-color: rgb(239,240,241); margin: 0; padding: 0;
        }
        .hl-warp_div{
            border: solid 1px #e1e1e1;width: 1200px; min-height: 960px; margin: 0 auto;
            background-color: #fff; text-align: center; margin-top: 30px;
        }
        .hl-person-info-table{
            width: 420px; border: solid 1px none; margin: 0 auto; margin-top: 20px;
        }
        .hl-person-info-table tr td{
            border: solid 1px none;
        }
        .hl-person-info-table tr td a img{
            position: absolute;margin-left: -127px;width: 200px;max-height: 300px;
        }
        .hl-person-info-table tr td select{
            width: 310px;height: 50px;border: solid 1px #e1e1e1;background: #fff;font-size: 14px;
            margin-top: 20px;
        }
        .hl-person-info-table tr td select option{
            border: solid 1px red;
        }
        .hl-title-td{
            width: 106px; height: 50px; color: #333; font-size: 14px;font-weight: 600; padding-top: 0px; text-align: left;
        }
      /*  .hl-text-input{
            height: 50px;font-size: 14px;border-radius: 3px;text-indent: 20px;border: solid 1px #e1e1e1; margin-top: 20px; 
        }*/
        .file {
            position: relative;
            display: inline-block;
            background: #f3f3f3;
            border-radius: 4px;
            overflow: hidden;
            color: #333;
            text-decoration: none;
            text-indent: 0;
            width: 150px;
            line-height: 20px;
            height: 150px;
            line-height: 150px;
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            margin-left: -100px;
        }
        .file input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
            z-index: 9999;
        }
        .file:hover {
            background: #eee;
            /*      border-color: #78C3F3;*/
            color: #004974;
            text-decoration: none;
        }

        .list-ul{
            text-align:left; margin-left:3px; border: solid 1px #e1e1e1;
        }
        .list-ul li{
            border-top: solid 1px #e1e1e1; background-color: #fefefe;
            padding-left: 20px; font-size: 14px; color: #999;cursor: pointer;
        }
        .list-ul li:hover{
            background-color: #eee; color: #333;
        }
    </style>

    <script>var website_url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>

<body>
    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/tip.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/updateUserInfoSubmits' method='post' id='form' name='form' enctype="multipart/form-data">

        <input type='hidden' name='user_id' id='user_id' value='<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'>

        <!--   <input type='hidden' name='user_id' id='user_id' value='2'>
        -->
        <div class="hl-warp_div" style="margin-top: 0px;">
            <table class="hl-person-info-table" border="0"cellpadding="0" cellspacing="0">
                <tr>
                    <td class="hl-title-td">昵称</td>
                    <td>
                        <input type="text" style="width:312px; float: left;" class="hl-text-input" name="nickname" id='nickname' value="<?php echo $_smarty_tpl->getVariable('info')->value['nickname'];?>
" placeholder="请输入"/>
<!--                         <span style=" margin: 0 20px;font-weight: 600; float: left;margin-top: 7px;">名</span>
                        <input type="text" style="width:135px;" class="hl-text-input" name="given_name" id='given_name' value="<?php echo $_smarty_tpl->getVariable('info')->value['given_name'];?>
" placeholder="请输入"/>
 -->                    </td>
                </tr>
                <tr> 
                    <td class="hl-title-td">性别</td>
                    <td style="text-align: left;">

                        <input type='hidden' name='sex' id='sex' value='<?php echo $_smarty_tpl->getVariable('info')->value['sex'];?>
'>

                        <div class='selectWrap' style='margin-top: 15px;margin-left: -5px;' id='selectProvince'>
 
                            <div class='selectBtn' style='width: 310px;
                                     height: 50px;border: solid 1px #e1e1e1;border-radius: 5px; margin-left:8px;
                                     background: #fff;text-align: left;font-size: 14px;'>
                                <?php if ($_smarty_tpl->getVariable('info')->value['sex']>0){?>
                                <span val><?php echo getDictInfo(array('name'=>"sex",'id'=>($_smarty_tpl->getVariable('info')->value['sex'])),$_smarty_tpl->smarty,$_smarty_tpl);?>
</span>
                                <?php }else{ ?>
                                <span val>请选择</span>
                                <?php }?>
                            </div>

                            <ul style="display: none;text-align:left;min-width: 308px;margin-left:10px;" class="select_ul">
                                <li onclick="selectDictValue(this)" rel='sex' value="1">男</li>

                                <li onclick="selectDictValue(this)" rel='sex' value="2">女</li>
                            </ul>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td class="hl-title-td" style="vertical-align: top;">
                        个人头像
                        <div style=" width: 128px; letter-spacing: 1px;text-align: left;float: right; margin-top: 42px;margin-right: 0px; color:#999;font-size: 12px;">
                            <div>* png或者jpg格式</div>
                            <div style="margin-top:12px;">* 大于100像素</div>
                            <div style="margin-top:12px;">* 小于2MB</div>
                        </div>
                    </td>
                    <td>
                        <a href="javascript:;" class="file" style='width:200px; height:200px;line-height:200px;'>
                            上传头像
                            <input type="file" name="employer_user_logo" id="imgInemployerUserLogo">

                            <img id="blahUserPhoto" src='<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/user.png' style=" width: 200px;height: 200px;position: absolute;margin-left: -128px;">
                            <?php if ($_smarty_tpl->getVariable('info')->value['icon_type']==0){?>
                                    <?php if ($_smarty_tpl->getVariable('info')->value['sex']==1){?>
                            <img src='<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_1.png'>
                            <?php }elseif($_smarty_tpl->getVariable('info')->value['sex']==2){?>
                            <img src='<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_2.png'>
                            <?php }else{ ?>
                            <img src='<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_1.png'>
                            <?php }?>
                                <?php }else{ ?>
                            <img src='<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/employer_logo/<?php echo $_smarty_tpl->getVariable('info')->value['id'];?>
.png'>
                            <?php }?></a>

                    </td>
                </tr>
                <tr>
                    <td class="hl-title-td" style="padding-top: 10px;">联系电话</td>
                    <td>

                        <div style='width: 310px;height:45px;border:1px solid #e1e1e1;position:relative; border-radius: 3px;margin-top: 15px; margin-left:3px; margin-bottom: 10px;cursor: text; background: #eee;'>

                            <span style='display:inline-block'>
                                <input value='<?php echo $_smarty_tpl->getVariable('info')->value['phone'];?>
' type='text' name='phone' id='phone' style='width: 200px;height: 43px;border: none;font-size: 14px;margin-left: -105px;text-indent:15px; background: #eee;cursor: text;' placeholder="请输入"  disabled="disabled"/>
                            </span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="hl-title-td">公司职位</td>

                    <td style="padding-left: 4px;">

                        <?php if ($_smarty_tpl->getVariable('info')->value['title']!=''){?>

                            <input type='hidden' name='title' id='title' value='<?php echo $_smarty_tpl->getVariable('info')->value['title'];?>
'>

                             <input type="text" name="title1" id='title1' value="<?php echo $_smarty_tpl->getVariable('info')->value['title'];?>
" placeholder="请输入" disabled="disabled" style="width: 310px;height: 45px;border-radius: 3px;border: solid 1px #e1e1e1;padding-left: 20px;background: #eee;" />

                        <?php }else{ ?>

                         <input type="text" name="title" id='title' value="<?php echo $_smarty_tpl->getVariable('info')->value['title'];?>
" placeholder="请输入"  style="width: 310px;height: 45px;border-radius: 3px;border: solid 1px #e1e1e1;padding-left: 20px;" />

                        <?php }?>

                    </td>
                </tr>
                <tr style="height: 60px;">
                    <td class="hl-title-td">公司名称</td>
                    <td style="padding-left: 4px;">

                        <?php if ($_smarty_tpl->getVariable('info')->value['company_name']!=''){?>

                            <input type='hidden' name='company_name' id='company_name' value='<?php echo $_smarty_tpl->getVariable('info')->value['company_name'];?>
'>

                             <input type="text" name="company_name" id='company_name' value="<?php echo $_smarty_tpl->getVariable('info')->value['company_name'];?>
" disabled="disabled"  placeholder="请填写公司名称" style="width: 310px;height: 45px;border-radius: 3px;border: solid 1px #e1e1e1;padding-left: 20px;background: #eee;" />

                        <?php }else{ ?>

                         <input type="text" name="company_name" id='company_name' value="<?php echo $_smarty_tpl->getVariable('info')->value['company_name'];?>
" placeholder="请填写公司名称" style="width: 310px;height: 45px;border-radius: 3px;border: solid 1px #e1e1e1;padding-left: 20px;" />

                        <?php }?>

                     
                    </td>
                </tr>

            </table>

            <input style=" width: 300px;height: 50px;font-size: 14px; margin-top: 100px;background: #202020;color: #fff;border: none;border-radius: 5px;cursor:pointer; " onclick='submitUserInfo()' value='完成' type='button'></form>

    </div>

</body>
</html>

<script>

    $(function () {

        //点击空白地方 隐藏 下拉列表
        $(document).on("click", function (e) {

            if ($(e.target).parents("#selectProvince").length == 0)
            {
                $(".select_ul").hide(200);
            }
        });

        // 下拉框
        $(".selectBtn").click(function (event) {
            /* Act on the event */
            $(this).next().show();
        });



             //上传头像
            function readURLUserPhoto(input) {
                $("#blahUserPhoto").show();
                  if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                      $('#blahUserPhoto').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                  }
                }

                $("#imgInemployerUserLogo").change(function(){
                  readURLUserPhoto(this);
            });

            $("#blahUserPhoto").click(function(event) {
                /* Act on the event */
                $("#imgInemployerUserLogo").click();
            });


    })

    function selectDictValue(obj) {

        var selectVal = $(obj).text();

        var selectRel = $(obj).attr('rel')

        var selectId = $(obj).val()

        $('#' + selectRel).val(selectId)

        $(obj).parents().prev('.selectBtn').children().text(selectVal);

        $(".select_ul").hide(200);
    }

    function selectCompany(obj) {

        var company_name = $(obj).text();

        var company_id = $(obj).attr('rel')

        $('#company_name').val(company_name)

        $('#company_id').val(company_id)

        $(".list-ul").fadeOut();
    }

    


    function submitUserInfo() {

        var options = {
            success: function (data) {

                var dataObj = eval("(" + data + ")");

                if (dataObj['res'] == 0) {

                    $(".position_creat").children('.alertPop').fadeIn();
                    $(".position_creat").children('.alertPop').children('.popwrap')
                            .children('.popbox').children('.popbody')
                            .children('.alert').html(dataObj['tip']);

                } else {

                    // $(".position_creat").children('.alertPop').fadeIn();
                    // $(".position_creat").children('.alertPop').children('.popwrap')
                    //         .children('.popbox').children('.popbody')
                    //         .children('.alert').html('修改成功');

                    window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/personAccount';
                }

            }
        };
        $('#form').ajaxForm(options);

        $("#form").ajaxSubmit(options);

    }


</script>