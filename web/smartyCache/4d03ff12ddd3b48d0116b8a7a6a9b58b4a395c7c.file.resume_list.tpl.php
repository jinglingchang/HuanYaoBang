<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-17 10:17:49
         compiled from "/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:670909417573a7f4d835528-53701066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d03ff12ddd3b48d0116b8a7a6a9b58b4a395c7c' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_list.tpl',
      1 => 1463398552,
    ),
  ),
  'nocache_hash' => '670909417573a7f4d835528-53701066',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div style="height: 100px"></div>
<div style="width: 1200px;margin: 0 auto; text-align: right;margin-bottom: 10px;">
    <button id="update_resume_page" class="btn btnStandard" style="width: 150px;border-radius: 3px;height: 45px;line-height: 31px;margin-top: -18px;"
            >上传简历</button>
    <span id="span1">
    <input id="wash" style="display: none;" type="file" accept=".html,.doc,.docx,
    .pdf,.txt,.rtf,.mht"  multiple="multiple" onchange="wash()" />
   </span>
    <div id="upload-mask-warp">
        <div style=" width:660px; margin: 0 auto;background: #fff;">

        <div style="border-bottom: solid 1px #e1e1e1; margin-top: 200px; height: 50px; line-height: 50px; text-align: center;">上传简历
            
                <img id="close-upload-resume-mask-tip" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/home/222.png"style="float: right;padding-right: 20px;width: 38px;margin-top: 17px;cursor: pointer;" />
        </div>

        <div id="list"></div>

        <div style="text-align: center;border: solid 1px rgba(0,0,0,0);margin-top: 40px;">
            <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/loading.gif" id="upload-loading" style="width: 30px;margin-right: 5px;visibility: hidden;">
          <input id="push" type="button" onclick="push()" class="btn btnStandard" value="开始上传" />
        </div>
            <div style="height: 20px;"></div>
        </div>
    </div>
</div>

<style type="text/css">
    #upload-mask-warp{
        background: rgba(0,0,0,0.5);min-height: 105%;position: absolute;width: 100%;margin-top: -145px;display: none;z-index: 99999;left: 0%;
    }
    #list{
        width:92%;
        margin: 0 auto;
        padding-top: 25px;
    }
    #list div{
        border: solid 1px #e1e1e1;
        height: 3em;
        line-height: 3em;
        margin-top: 1em;
        padding-left: 1em;
        background: #fff;
        text-align: left;
    }
    #list div span{
        border: solid 1px none;
        display: block;
        float: right;
        margin-right: 1em;
    }
    .sort_div{
        height: 50px;
        line-height: 50px; 
        text-align: left;
        padding-left: 16px;
        border-bottom: solid 1px #e1e1e1;
        margin-top: 0px;
    }
</style>


<div class="resume-upload-tip-warp" style="width: 1000px;">

    <div style="font-weight: bold;padding-top: 30px;text-align: center;">上传简历说明</div>
    <img id="close-upload-resume-tip" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/home/222.png"style="float: right;padding-right: 20px;width: 38px;margin-top: -27px;cursor: pointer;" />
    <div style="text-align: left; padding-left: 100px;">
        <p>1、支持HTML、doc、docx、pdf、txt等格式上传</p>
        <p>2、若有人打赏您上传的简历，您将获得收益</p>

        <p>3、您可以联系候选人，通过验证和评价，为简历增值。他人打赏后您会获得更多收益</p>

<!--         <div style="width: 95%;cursor: pointer;text-align: right;">
            <input type="checkbox" id="no-prompt" name="no-prompt" value=""/>
            &nbsp;&nbsp;
            <label for="no-prompt" style="cursor: pointer; ">不再提示</label>
        </div> -->
        <div style="height: 3em;"></div>
    </div>
</div>
<div style='width: 1200px;margin: 0 auto;'>

    <div class="resume_manage_warp">
    
        <div class="resume_manage_content_div">
            <div class="position-tip-row-div" style="height: 60px;">

<!--                 <span id="resumeCollect" style='display: inline-block; color:#222;height: 75px; line-height: 75px; width: 140px; padding: 0px; text-align: center;border-right: solid 1px #efefef; margin-left: -5px;font-size: 15px;' class='DHCbtn'charttype="3" onclick='clickresumeCollect()'>
                    收藏简历(
                    <span id='collect_number'>0</span>
                    )
                </span> -->

                <span style='display: inline-block;color:#222; height: 60px; line-height: 60px; width: 140px; padding: 0px; text-align: center; border-right: solid 1px #efefef; font-size: 15px;' class='DHCbtn position-tip-choosed' charttype="1" onclick='resumeUpload()'  id='upload_number_span'>
                    已上传简历 <!-- (<em id='upload_number'>0</em>) -->
                </span>

                <span style='display: inline-block;color:#222; height: 60px; line-height: 60px; width: 140px; padding: 0px; text-align: center; border-right: solid 1px #efefef; font-size: 15px;margin-left: -7px;' class='DHCbtn' charttype="1" onclick='resumeBuy()' >
                    已打赏简历 <!-- (<em id='buy_number'>0</em>) -->
                </span>

<!--                  <span style='display: inline-block; color:#222; height: 60px; line-height: 60px; width: 140px; padding: 0px; text-align: center;border-right: solid 1px #efefef; font-size: 15px;margin-left: -7px;' class='DHCbtn' charttype="2" onclick="clickResumeDelivery()" id='resume_interview' >
                    推荐简历 (<em id='apply_number'>0</em>)
                </span> -->

<!--                 <div id="dict_position_list"  style="display:none;width: 17%;float:right; margin-top: 12px; margin-right: 10px;" class="selectWrap">
                    <div class="selectBtn" id="selectProvince" style="background: #fff;border: solid 1px #e1e1e1;border-radius: 3px;">
                <?php if ($_smarty_tpl->getVariable('positionObject')->value->position_name!=''){?>
                    <a><?php echo $_smarty_tpl->getVariable('positionObject')->value->position_name;?>
</a>
                <?php }else{ ?>
                <a>暂无</a>
                <?php }?>
                </div>

                <ul style="display: none;" class="select_ul">
                <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('positionObject')->value->position_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
?>
                    <li val="<?php echo $_smarty_tpl->getVariable('info')->value->id;?>
" onclick='selectPositionRedict("<?php echo $_smarty_tpl->getVariable('info')->value->id;?>
", "position_id")'><?php echo $_smarty_tpl->getVariable('info')->value->position_name;?>

                    </li>
                <?php }} ?>
            </ul>
        </div> -->

<!--                 <div id="dict_skill"  style="width: 17%;float:right; margin-top: 12px; margin-right: 10px;" class="selectWrap">
                    <div class="selectBtn" id="selectProvince" style="background: #fff;border: solid 1px #e1e1e1;border-radius: 3px;">简历状态</div>

                    <ul style="display: none;" class="select_ul">

                        <li val="0" onclick='selectPositionRedict("0", "resume_status")'>未激活</li>

                        <li val="1" onclick='selectPositionRedict("1", "resume_status")'>已激活</li>

                        <li val="2" onclick='selectPositionRedict("2", "resume_status")'>已验证</li>

                        <li val="3" onclick='selectPositionRedict("3", "resume_status")'>被投诉</li>
                    </ul>
                </div> -->

            </div>
        
            <div class="sort_div" style="display: none;">
                <div class="pull-left">
                    <div id="dict_skill"  style="width: 140px;float:right;margin-top: -7px;" class="selectWrap">
                        <div class="selectBtn" id="selectProvince" style="background: #fff;">
                            <a class="default-val-score-sort">按分数排序</a>
                        </div>

                        <ul style="display: none;" class="select_ul">

                            <li val="0"  onclick='selectPositionRedict("resume_complete_score", "soft", "1")'>分数从高到低</li>
                            <li val="0"  onclick='selectPositionRedict("resume_complete_score", "soft", "0")'>分数从低到高</li>
                        </ul>
                    </div>

                </div>
                <div class="pull-left">
                    <div id="dict_skill"  style="width: 140px;float:right;margin-top: -7px;" class="selectWrap">
                        <div class="selectBtn" id="selectProvince" style="background: #fff;">
                            <a class="default-val-education-sort">按学历</a>
                        </div>

                        <ul style="display: none;" class="select_ul">

                            <li val="0"  onclick='selectPositionRedict("education", "soft", "1")'>学历从高到低</li>
                            <li val="0"  onclick='selectPositionRedict("education", "soft", "0")'>学历从低到高</li>
                        </ul>
                    </div>

                </div>
                <div class="pull-left">
                    <div id="dict_skill" style="width:140px;float:right; margin-top: -7px;" class="selectWrap">
                        <div class="selectBtn" id="selectProvince" style="background: #fff;">
                            <a class="default-val-work-experience">按工作经验</a>
                        </div>

                        <ul style="display: none;" class="select_ul">
                            <li val="0" onclick='selectPositionRedict("workexperience", "soft", "1")'>经验从高到低</li>
                            <li val="0" onclick='selectPositionRedict("workexperience", "soft", "0")'>经验从低到高</li>
                        </ul>
                    </div>

                </div>

                <div class="pull-left">
                    <div id="dict_skill" style="width:140px;float:right; margin-top: -7px;" class="selectWrap">
                        <div class="selectBtn" id="selectProvince" style="background: #fff;">
                            <a class="default-val-now-salary">目前薪资</a>
                        </div>

                        <ul style="display: none;" class="select_ul">

                            <li val="0" onclick='selectPositionRedict("salary", "soft", "1")'>薪资从高到低</li>
                            <li val="0" onclick='selectPositionRedict("salary", "soft", "0")'>薪资从低到高</li>
                        </ul>
                    </div>

                </div>
                <div class="pull-left">
                    <div id="dict_skill" style="width:160px;float:right; margin-top: -7px;" class="selectWrap">
                        <div class="selectBtn" id="selectProvince" style="background: #fff;">
                            <a class="default-val-buy-number">购买次数</a>
                        </div>

                        <ul style="display: none;" class="select_ul">

                            <li val="0" onclick='selectPositionRedict("buy_number", "soft", "1")'>购买数从高到低</li>
                            <li val="0" onclick='selectPositionRedict("buy_number", "soft", "0")'>购买数从低到高</li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- 简历管理列表 -->

            <span class='resume_list'></span>
        </div>

    </div>
    <div style="height: 50px;"></div>
</div>

<input type='hidden' name='default' id='default' value='1'>

<input type='hidden' name='position_id' id='position_id' value='<?php echo $_smarty_tpl->getVariable('position_id')->value;?>
' />

<input type='hidden' name='resume_status' id='resume_status' value=''>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/sbupl.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/store.min.js"></script>

<script type="text/javascript">

 
    $(function () {

        $("#update_resume_page").click(function () {
            $("#wash").click();
        })

        // 关闭上传简历tip 说民
        $("#close-upload-resume-tip").click(function(){
            $(".resume-upload-tip-warp").hide();

             // 设置 上传简历说明 显示和关闭状态
             store.set('resumeUploadTipWarpStatus', 'hide');

        })

            var resumeUploadTipWarpStatus=store.get('resumeUploadTipWarpStatus')

            if (resumeUploadTipWarpStatus == "hide") {
                $(".resume-upload-tip-warp").hide();
            }else{
                $(".resume-upload-tip-warp").show();
            }

        //关闭 上传简历队列 列表
        $("#close-upload-resume-mask-tip").click(function(){
            $("#upload-mask-warp").hide();
        })
    })





</script>

<script>


                                // seajs.use('resume/index', function (index) {

                                //     index.init();

                                //     //获取简历数
                                //     index.getResumeNumber();
                                // })

                                var position_id = $('#position_id').val()


                                $(document).on("click", function (e) {

                if ($(e.target).parents(".selectWrap").length == 0)
                {
                    $(".select_ul").fadeOut();
                }
        }),

         // 下拉框
        $(".selectBtn").click(function (event) {
            /* Act on the event */
            $(".select_ul").hide();
            $(this).next().show();
        }),

        $(".select_ul li").click(function (event) {
            /* Act on the event */

            // $(".default-val-score-sort").text('按分数排序');
            // $(".default-val-education-sort").text('按学历');
            // $(".default-val-work-experience").text('按工作经验');
            // $(".default-val-now-salary").text('目前薪资');
            // $(".default-val-buy-number").text('购买次数');

            var selectVal = $(this).text();

            $(this).parents().prev('.selectBtn').children().text(selectVal);
            $(".select_ul").hide();
        }),

        //tab 点击效果
        $(".position-tip-row-div span").click(function(event) {
            /* Act on the event */
            $(".position-tip-row-div span").removeClass('position-tip-choosed');
            if (!$(this).hasClass('position-tip-choosed') ) {
                $(this).addClass('position-tip-choosed');
            }
        }),

                                function clickResumeDelivery() {

                                    var resume_default = $('#default').val()

                                    var position_ids = $('#position_id').val()

                                    $('#dict_position_list').show();

                                    if (resume_default != 0) {

                                        resumeDelivery(1, position_ids, '')

                                    }

                                }

                                function clickresumeCollect() {

                                    var resume_default = $('#default').val();

                                    $('#dict_position_list').hide();

                                    if (resume_default != 2) {

                                        resumeCollect()

                                    }
                                }

                                function setDefaultValue(){

                                    $(".default-val-score-sort").text('按分数排序');
                                    $(".default-val-education-sort").text('按学历');
                                    $(".default-val-work-experience").text('按工作经验');
                                    $(".default-val-now-salary").text('目前薪资');
                                    $(".default-val-buy-number").text('购买次数');
                                }


                                function selectPositionRedict(value, name, softType) {

                                    setDefaultValue();

                                    var selectVal = $(this).text();

                                    var position_id = $('#position_id').val();

                                    var soft = $('#soft').val();

                                    var type = $('#default').val();

                                    switch (name) {

                                        case 'position_id':

                                            position_id = value;

                                            $('#position_id').val(position_id)

                                            break;

                                        case 'soft':

                                            soft = value + ',' + softType;

                                            break;


                                        case 'resume_status':

                                            resume_status = value;

                                            $('#resume_status').val(resume_status)

                                            break;
                                    }

                                    switch (type) {

                                        case '1' :

                                            resumeUpload(1, position_id, soft);

                                            break;

                                        case '0' :

                                            resumeDelivery(1, position_id, soft);

                                            break;

                                        case '2' :

                                            resumeCollect(1, position_id, soft);

                                            break;

                                        case '4' :

                                            resumeBuy(1, position_id, soft);

                                            break;

                                        default:

                                            resumeDelivery(1, position_id, soft);
                                    }
                                }


                                //简历推荐
                                function resumeUpload(page, position_id, soft) {

                                    $('#dict_position_list').hide();

                                    setDefaultValue();

                                    var resume_delivery_url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_upload'

                                    $(".loading").show();

                                    $('#default').val(1)

                                    $.ajax({
                                        url: resume_delivery_url, // 跳转到 action
                                        data: {
                                            type: 1,
                                            page: page,
                                            position_id: position_id,
                                            soft: soft,
                                            resume_status: $('#dict_resume_status').val(),
                                            work_place: $('#dict_work_place').val(),
                                            education: $('#dict_education').val(),
                                            work_year: $('#dict_work_year').val(),
                                        },
                                        type: 'get',
                                        cache: false,
                                        success: function (data) {

                                            $(".loading").hide();
                                            $('.resume_list').html(data)
                                        },
                                        error: function () {
                                            $(".loading").hide();
                                        }
                                    });

                                }

                                //简历投递
                                function resumeDelivery(page, position_id, soft) {

                                    var resume_delivery_url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_delivery'

                                    $(".loading").show();

                                    $('#default').val(0)

                                    $.ajax({
                                        url: resume_delivery_url, // 跳转到 action
                                        data: {
                                            type: 2,
                                            page: page,
                                            position_id: position_id,
                                            soft: soft,
                                            resume_status: $('#dict_resume_status').val(),
                                            work_place: $('#dict_work_place').val(),
                                            education: $('#dict_education').val(),
                                            work_year: $('#dict_work_year').val(),
                                        },
                                        type: 'get',
                                        cache: false,
                                        success: function (data) {

                                            $(".loading").hide();
                                            $('.resume_list').html(data);
                                        }
                                        ,
                                        error: function () {
                                            $(".loading").hide();
                                        }
                                    });
                                }


                                function resumeBuy(page, position_id, soft) {

                                    var resume_delivery_url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_buy'

                                    $(".loading").show();

                                    $('#default').val(4)

                                    setDefaultValue();

                                    $.ajax({
                                        url: resume_delivery_url, // 跳转到 action
                                        data: {
                                            type: 4,
                                            page: page,
                                            position_id: position_id,
                                            soft: soft,
                                            resume_status: $('#dict_resume_status').val(),
                                            work_place: $('#dict_work_place').val(),
                                            education: $('#dict_education').val(),
                                            work_year: $('#dict_work_year').val(),
                                        },
                                        type: 'get',
                                        cache: false,
                                        success: function (data) {

                                            $(".loading").hide();
                                            $('.resume_list').html(data);
                                        }
                                        ,
                                        error: function () {
                                            $(".loading").hide();
                                        }
                                    });

                                }


                                //简历收藏
                                function resumeCollect(page, position_id, soft) {

                                    var resume_delivery_url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_collect'

                                    $(".loading").show();

                                    $('#default').val(2)

                                    $.ajax({
                                        url: resume_delivery_url, // 跳转到 action
                                        data: {
                                            type: 3,
                                            page: page,
                                            position_id: position_id,
                                            soft: soft,
                                            resume_status: $('#dict_resume_status').val(),
                                            work_place: $('#dict_work_place').val(),
                                            education: $('#dict_education').val(),
                                            work_year: $('#dict_work_year').val(),
                                        },
                                        type: 'get',
                                        cache: false,
                                        success: function (data) {

                                            $(".loading").hide();
                                            $('.resume_list').html(data);
                                        }
                                        ,
                                        error: function () {
                                            $(".loading").hide();
                                        }
                                    });
                                }


                                function ajaxPage(page) {
                                    var type = $('#default').val();
                                    var soft = $('#soft').val();
                                    var position_id = $('#position_id').val();

                                    switch (type) {

                                        case '1' :

                                            resumeUpload(page, position_id, soft);

                                            break;

                                        case '0' :

                                            resumeDelivery(page, position_id, soft);

                                            break;

                                        case '2' :

                                            resumeCollect(page, position_id, soft);

                                            break;

                                        case '4' :

                                            resumeBuy(page, position_id, soft);

                                            break;
                                    }
                                }


                                if (position_id <= 0) {

                                    resumeUpload();

                                } else{

                                     $(".position-tip-row-div span").removeClass('position-tip-choosed');
            if (!$('#resume_interview').hasClass('position-tip-choosed') ) {
                $('#resume_interview').addClass('position-tip-choosed');
            }

                                    $('#resume_interview').click()
                                }

                                //getResumeNumber();

                                function getResumeNumber() {

                                    var resume_delivery_url = url + '/resume/getResumeNumber'

                                    //$(".loading").show();
                                    $.ajax({
                                        url: resume_delivery_url,
                                        data: {
                                        },
                                        type: 'get',
                                        cache: false,
                                        success: function (data) {

                                            var dataObj = eval('(' + data + ')');

                                            var resume_default = $('#default').val()

                                            if (resume_default == 0) {

                                                $("#upload_number").html(dataObj['upload_number'])

                                                $("#collect_number").html(dataObj['collect_number'])

                                                $("#buy_number").html(dataObj['buy_number'])

                                            } else if (resume_default == 1) {

                                                $("#apply_number").html(dataObj['apply_number'])

                                                $("#upload_number").html(dataObj['upload_number'])

                                                $("#buy_number").html(dataObj['buy_number'])

                                            } else if (resume_default == 2) {

                                                $("#apply_number").html(dataObj['apply_number'])

                                                $("#upload_number").html(dataObj['upload_number'])

                                                $("#buy_number").html(dataObj['buy_number'])

                                            } else if (resume_default == 4) {

                                                $("#apply_number").html(dataObj['apply_number'])

                                                $("#upload_number").html(dataObj['upload_number'])

                                                $("#collect_number").html(dataObj['collect_number'])

                                            }

                                        }
                                        ,
                                        error: function (e) {

                                        }
                                    });

                                }

                                function uploadResumeSuccess(data) {

                                    //window.location.href = url + 'resume/edit?id=' + data

                                    var jump_url = url + 'resume/resume_detail?id=' + data

                                    window.open(jump_url)

                                    reloadResume()

                                    //getResumeNumber();
                                }

                                function reloadResume() {

                                    $('#upload_number_span').click();
                                }

</script>