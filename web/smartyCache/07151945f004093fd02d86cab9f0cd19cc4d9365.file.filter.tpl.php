<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-02 10:38:36
         compiled from "/private/var/www/html/employer_tool/Public/html//multPage/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1618183321574f9c2c262b96-59392444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07151945f004093fd02d86cab9f0cd19cc4d9365' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//multPage/filter.tpl',
      1 => 1464782199,
    ),
  ),
  'nocache_hash' => '1618183321574f9c2c262b96-59392444',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/resume/saveFilter.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/citys.css"> 
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/citys/Popt.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/citys/cityJson.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/citys/citySet.js"></script>


<style type="text/css">
    .screen-section{
        border: solid 1px #e1e1e1;
        min-height: 200px;
        background: #fff;
        border-top: none;
    }

    .hl-resume-screen-row-div{
        height: 46px;
        width: 150px;
        float: left;
        font-size: 14px;
        color: #3398ff;
        line-height: 46px;
        border: solid 1px none;
        padding-left: 30px;
        background: rgba(127,172,249,0.3);
        margin-right: 30px;
    }
    .hl-resume-screen-tip-button{
        font-size: 14px;
        color: #333;
        background: #fff;
        border: none;
        text-align: left;
        margin-left: 20px;
        padding: 1px 5px;
        cursor: pointer;
        height: 30px;
    }
    .hl-resume-screen-row{
        border-bottom: solid 1px #e1e1e1;
    }
    .hl-resume-screen-row-table tr td{
        height: 46px;
        text-align: left;
    }
    .search-resume-button{
        width: 140px;
        border: solid 1px #e1e1e1;
        background: #3398ff;
        color: #fff;
        font-size: 16px;
        height: 45px;
        text-align: center;
        cursor: pointer;
    }
    .filter-container-input,.filter-container{
        border: solid 1px none;
        width: 848px;
        min-height: 46px;
        margin-left: 150px;
        line-height: 46px;
    }

    .filter-button{
        font-size: 13px;
        color: #333;
        background: #fff;
        border: solid 1px #e1e1e1;
        text-align: left;
        padding: 2px 15px;
        cursor: pointer;
        margin-right: 10px;
        height: 28px;
        line-height: 24px;
    }
    .filter-container-input input[type="text"]{
        border: solid 1px #888;
        width: 420px;
        font-size: 14px;
        height: 40px;
        padding-left: 15px;
        margin-left: -29px;
    }
    .filter-text{

        border: solid 1px #e1e1e1;
        font-size: 12px;
        width: 80px;
        height: 24px;
        line-height: 24px;
        padding-left: 5px;
        border-radius: 2px;
    }
    .filter-sure-btn{
		background: #fff;
	    border: solid 1px #e1e1e1;
	    font-size: 12px;
	    width: 60px;
	    height: 24px;
	    cursor: pointer;
	    line-height: 24px;
	    border-radius: 3px;
	    color: #444;
    }

    .minSelectBtn{
        height: 35px;
        line-height: 17px;
        background: #fff;
        border: solid 1px #e1e1e1;
        border-radius: 2px;
        width: 90px;
    }

    .hl-resume-screen-row-table,.hl-resume-screen-row-table,.hl-resume-screen-row-table,.hl-resume-screen-row-table{

        width: 80%;
    }
    .selectWrap .minSelectBtn:before{
        position: absolute;
        display: block;
        right: 8px;
        top: 5px;
        content: "\e201";
        font-family: 'dashboard';
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        vertical-align: middle;
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -ms-transition: all 0.2s;
    }	

    .tab-ul{
        list-style: none;
        color: #555;
    }
    .tab-ul li{
        border: solid 1px none;
        width: 60px;
        text-align: center;
        height: 30px;
        line-height: 30px;
        float: left;
        cursor: pointer;
        margin-bottom: -1px;
    }
    .tab-checked{
        background: #3398ff;
        color: #fff;
    }
    .search-input-warp{
        border: solid 1px none;
        margin: 0 auto;
    }

    .search-input-warp input[type="text"]{
        width: 60%;
        height: 40px;
        font-size: 14px;
        border: solid 2px #3398ff;
        padding-left: 10px;
    }
    .search-btn{
        width: 100px;
        height: 40px;
        background: #3398ff;
        border: none;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        position: absolute;
        margin-left: -10px;
    }

    .addOne{
        background:rgba(36,126,255,0.3);
        color: #fff;
    }
    .selectWrap ul li{
	    display: block;
	    padding: 0px 10px;
	    cursor: pointer;
	    border-bottom: 1px solid #f7f9fa;
	    white-space: nowrap;
	    font-size: 14px;
    }
    .pack-up{
        font-size: 12px;
        float: right;
        padding-right: 3px;
        color: #3398ff;
        cursor: pointer;
        padding-top: 5px;
    }
    .show-more-language{
        display: none;
    }

    .show-language-title{

    }
    .more-choose{
        width: 80px;float: right; font-size: 12px; background:rgba(127,172,249,0.3); text-align: center; color: #3398ff; cursor: pointer;height: 21px;line-height: 18px;
    }
    .down-filter{
        display: none;
    }
    .searchResume .selectBtn:before{
        top:15px;
        left: 102px;
    }
    .btn-save-filter-condition{
        border: solid 1px #3398ff;
        background: #fff;
        padding: 1px 5px;
        border-radius: 3px;
        font-size: 13px;
        color: #3398ff;
        cursor: pointer;

        display: none;
    }

    .alertErrorData{
       
        height: 80px;
        padding-top: 50px;
        font-size: 16px;
    }
    #alert_btn{
        margin-bottom: 20px;
    }

</style>

    <div style="margin-top: 10px;width: 85%; margin-left: auto;padding-top: 30px;">
        <ul class="tab-ul">
            <!-- <li class="tab-checked" rel='1'>全文</li> -->
            <!-- <li rel='2'>职位</li>
            <li rel='5'>技能</li>
            <li rel='3'>公司</li>
            <li rel='4'>学校</li> -->
        </ul>
        <div style="clear: both;"></div>
        <div class="search-input-warp">
            <input autocomplete='off' type="text" id="search" name="search" value="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
" placeholder="请输入关键字，以“空格”隔开     例如“产品经理  腾讯  北京大学”" />
            <button class="search-btn">搜索简历</button>
        </div>

        <?php if ($_smarty_tpl->getVariable('user_id')->value>0){?>

        <div id="dict_skill" style=" width: 120px;float: right;margin-top: -40px;margin-right: 10%;" class="searchResume selectWrap">
            <div class="selectBtn" id="selectProvince" style="height: 40px;
            line-height: 24px;background: #fff;border: solid 1px #e1e1e1;border-radius: 3px;">
                <a class="default-val-screen-number" id='default_screen_val' style="width: 100px;display: block;margin-left: -10px;font-size: 12px;" >请选择筛选器</a>
            </div>
            <ul style="display: none;width: 92px;" class="select_ul sort filter_ul_list">
                
            </ul>
        </div>

        <?php }else{ ?>

        <div id="dict_skills" style=" width: 120px;float: right;margin-top: -40px;margin-right: 10%;" class="searchResume selectWrap" onclick='checkLogin();'>
            <div class="selectBtn" id="selectProvince" style="height: 40px;
            line-height: 24px;background: #fff;border: solid 1px #e1e1e1;border-radius: 3px;">
                <a class="default-val-screen-number" id='default_screen_val' style="width: 100px;display: block;margin-left: -10px;font-size: 12px;" onclick='checkLogin()'>请选择筛选器</a>
            </div>
            
        </div>

        <?php }?>

        <span id='screen_operation' style=" float: right;margin-top: -35px;"></span>
    </div>

    <div>
        <div class="hl-resume-screen-row-div" style="background: #fff;color: #333; margin-right: 0px;">
            筛选条件：
        </div>
        <div class="filter-container">
            <span class="filter-container-span"></span>
            <button class="btn-save-filter-condition" style='font-size: 12px;'>保存筛选器</button>
        </div>
    </div>

    <!-- 专业领域 -->
    <div class="hl-resume-screen-row" style="border-top: solid 1px #e1e1e1">
        <div class="hl-resume-screen-row-div">所在行业：</div>
        <table class="hl-resume-screen-row-table">
            <tr>
                <td>

                    <button value='计算机与网络' id='industry_1' rel='industry' class="hl-resume-screen-tip-button" onclick='multiSelectIndustry(this);resumeSearch(1)'>计算机与网络</button>

                    <button value='通信/电子' id='industry_2' rel='industry' class="hl-resume-screen-tip-button" onclick='multiSelectIndustry(this);resumeSearch(1)'>通信/电子</button>

                    <button value='金融' id='industry_3' rel='industry' class="hl-resume-screen-tip-button" onclick='multiSelectIndustry(this);resumeSearch(1)'>金融</button>

                    <button value='人力资源' id='industry_4' rel='industry' class="hl-resume-screen-tip-button" onclick='multiSelectIndustry(this);resumeSearch(1)'>人力资源</button>

                    <button value='其他' id='industry_5' rel='industry' class="hl-resume-screen-tip-button" onclick='multiSelectIndustry(this);resumeSearch(1)'>其他</button>

                </td>
            </tr>

        </table>
    </div>

    <!-- 职位职能 -->
   <!--  <div class="hl-resume-screen-row" >
        <div class="hl-resume-screen-row-div">职位职能：</div>
        <table class="hl-resume-screen-row-table">
            <tr>
                <td>
                <div id="dict_skill" style="width:300px; margin-right: 10px;" class="selectWrap">
                        <div class="selectBtn" id="selectProvince" style="padding: 6px 24px 6px 16px;background: #fff;">
                            <input type="text" id="chooseFunction" readonly="readonly" name="chooseFunction" placeholder="请选择行业职能，至多3个" style="width: 273px;margin-left: 10px;padding-left: 10px;height: 32px;" >
                        </div>
                    </div>
                </td>

            </tr>

        </table>
    </div> -->



    <div class="hl-resume-screen-row">
        <div class="hl-resume-screen-row-div">工作城市：</div>
        <table class="hl-resume-screen-row-table">
            <tr>
                <td>
                    <button value='北京' id='work_place_1' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        北京
                    </button>
                    <button value='上海' id='work_place_2' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        上海
                    </button>
                    <button value='广州' id='work_place_3' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        广州
                    </button>
                    <button value='深圳' id='work_place_4' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        深圳
                    </button>
                    <button value='成都' id='work_place_5' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        成都
                    </button>
                    <button value='杭州' id='work_place_6' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        杭州
                    </button>
                    <button value='南京' id='work_place_7' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        南京
                    </button>
                    <button value='苏州' id='work_place_8' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        苏州
                    </button>
                    <button value='天津' id='work_place_9' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        天津
                    </button>
                    <button value='重庆' id='work_place_10' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        重庆
                    </button>

                    <button value='武汉' id='work_place_11' rel='work_place' class="hl-resume-screen-tip-button" onclick='multiSelectPlace(this);resumeSearch(1)'>
                        武汉
                    </button>

                    <span style="float: right;">
                        <span style="visibility:hidden; position: absolute;">
                        	<span style="font-size: 12px; color: #444">其他城市：</span>
                            <input type="text" class="filter-text" id='other-city-input' name="other_work_place" value="" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="filter-sure-btn" id="other-city-btn" onclick='clickText("work_place");resumeSearch(1)'>确定</button>
                        </span>
                            <span id='city' style="font-size: 12px;color: #3398ff;cursor: pointer;">更多</span>
                    </span>
                </td>
            </tr>

        </table>
    </div>

    <div style="clear: both;"></div>
    <div class="hl-resume-screen-row">
        <div class="hl-resume-screen-row-div">工作经验：</div>
        <table class="hl-resume-screen-row-table">
            <tr>
                <td>
                    <button value='0,0' id='work_year_button_1' rel='work_year' class="hl-resume-screen-tip-button" style='padding:1px 5px;' onclick='selectButton(this)'>应届毕业生</button>
                    <!-- <button value='0,0' id='work_year_button_2' rel='work_year' class="hl-resume-screen-tip-button" onclick='selectButton(this)'>1年以下</button> -->
                    <button value='1,3' id='work_year_button_3' rel='work_year' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>1-3年</button>
                    <button value='3,5' id='work_year_button_4' rel='work_year' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>3-5年</button>
                    <button value='5,10' id='work_year_button_5' rel='work_year' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>5-10年</button>
                    <button value='10,100' id='work_year_button_6' rel='work_year' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>10年以上</button>

                    <span style="float: right; margin-right: 40px;">
                        <input type="text" class="filter-text only-number" name="work_year_min" id='work_year_min' value="" style="width: 50px;" />
                        <span style="font-size: 12px;">&nbsp;—&nbsp;</span>
                        <input type="text" class="filter-text only-number" name="work_year_max" id='work_year_max' value="" style="width: 50px;" />
                        <span style="font-size: 12px; color: #444;">年&nbsp;&nbsp;</span>
                        <button class="filter-sure-btn work-year-btn" onclick='clickText("work_year");resumeSearch(1)' style="visibility: hidden;">确定</button>
                    </span>
                </td>
            </tr>
        </table>
    </div>
    <div style="clear: both;"></div>
<div style=""class="down-filter" >
    <div class="hl-resume-screen-row">
        <div class="hl-resume-screen-row-div">学历要求：</div>
        <table class="hl-resume-screen-row-table">
            <tr>
                <td>
                    <div id="dict_skill" style="width: 90px;margin-left:25px;" class="selectWrap">
                        <div class="selectBtn minSelectBtn" id="selectProvince" style="background:#fff;height:24px;line-height:9px;margin-top: 6px;padding:7px 24px 6px 16px">
                            <a class="default-val-filter" id='min_education' style="font-size: 12px;white-space: nowrap;">最低学历</a>
                        </div>
                        <ul style="display: none;width: 90px;" class="sceen_ul select_ul  select_min_education">
                            <li val="0" onclick='selectScreen(this);' style="font-size: 12px;padding:0px 12px">大专以下
                            </li>
                            <li val="1" onclick='selectScreen(this);'style="font-size: 12px;padding:0px 12px">大专
                            </li>
                            <li val="2" onclick='selectScreen(this);'style="font-size: 12px;padding:0px 12px">本科
                            </li>

                            <li val="3"  onclick='selectScreen(this);'style="font-size: 12px;padding:0px 12px">硕士
                            </li>

                            <li val="4"  onclick='selectScreen(this);'style="font-size: 12px;padding:0px 12px">MBA/EMBA
                            </li>

                            <li val="5" onclick='selectScreen(this);' style="font-size: 12px;padding:0px 12px">博士
                            </li>

                        </ul>
                    </div>
                    <span style="color: #777;">—&nbsp;</span>
                    <div id="dict_skill"  style="width: 90px;" class="selectWrap">
                        <div class="selectBtn minSelectBtn" id="selectProvince" style="background: #fff;height: 24px;line-height: 9px;margin-top: 6px;padding:7px 24px 6px 16px">
                            <a class="default-val-filter" id='max_education'style="font-size: 12px;white-space: nowrap;">最高学历</a>
                        </div>
                        <ul style="display: none;width: 90px;" class="sceen_ul select_ul select_max_education">

                        </ul>
                    </div>
                    <button style="margin-top: 6px;" class="filter-sure-btn" onclick='clickText("education");resumeSearch(1)'>确定</button>
                </td>
            </tr>
        </table>
    </div>

    <div style="clear: both;"></div>
    <div class="hl-resume-screen-row">
        <div class="hl-resume-screen-row-div">目前薪资：</div>
        <table class="hl-resume-screen-row-table">
            <tr>
                <td>
                    <button value='2000,5000' id='salary_range_1' rel='salary_range' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>
                        2－5k
                    </button>
                    <button value='5000,10000' id='salary_range_2' rel='salary_range' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>
                        5－10k
                    </button>
                    <button value='15000,25000' id='salary_range_3' rel='salary_range' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>
                        15－25k
                    </button>
                    <button value='25000,40000' id='salary_range_4'  rel='salary_range' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>
                        25－40k
                    </button>
                    <button value='40000,60000' id='salary_range_5'  rel='salary_range' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>
                        40－60k
                    </button>
                    
                    <button value='60000,9999999' id='salary_range_6'  rel='salary_range' class="hl-resume-screen-tip-button" onclick='selectButton(this);resumeSearch(1)'>
                        60k以上
                    </button>

                    <span style="float: right;margin-right: -15px;">
                        <input type="text" class="filter-text only-number" name="salary_range_min" id='salary_range_min' value="" style="width: 50px;"  />
                        <span style="color: #444;font-size: 12px;">&nbsp;—&nbsp;</span>
                        <input type="text" class="filter-text only-number" name="salary_range_max" id='salary_range_max' value="" style="width: 50px;" />
                        <span style="color: #444;font-size: 12px;">&nbsp;K&nbsp;&nbsp;</span>
                        <button class="filter-sure-btn salary-range-btn" onclick='clickText("salary_range");resumeSearch(1)' style="visibility: hidden;">确定</button>
                    </span>
                </td>
            </tr>
        </table>
    </div>

    <div style="clear: both;"></div>
    <div class="hl-resume-screen-row">
        <div class="hl-resume-screen-row-div show-language-title">语言要求：</div>
        <table class="hl-resume-screen-row-table">
            <tr>
                <td class="langeuage-td">
                    <div style="height: 46px;padding-top: 7px;">
                        <button value='英语' id='language_1' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            英语
                        </button>
                        <button value='德语' id='language_2' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            德语
                        </button>
                        <button value='法语' id='language_3' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            法语
                        </button>
                        <button value='日语' id='language_4' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            日语
                        </button>
                        <button value='韩语' id='language_5' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            韩语
                        </button>
                        <button value='意大利语' id='language_6' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            意大利语
                        </button>
                        <button value='阿拉伯语' id='language_7' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            阿拉伯语
                        </button>
                        <button value='俄语' id='language_8' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            俄语
                        </button>

                        <span class="pack-up" rel='0'>展开</span>
                    </div>
                    

                    <div style="border: solid 1px rgba(0,0,0,0); width: 100%; height: 35px; margin-top: -5px;" class="show-more-language">
                        <button value='西班牙语' id='language_9' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            西班牙语
                        </button>
                        <button value='葡萄牙语' id='language_10' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            葡萄牙语
                        </button>
                        <button value='其他外语' id='language_11' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            其他外语
                        </button>
                        <button value='粤语' id='language_12' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            粤语
                        </button>
                        <button value='闽南语' id='language_13' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            闽南语
                        </button>
                        <button value='其他方言' id='language_14' rel='language' class="hl-resume-screen-tip-button" onclick='multiSelect(this);resumeSearch(1)'>
                            其他方言
                        </button>

                    </div>
                    <div style="clear: both;"></div>
                </td>
            </tr>
        </table>
    </div>

    <div class="hl-resume-screen-row">
        <div class="hl-resume-screen-row-div">其他条件：</div>
        <table class="hl-resume-screen-row-table">
            <tr>
                <td>

                    <div id="dict_skill"  style="width: 90px;margin-left:25px;" class="selectWrap">
                        <div class="selectBtn minSelectBtn" id="selectProvince" style="background: #fff;height: 24px;line-height: 9px;margin-top: 6px;padding:7px 24px 6px 16px">
                            <a class="default-val-buy-filter" id='sex_select'style="font-size: 12px;">性别</a>
                        </div>
                        <ul style="display: none;" class="select_ul sceen_ul">
                            <li val="0" onclick='selectScreen(this);
                                    clickText("sex");resumeSearch(1)'style="font-size: 12px;">男
                            </li>
                            <li val="0" onclick='selectScreen(this);
                                    clickText("sex");resumeSearch(1)'style="font-size: 12px;">女
                            </li>
                            <li val="0" onclick='selectScreen(this);
                                    clickText("sex");resumeSearch(1)'style="font-size: 12px;">不限
                            </li>
                        </ul>
                    </div>

                    <div id="dict_skill"  style="width: 100px; margin-right: 40px;" class="selectWrap">
                        <div class="selectBtn minSelectBtn" id="selectProvince" style="background: #fff;height: 24px;line-height: 9px;margin-top: 3px;margin-left: 40px;margin-top: 6px;padding:7px 24px 6px 16px">
                            <a class="default-val-buy-filter" id='marries_select'style="font-size: 12px;">婚育</a>
                        </div>
                        <ul style="display: none; margin-left: 40px;width: 87px;min-width:90px;" class="sceen_ul select_ul">
                            <li val="0" onclick='selectScreen(this);
                                    clickText("marries");resumeSearch(1)'style="font-size: 12px;">未婚
                            </li>
                            <li val="0" onclick='selectScreen(this);
                                    clickText("marries");resumeSearch(1)'style="font-size: 12px;" >已婚
                            </li>
                            <li val="0" onclick='selectScreen(this);
                                    clickText("marries");resumeSearch(1)'style="font-size: 12px;">已婚
                            </li>
                        </ul>
                    </div>

                    <span style="margin-top: 3px;display: inline-block;">
                        <span style=" margin-left: 40px; font-size: 12px; color: #444">年龄：</span>
                        <input type="text" class="filter-text only-number" name="age_min" id='age_min' value="" style="width: 50px;"  />
                        	<span style="font-size: 12px; color: #444;">岁 —</span>
                        <input type="text" class="filter-text only-number" name="age_max" id='age_max' value="" style="width: 50px;"  />
                        <span style="font-size: 12px; color: #444;">岁 &nbsp;&nbsp;</span>
                        <button class="filter-sure-btn age-btn" onclick='clickText("age");resumeSearch(1)' style="visibility: hidden;">确定</button>
                    </span>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="more-choose" rel='0' style=" margin-top: 2px;">更多选项</div>

<div style="height: 70px; background: #fff;border-top: solid 2px rgba(127,172,249,0.3);"></div>

    <div id='language_list'></div>

    <div id='place_list'></div>

    <div id='industry_list'></div>

    <div id='industry_function_list'></div>

    <input type='hidden' name='dict_work_place' id='dict_work_place' value=''>

    <input type='hidden' name='dict_work_year' id='dict_work_year' value=''>

    <input type='hidden' name='dict_education' id='dict_education' value=''>

    <input type='hidden' name='dict_salary_range' id='dict_salary_range' value=''>

    <input type='hidden' name='dict_language' id='dict_language' value=''>

    <input type='hidden' name='dict_place' id='dict_place' value=''>

    <input type='hidden' name='dict_sex' id='dict_sex' value=''>

    <input type='hidden' name='dict_marries' id='dict_marries' value=''>

    <input type='hidden' name='dict_age' id='dict_age' value=''>

    <input type='hidden' name='dict_industry' id='dict_industry' value=''>

    <input type='hidden' name='dict_industry_function' id='dict_industry_function' value=''>

    <input type='hidden' name='search_type' id='search_type' value='1'>

    <input type='hidden' name='activate' id='activate' value=''>

    <input type='hidden' name='objectivte' id='objectivte' value=''>

    <input type='hidden' name='resume_hidden_status' id='resume_hidden_status' value ='0'>

    <input type='hidden' name='resume_operation_status' id='resume_operation_status' value='0'>


<script type="text/javascript">

$("#city").click(function (e) {
    SelCity(this,e);
});
</script>

<script type="text/javascript">



choosePositionFunction();

$("#chooseFunction").click(function(){
    var val = $(this).val();

    var reg = /,/g;
    var arr  = val.match(reg);

    if (arr == null) {
        choosePositionFunction();
    }else{

        if (arr.length ==1) {
            $("#chooseFunction").attr('disabled','disabled');
        }else{
            $("#chooseFunction").removeAttr('disabled');
        }
    }
})


function choosePositionFunction() {
    // body...
    $("#chooseFunction").click(function (e) {
        SelCityFilter(this,e);
    });
}


</script>


<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/filter/Popt-filter.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/filter/cityJson-filter.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/filter/citySet-filter.js"></script>

<script type="text/javascript">
    
    var is_language_have = 0;

    var is_current_place_have = 0

    var is_industry_have = 0;

    var is_industry_functon_have = 0;

    var is_current_place_name = ''

    var keyword = '<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
'

    var user_id = '<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'

    $(function () {
        // body...

        //点击空白地方 隐藏 下拉列表  id有问题#selectProvince
    $(document).on("click", function (e) {

        if ($(e.target).parents(".selectWrap").length == 0)
        {
            $(".select_ul").fadeOut();
        }
    })

    $('#resume_operation_status').val(0)

    // 下拉框
    $(".selectBtn").click(function (event) {
        /* Act on the event */
        $(this).next().show();
    })

    $(".select_ul li").click(function (event) {
        /* Act on the event */
        var selectVal = $(this).text();

        var selectValue = $(this).attr('val')

        if(selectValue != '-99'){

            $(this).parents().prev('.selectBtn').children().text(selectVal);
            $(".select_ul").hide();
        }

        
    })


    // 最低学历 最高学历 选择判断
    $(".select_min_education li").click(function(){
        //alert($(this).text());

        var minEducationVal = $(this).attr('val');
        switch(minEducationVal)
            {
            case '0':
              {
                
                var selectEducationVal ='<li val="99" onclick="selectScreen(this);" style="font-size: 12px;">不限</li><li val="0" onclick="selectScreen(this);" style="font-size: 12px;">大专以下</li><li val="1" onclick="selectScreen(this);"style="font-size: 12px;">大专</li><li val="2" onclick="selectScreen(this);" style="font-size: 12px;">本科</li><li val="3"  onclick="selectScreen(this);" style="font-size: 12px;">硕士</li><li val="4"  onclick="selectScreen(this);"style="font-size: 12px;">MBA/EMBA</li><li val="5" onclick="selectScreen(this);" style="font-size: 12px;" >博士</li>';

                $(".select_max_education").html(selectEducationVal);
              }
              break;
            case '1':
              {
                var selectEducationVal ='<li val="99" onclick="selectScreen(this);" style="font-size: 12px;">不限</li><li val="1" onclick="selectScreen(this);"style="font-size: 12px;">大专</li><li val="2" onclick="selectScreen(this);" style="font-size: 12px;">本科</li><li val="3"  onclick="selectScreen(this);" style="font-size: 12px;">硕士</li><li val="4"  onclick="selectScreen(this);"style="font-size: 12px;">MBA/EMBA</li><li val="5" onclick="selectScreen(this);" style="font-size: 12px;" >博士</li>';
                $(".select_max_education").html(selectEducationVal);
              }
              break;
            case '2':
              {
                var selectEducationVal ='<li val="99" onclick="selectScreen(this);" style="font-size: 12px;">不限</li><li val="2" onclick="selectScreen(this);" style="font-size: 12px;">本科</li><li val="3"  onclick="selectScreen(this);" style="font-size: 12px;">硕士</li><li val="4"  onclick="selectScreen(this);"style="font-size: 12px;">MBA/EMBA</li><li val="5" onclick="selectScreen(this);" style="font-size: 12px;" >博士</li>';
                $(".select_max_education").html(selectEducationVal);
              }
              break;
            case '3':
              {
                var selectEducationVal ='<li val="99" onclick="selectScreen(this);" style="font-size: 12px;">不限</li><li val="3"  onclick="selectScreen(this);" style="font-size: 12px;">硕士</li><li val="4"  onclick="selectScreen(this);"style="font-size: 12px;">MBA/EMBA</li><li val="5" onclick="selectScreen(this);" style="font-size: 12px;" >博士</li>';
                $(".select_max_education").html(selectEducationVal);
              }
              break;
            case '4':
              {
                var selectEducationVal ='<li val="99" onclick="selectScreen(this);" style="font-size: 12px;">不限</li><li val="4"  onclick="selectScreen(this);"style="font-size: 12px;">MBA/EMBA</li><li val="5" onclick="selectScreen(this);" style="font-size: 12px;" >博士</li>';
                $(".select_max_education").html(selectEducationVal);
              }
              break;
            case '5':
              {
                var selectEducationVal ='<li val="99" onclick="selectScreen(this);" style="font-size: 12px;">不限</li><li val="5" onclick="selectScreen(this);" style="font-size: 12px;" >博士</li>';
                $(".select_max_education").html(selectEducationVal);
              }
              break;
            default:
            }

            $('#max_education').html('不限');

    })

    $(".search-btn").click(function(){

        var searchVal = $("#search").val();
        
        if (searchVal.length !=0) {

            $('#resume_hidden_status').val(1)

            ajaxPage(1)
        }else{

            setErrorTip('请填写筛选条件');
        }
    })

        // 保存筛选器
        $(".btn-save-filter-condition").click(function(){
            $(".saveFilterDg").show();
        })

         if(keyword){

            $('#resume_hidden_status').val(1)
            
            ajaxPage(1)
        } else{

            resumeSearch(1,1)
        }

        $(".more-choose").click(function(){

            checkLogin();

            $(".down-filter").fadeToggle();
            var rel= $(this).attr('rel');

            if(rel=='1'){
                $(this).text('更多选项');
                $(this).attr('rel','0');
            }else{
                $(this).text('精简选项');
                $(this).attr('rel','1');
            }

            
        })

        $(".pack-up").click(function(){
            checkLogin();

            var rel= $(this).attr('rel');

            if (rel=='1') { //收起 

                $(this).text('展开');
                $(this).attr('rel','0');
                $(".show-language-title").css('height','auto');
                $('.show-more-language').hide();

            }else{ //展开

                $(".show-language-title").css('height','76px');
                $('.show-more-language').fadeIn();
                $(this).text('收起');
                $(this).attr('rel','1');
            }

        })

        //判断 部分输入框 只能输入数字
        $(".only-number").keyup(function(){  

        var tmptxt=$(this).val();       

        $(this).val(tmptxt.replace(/\D|^0/g,''));  

        }).bind("paste",function(){      

            var tmptxt=$(this).val();  

            $(this).val(tmptxt.replace(/\D|^0/g,'')); 

        }).css("ime-mode", "disabled");      

        //搜索tabbar
        $(".tab-ul li").click(function () {
            checkLogin();

            $(".tab-ul li").removeClass('tab-checked');

            $(this).addClass('tab-checked');

            var tabRel = $(this).attr('rel');

            if (tabRel == 1) {
                $("#search").attr('placeholder', '请输入关键字，以“空格”隔开     例如“产品经理  腾讯  北京大学”');

                $('#search_type').val(1)

            }
            if (tabRel == 2) {
                $("#search").attr('placeholder', '请输入职位名进行搜索 多个以空格分割');

                $('#search_type').val(2)
            }
            if (tabRel == 3) {
                $("#search").attr('placeholder', '请输入公司名进行搜索 多个以空格分割');

                $('#search_type').val(3)
            }
            if (tabRel == 4) {
                $("#search").attr('placeholder', '请输入学校名进行搜索 多个以空格分割');

                $('#search_type').val(4)
            }
            if (tabRel == 5) {
                $("#search").attr('placeholder', '请输入技能名进行搜索 多个以空格分割');

                $('#search_type').val(5)
            }
        })


        $(".tab-ul li").hover(function () {
            $(this).addClass('addOne');

        }, function () {
            $(this).removeClass('addOne');
        })

        // 选中 筛选条件
        $(".hl-resume-screen-tip-button").click(function () {

            checkLogin();

            var rel = $(this).attr('rel').replace(/(^\s+)|(\s+$)/g, "");

            if (rel != 'language' && rel != 'work_place' && rel != 'industry') {

                selectSingle(this)
            }else{

            	// alert(1);
            	//selectSingle(this)
            }
        })
    })

    $(".hope-other-city-btn").click(function () {
        if ($(".hope-other-city-text").val() != "") {

            alert($(".hope-other-city-text").val());
        }
    })

    // 筛选器的输入框中 不填写输入项时 隐藏 按钮
    $(".only-number").keyup(function(){

        // 工作经验
        var work_year_min = $("#work_year_min").val();
        var work_year_max = $("#work_year_max").val();
        if (work_year_min.length >0 && work_year_max.length>0) {
            $(".work-year-btn").css('visibility','inherit');
        }else{
            $(".work-year-btn").css('visibility','hidden');
        }

        // 薪资
        var salary_range_min = $("#salary_range_min").val();
        var salary_range_max = $("#salary_range_max").val();
        if (salary_range_min.length >0 && salary_range_max.length>0) {
            $(".salary-range-btn").css('visibility','inherit');
        }else{
            $(".salary-range-btn").css('visibility','hidden');
        }  

        // 年龄
        var age_min = $("#age_min").val();
        var age_max = $("#age_max").val();
        if (age_min.length >0 && age_max.length>0) {
            $(".age-btn").css('visibility','inherit');
        }else{
            $(".age-btn").css('visibility','hidden');
        }  
    })


    function cancelCondition(obj) {

        var rel = $(obj).attr("rel")

        var id = $(obj).attr('id')

        $('#' + rel).removeAttr("style");

        $('#' + rel).removeAttr("status");

        switch(id){

            case 'language':

                var screenVal = $('#' + rel).text().replace(/(^\s+)|(\s+$)/g, "");

                setLanguageListValue(screenVal);

                break;

            case 'industry':

                var screenVal = $('#' + rel).text().replace(/(^\s+)|(\s+$)/g, "");

                setIndustryValue(screenVal);

                is_industry_have = 0;

                break;

            case 'industry_function':

                var screenVal = $(obj).find('span').text().replace(/(^\s+)|(\s+$)/g, "")

                //var screenVal = $('#' + rel).text().replace(/(^\s+)|(\s+$)/g, "");

                deleteIndustryFunction(screenVal);

                is_industry_functon_have = 0;

                var dict_industry_function= $('#dict_industry_function').val()

                $("#chooseFunction").val(dict_industry_function);

                $("#chooseFunction").removeAttr('disabled');

                break;

            case 'work_place':

                var screenVal = $('#' + rel+'_span').text().replace(/(^\s+)|(\s+$)/g, "");
               
                setCurrentPlaceValue(screenVal);

                is_current_place_have = 0;

                break;

            default:

                $('#dict_' + id).val('')

        }

        $(obj).remove();

        var filter_length = $('.filter-container-span').find('button').length

        if(filter_length == 0){

            $('.btn-save-filter-condition').hide();
        }

        $('#resume_hidden_status').val(1)

        resumeSearch(1)

        

        
    }

    function clickText(name) {

        checkLogin();

        if (name) {

            switch (name) {

                case 'salary_range':

                    var salary_range_min = $('#salary_range_min').val()

                    var salary_range_max = $('#salary_range_max').val()

                    var salary_range = salary_range_min + '000,' + salary_range_max + '000'

                    var salary_range_text = salary_range_min + '-' + salary_range_max + 'k'

                    adasda('salary_range', 'salary_range_99', salary_range, salary_range_text);

                    $('#dict_salary_range').val(salary_range)

                    break;

                case 'work_year':

                    var work_year_min = $('#work_year_min').val()

                    var work_year_max = $('#work_year_max').val()

                    var work_year_string = work_year_min + ',' + work_year_max

                    var work_year_text = work_year_min + '-' + work_year_max+ '年'

                    adasda('work_year', 'work_year_99', work_year_string, work_year_text);

                    $('#dict_work_year').val(work_year_string)

                    break;

                case 'place':

                    var place_string = $('#other_place').val()

                    adasda('place', 'place_99', place_string, place_string);

                    $('#dict_place').val(place_string)

                    break;

                case 'language':

                    screenVal = $('#other_language').val();

                    var input_value = screenVal

                    var button_id = 'other_language_99'

                    var rel = 'other_language'

                    var screenVal = screenVal.replace(/(^\s+)|(\s+$)/g, "");

                    setLanguageListValue(screenVal);

                    if(is_current_place_have == 1){

                        $('#' + button_id).removeAttr("style");

                        $('#' + button_id).removeAttr("status");

                        $('.filter-container-span').find('[rel = "' + button_id + '"]').remove();

                        is_current_place_have = 0

                    } else{

                        adasda(rel, button_id, input_value, screenVal,1);

                    }

                    break;

                case 'age':

                    var age_min = $('#age_min').val()

                    var age_max = $('#age_max').val()

                    var age_string = age_min + ',' + age_max

                    var age_text = age_min + '-' + age_max + '岁'

                    adasda('age', 'age_99', age_string, age_text);

                    $('#dict_age').val(age_string)

                    break;

                case 'sex':

                    var sex_value = $('#sex_select').html().replace(/(^\s+)|(\s+$)/g, "");

                    adasda('sex', 'sex_99', sex_value, sex_value);

                    $('#dict_sex').val(sex_value)

                    break;

                case 'marries':

                    var marries_value = $('#marries_select').html().replace(/(^\s+)|(\s+$)/g, "");

                    adasda('marries', 'marries_99', marries_value, marries_value);

                    $('#dict_marries').val(marries_value)

                    break;


                case 'education':

                    var min_education = $('#min_education').html().replace(/(^\s+)|(\s+$)/g, "");

                    var max_education = $('#max_education').html().replace(/(^\s+)|(\s+$)/g, "");

                    if (min_education != '最低学历' && max_education != '最高学历') {

                        adasda('education', 'education_99', min_education + ',' + max_education, min_education + '-' + max_education);

                        $('#dict_education').val(min_education + ',' + max_education)

                    }

                    break;

                case 'work_place':

                	screenVal = $('#other-city-input').val();

                    var input_value = screenVal

                    var button_id = 'work_place_99'

                    var rel = 'work_place'

                    var screenVal = screenVal.replace(/(^\s+)|(\s+$)/g, "");

                    setCurrentPlaceValue(screenVal);

                    if(is_current_place_have == 1){

                        $('#' + button_id).removeAttr("style");

                        $('#' + button_id).removeAttr("status");

                        $('.filter-container-span').find('[rel = "' + button_id + '"]').remove();

                        is_current_place_have = 0

                    } else{

                        adasda(rel, button_id, input_value, screenVal,1);

                    }

                    break;

                case 'industry_function':

                    screenVal = $('#other-city-input').val();

                    var input_value = screenVal

                    var button_id = 'industry_function_99'

                    var rel = 'industry_function'

                    var screenVal = screenVal.replace(/(^\s+)|(\s+$)/g, "");

                    setIndustryFunction(screenVal);

                    if(is_industry_functon_have == 1){

                        is_industry_functon_have = 0;

                    } else{

                        adasda(rel, button_id, input_value, screenVal,1);
                    }


                    var dict_industry_function = $('#dict_industry_function').val()

                    //alert(dict_industry_function);

                    $("#chooseFunction").val(dict_industry_function);
                    break;
            }

            $('#resume_hidden_status').val(1)

        }
    }


    function deleteIndustryFunction(screenVal){

        checkLogin();

        var place_list_array = new Array();

        var place_list = $('#industry_function_list')

        var check = 1

        place_list.find('input').each(function () {

            var input_text = $(this).val();

            if (input_text == screenVal && is_industry_have == 0) {

                $(this).remove();

                check = 0

                is_industry_functon_have = 1
            }

        })

        var language_list_new = $('#industry_function_list')

        language_list_new.find('.industry_function_list').each(function () {

            var input_text = $(this).val();

            place_list_array.push(input_text)

        })

        if (place_list_array.length > 0) {

            var a = place_list_array.join(',')

            $('#dict_industry_function').val(a);

        } else{

            $('#dict_industry_function').val('');
        }

        resumeSearch(1)

        $('#resume_hidden_status').val(1)

    }


    function setIndustryFunction(screenVal){

        checkLogin();

        var place_list_array = new Array();

        var place_list = $('#industry_function_list')

        var check = 1

        place_list.find('input').each(function () {

            var input_text = $(this).val();

            if (input_text == screenVal && is_industry_have == 0) {

                //$(this).remove();

                check = 0

                is_industry_functon_have = 1
            }

        })

        if (check == 1) {

            $('#industry_function_list').append("<input type='hidden' class='industry_function_list' value='" + screenVal + "' />");
        }

        var language_list_new = $('#industry_function_list')

        language_list_new.find('.industry_function_list').each(function () {

            var input_text = $(this).val();

            place_list_array.push(input_text)

        })

        if (place_list_array.length > 0) {

            var a = place_list_array.join(',')

            $('#dict_industry_function').val(a);

        } else{

            $('#dict_industry_function').val('');
        }


    }

    function setIndustryValue(screenVal){

        checkLogin();

        var place_list_array = new Array();

        var place_list = $('#industry_list')

        var check = 1

        place_list.find('input').each(function () {

            var input_text = $(this).val();

            if (input_text == screenVal && is_industry_have == 0) {

                $(this).remove();

                check = 0

                is_industry_have = 1

            }

        })

        if (check == 1) {

            $('#industry_list').append("<input type='hidden' class='industry_list' value='" + screenVal + "' />");
        }

        var language_list_new = $('#industry_list')

        language_list_new.find('.industry_list').each(function () {

            var input_text = $(this).val();

            place_list_array.push(input_text)

        })

        if (place_list_array.length > 0) {

            var a = place_list_array.join(',')

            $('#dict_industry').val(a);

        } else{

             $('#dict_industry').val('');
        }

    }

    function setCurrentPlaceValue(screenVal){

        checkLogin();

        var place_list_array = new Array();

        var place_list = $('#place_list')

        var check = 1

        place_list.find('input').each(function () {

            var input_text = $(this).val();

            if (input_text == screenVal && is_current_place_have == 0) {

                $(this).remove();

                check = 0

                is_current_place_have = 1

            }

        })

        if (check == 1) {

            $('#place_list').append("<input type='hidden' class='place_list' value='" + screenVal + "' />");
        }

        var language_list_new = $('#place_list')

        language_list_new.find('.place_list').each(function () {

            var input_text = $(this).val();

            place_list_array.push(input_text)

        })

        if (place_list_array.length > 0) {

            var a = place_list_array.join(',')

            $('#dict_work_place').val(a);

        } else{

             $('#dict_work_place').val('');
        }

    }

    function setLanguageListValue(screenVal){
        checkLogin();

        var language_list_array = new Array();

        var language_list = $('#language_list')

        var check = 1

        language_list.find('input').each(function () {

            var input_text = $(this).val();

            if (input_text == screenVal) {

                $(this).remove();

                check = 0

                is_language_have = 1
            }

        })

        if (check == 1) {

            $('#language_list').append("<input type='hidden' class='language_list' value='" + screenVal + "' />");
        } 
        
        var language_list_new = $('#language_list')

        language_list_new.find('.language_list').each(function () {

            var input_text = $(this).val();

            language_list_array.push(input_text)

        })

        if (language_list_array.length > 0) {

            var a = language_list_array.join(',')
            
            $('#dict_language').val(a);

        }else{

            $('#dict_language').val('');
        }

    }

    function multiSelect(obj) {
        checkLogin();

        var input_value = $(obj).attr('value')

        var button_id = $(obj).attr('id')

        var rel = $(obj).attr('rel')

        var screenVal = $('#' + button_id).text().replace(/(^\s+)|(\s+$)/g, "");

        setLanguageListValue(screenVal);

        if(is_language_have == 1){

            $('#' + button_id).removeAttr("style");

            $('#' + button_id).removeAttr("status");

            $('.filter-container-span').find('[rel = "' + button_id + '"]').remove();

            is_language_have = 0

        } else{

            adasda(rel, button_id, input_value, screenVal,1);

        }

        $('#resume_hidden_status').val(1)
    }

    function multiSelectIndustry(obj){

        checkLogin();

        var input_value = $(obj).attr('value')

        var button_id = $(obj).attr('id')

        var rel = $(obj).attr('rel')

        var screenVal = $('#' + button_id).text().replace(/(^\s+)|(\s+$)/g, "");

        setIndustryValue(screenVal);

        if(is_industry_have == 1){

            $('#' + button_id).removeAttr("style");

            $('#' + button_id).removeAttr("status");

            $('.filter-container-span').find('[rel = "' + button_id + '"]').remove();

            is_industry_have = 0

        } else{

            adasda(rel, button_id, input_value, screenVal,1);

        }


        $('#resume_hidden_status').val(1)


    }

    function multiSelectPlace(obj) {

        checkLogin();

        var input_value = $(obj).attr('value')

        var button_id = $(obj).attr('id')

        var rel = $(obj).attr('rel')

        var screenVal = $('#' + button_id).text().replace(/(^\s+)|(\s+$)/g, "");

        setCurrentPlaceValue(screenVal);

        if(is_current_place_have == 1){

            //判断自定义工作地点 是否 与 重复的一样 

            var work_place_99 = $('#work_place_99_span').text();

            if(work_place_99.length > 0){

                var work_place_val = hirelibEngine.trimData(work_place_99)

                if(work_place_val == screenVal){

                    $('.filter-container-span').find('[rel = "work_place_99"]').remove();

                }

            }

            $('#' + button_id).removeAttr("style");

            $('#' + button_id).removeAttr("status");

            $('.filter-container-span').find('[rel = "' + button_id + '"]').remove();

            is_current_place_have = 0

        } else{

            adasda(rel, button_id, input_value, screenVal,1);

        }

     
        $('#resume_hidden_status').val(1)
        
    }

    function selectSingle(obj) {

        var input_value = $(obj).attr('value')

        var button_id = $(obj).attr('id')

        var rel = $(obj).attr('rel')

        var screenVal = $('#' + button_id).text();

        adasda(rel, button_id, input_value, screenVal);

        if (input_value && button_id && rel) {

            $('#dict_' + rel).val('')

            $('#dict_' + rel).val(input_value)
        }

     
        $('#resume_hidden_status').val(1)


    }

    function adasda(rel, button_id, selectValue, screenVal,check) {

        if(check == undefined){

            check = 0

            $('*[rel = "' + rel + '"]').removeAttr('style')

            $('*[rel = "' + rel + '"]').removeAttr('status')

        }

        $('#' + button_id).css("background", "#3398ff");

        $('#' + button_id).css("color", "#fff");

        $('#' + button_id).attr("status", "selected");

        var filter_length = $('.filter-container-span').find('[id = "' + rel + '"]').length

        if (filter_length >= 1 && check == 0) {

            $('.filter-container-span').find('[id = "' + rel + '"]').attr('rel', button_id);

            $('.filter-container-span').find('[id = "' + rel + '"]').html(screenVal + '&nbsp;&nbsp;×');

        } else {

            $(".filter-container-span").append('<button onclick="cancelCondition(this)" id="' + rel + '" class="filter-button" rel="' + button_id + '"><span id="'+button_id+'_span" class="'+rel+'">' + screenVal + '</span>&nbsp;&nbsp;×</button>')

        }

     
        $('.btn-save-filter-condition').show();

    }

    function checkLogin() {
        // body...
        var user_id = '<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
';
        if (user_id > 0) {

        }else{

            $(".loninContainer").show();
            return false;
        }
    }

    function selectButton(obj){
        
        checkLogin();

            var rel = $(obj).attr('rel').replace(/(^\s+)|(\s+$)/g, "");

            if (rel != 'language' && rel != 'work_place') {

                selectSingle(obj)
            }else{

                // alert(1);
                //selectSingle(this)

              
                $('#resume_hidden_status').val(1)
            }
    }

</script>


