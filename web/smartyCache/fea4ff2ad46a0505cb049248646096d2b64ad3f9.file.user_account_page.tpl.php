<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-12 15:33:08
         compiled from "/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_account_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2056605393575d10349a6658-21510533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fea4ff2ad46a0505cb049248646096d2b64ad3f9' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_account_page.tpl',
      1 => 1464369075,
    ),
  ),
  'nocache_hash' => '2056605393575d10349a6658-21510533',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


    <style type="text/css">
        .hl-detail-table{
            width: 100%; margin: 0 auto;
        }
        .hl-detail-table tr{
            border-top:solid 1px #e1e1e1;  background: #fff;
        }
        .hl-detail-table tr td{
            height: 50px;
            font-size: 12px;
            color: #444;
        }
        .hl-detail-table tr th{
            height: 70px;
            color: #999;
        }
        .hl-detail-td-tip-div{
            color: #888;
        }
        .table-row-one{
            text-align: left; padding-left: 4%; width: 28%;
        }
        .table-row-two{
            text-align: left; width: 20%;
        }
        .table-row-three{
            text-align: left; width: 18%;
        }
        .table-row-four{
            text-align: right;padding-right: 28px;
        }
        .table-row-five{
            width: 21%; text-align: center;
        }
        .selectBtn{
            width: 140px;height: 50px;background: #fff;
            border: solid 1px #e1e1e1;border-radius: 3px; margin-top: 30px;
        }
        .selectWrap .selectBtn{
            background: #fff;
        }
        .select_ul{
            text-align: center;
        }
        a{
            color: #999;
        }

        .count_page_span {
            margin-left: 20px;
            font-size: 14px;
            color: #999;
            border: solid 1px clear;
            margin-top: -7px;
            height: 40px;
            display: block;
            line-height: 40px;
            white-space: nowrap;
        }
        .user-table{
            border:solid 1px none;
            width: 100%;
            margin: 0 auto;
        }
        .user-table tr td{
            height: 61px;
            color: #444;
            border: solid 1px none;
        }
    </style>

    <script>var website_url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>
    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/tip.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <div class="hl-warp_div" style="width: 1000px; background: rgb(240,240,240);padding-top: 100px;">
        <div style=" border:solid 1px #e1e1e1;margin-top: 15px; margin-bottom: 15px; background: #fff;height: 125px;">

            <table class="user-table">
                <tr>
                    <td rowspan=2 style="width: 19%;">

                        <div style=" width: 80px; height: 80px; line-height: 80px;margin-left: 50px;margin-top: 22px; overflow: hidden; border:solid 1px #fff">

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
.png?time=<?php echo time();?>
'>
                            <?php }?>
                        </div>

                    </td>
                    <td>

                        <div style="margin-top: 20px;">
                        <?php echo $_smarty_tpl->getVariable('info')->value['nickname'];?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <?php if ($_smarty_tpl->getVariable('info')->value['title']!=''){?> 

                        <span style="cursor: pointer;" onclick="editUserInfo()">
                        <?php echo $_smarty_tpl->getVariable('info')->value['title'];?>

                        </span>

                        <?php }?>
                        </div>

                        <?php if ($_smarty_tpl->getVariable('info')->value['is_identification_auth']==1){?>

                        <div style="margin-top: 20px; font-size: 15px;">
                            <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/authu.png"/ style="width: 28px;margin-top: -6px;"> 已实名认证
                        </div>

                        <?php }else{ ?>

                        </div>

                        <?php }?>


                    </td>
                    <td style="width: 30%;">
                        <span style="cursor: pointer;float: right;margin-right: 48px; font-size: 14px;" onclick="editUserInfo()">
                        <?php if ($_smarty_tpl->getVariable('user_info_status')->value==1){?>编辑信息 <?php }else{ ?> 完善信息 <?php }?>
                        </span>
                    </td>
                </tr>
            
            </table>
        </div>

        <!-- 账户余额 开始 -->
        <div style=" border:solid 1px #e1e1e1;margin-top: 15px; margin-bottom: 15px; background: #fff;min-height: 125px;">
            <div style=" padding-left: 50px;margin-top: 22px;">
                账户余额
            </div>
            <div style=" padding-left: 50px; margin-top: 20px;">
                <span style="font-size: 24px;color:red;display: block;width: 150px;float: left;">
                  <?php if ($_smarty_tpl->getVariable('info')->value['money']>0||$_smarty_tpl->getVariable('info')->value['back_money']>0||$_smarty_tpl->getVariable('info')->value['benefit']>0){?>

                        <?php echo $_smarty_tpl->getVariable('info')->value['money']+$_smarty_tpl->getVariable('info')->value['back_money']+$_smarty_tpl->getVariable('info')->value['benefit'];?>
元
                    <?php }else{ ?>

                        0.00元
                    <?php }?>
                </span>

                <button style='float: left;' class='rex_btn rex_btn_bule' onclick="jumpPay()">
                    充&nbsp;&nbsp;值
                </button>

            </div>
        </div>

        <div style='clear: both;'></div>

        <!-- 账户余额 结束 -->

       <!--  任务开始 -->
       <div class = "rex_task">
            <div class="rex_task_title">
                任务
            </div>
            <div class="rex_task_title"> 
                <span style="display:inline-block;width: 150px;float: left; height:35px;line-height:35px;">
                   <samp style="color:#333">可领取奖励</samp>&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('money')->value;?>
元 
                </span>
                <button style='float:left;' class ="rex_btn rex_btn_bule"
                       onclick='window.open("<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/task")'>查&nbsp;&nbsp;看</button>
            </div>
       </div>

       <div style='clear: both;'></div>

        <!-- 任务结束 -->


        <div class="position-tip-row-div" style="height: 60px; background: #fff">
                <span style='display: inline-block;color:#222; height: 60px; line-height: 60px; width: 140px; padding: 0px; text-align: center; border-right: solid 1px #efefef; font-size: 15px;' class='DHCbtn position-tip-choosed' charttype="1" onclick='goTotrade(1)'  id='upload_number_span'>
                    交易记录
                </span>

                <span style='display: inline-block;color:#222; height: 60px; line-height: 60px; width: 140px; padding: 0px; text-align: center; border-right: solid 1px #efefef; font-size: 15px;margin-left: -7px;' class='DHCbtn' charttype="1" onclick='goTotrade(2)' >
                    充值记录
                </span>

                 <span style='display: inline-block; color:#222; height: 60px; line-height: 60px; width: 140px; padding: 0px; text-align: center;border-right: solid 1px #efefef; font-size: 15px;margin-left: -7px;' class='DHCbtn' charttype="2" onclick="goTotrade(3)" id='resume_interview' >
                    提现记录
                </span>
        </div>

        <input type='hidden' name='list_type' id='list_type' value='1'>

        <div id='bill_list'></div>

    </div>
    <div style="height:100px;"></div>


    <script>


     $(".position-tip-row-div span").click(function(event) {
            /* Act on the event */
            $(".position-tip-row-div span").removeClass('position-tip-choosed');
            if (!$(this).hasClass('position-tip-choosed') ) {
                $(this).addClass('position-tip-choosed');
            }
        })

    function goTotrade(value){

        var list_type = $('#list_type').val()

        if(list_type != value){

            $('#list_type').val(value)

            account.getBill(value,1);
        }

        
    }

    function ajaxPage(page){

        var list_type = $('#list_type').val()

        account.getBill(list_type,page);

    }

    function jumpPay(){

        window.open('<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
account/pay')
    }

    function editUserInfo(){

        window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/getUserInfo';
    }

    account.getBill(1,1);

</script>