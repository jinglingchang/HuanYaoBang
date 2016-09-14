<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-02 10:38:36
         compiled from "/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/new_search_resume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295423293574f9c2c195a42-41573870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff25e47bb4197b4968f92cc3889b691e35aa4048' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/new_search_resume.tpl',
      1 => 1464691169,
    ),
  ),
  'nocache_hash' => '295423293574f9c2c195a42-41573870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- 简历搜索列表style 暂放 -->
<style type="text/css">
.sort-row {
    height: 50px;
    line-height: 50px;
    border: solid 1px #e1e1e1;
    background: rgb(242, 242, 242);
    margin-bottom: 27px;
    /*        position: fixed;
        top: 0px;*/
}

.sort-row span {
    margin-left: 25px;
    color: #444;
    font-size: 16px;
}


/*    .select_ul{
        width: 110px; 
    }*/

.selectWrap ul li {
    display: block;
    padding: 0px 22px;
    cursor: pointer;
    border-bottom: 1px solid #f7f9fa;
    white-space: nowrap;
}

.filter-container-input {
    border-top: solid 1px #e1e1e1;
}

.filt-table {
    float: right;
    margin-right: 35px;
    text-align: right;
}

.filt-table tr td {
    width: 100px;
}

.top-fixed {
    position: fixed;
    top: 0;
    width: 1000px;
}
</style>
<!-- <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/taskMask.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> -->
<div style="clear: both;"></div>
<div style=" background: #fff;width: 1000px; margin: 0 auto; border: solid 1px #e1e1e1; border-bottom: none;padding-top: 70px;">
    <div style="height: 20px;background: rgb(240,240,240);width: 112%;margin-left: -1%;">
    </div>
</div>
<div style="clear: both;"></div>
<div class="hl-warp_div" style="width: 1000px; min-height: auto;">
    <input type='hidden' name='default' id='default' value='5'> <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/filter.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <div class="sort-row" id="sort-row-id">
        <span onclick='setDefaultValue();emptySearch();' style="cursor: pointer;font-size: 14px;" id='resume_search_match' class='resume_list_sort_list'>匹配值排序</span>
        <span onclick='selectPositionRedict("update_time", "soft", "1");' style="cursor: pointer;font-size: 14px; margin-left: 40px;" id='resume_search_update_time' class='resume_list_sort_list'>更新时间</span>
        <div id="dict_skill" style="width: 140px;margin-left: 15px;" class="selectWrap">
            <div class="selectBtn" id="selectProvince" style="background:rgb(242,242,242);">
                <a class="default-val-price resume_list_sort_list" id='resume_search_money'>简历价格</a>
            </div>
            <ul style="display: none;" class="select_ul sort">
                <li val="0" onclick='selectPositionRedict("money", "soft", "0")'>价格从低到高</li>
                <li val="0" onclick='selectPositionRedict("money", "soft", "1")'>价格从高到低</li>
            </ul>
        </div>
        <div id="dict_skill" style="width: 140px;" class="selectWrap">
            <div class="selectBtn" id="selectProvince" style="background: rgb(242,242,242);">
                <a class="default-val-buy-number resume_list_sort_list" id='resume_search_buy_number'>打赏数</a>
            </div>
            <ul style="display: none;" class="select_ul sort">
                <li val="0" onclick='selectPositionRedict("buy_number", "soft", "0")'>次数从低到高</li>
                <li val="0" onclick='selectPositionRedict("buy_number", "soft", "1")'>次数从高到低</li>
            </ul>
        </div>
        <table class="filt-table">
            <tr>
                <td class="sc_check">
                    <label class="virtualCheckbox" rel='activate'>已激活</label>
                </td>
                <td class="sc_check" style="width: 120px;">
                    <label class="virtualCheckbox" rel='objectivte'>有求职意向</label>
                </td>
            </tr>
        </table>
    </div>
    <div class='resume_list'></div>
</div>
<div style="height: 50px;"></div>
<input type='hidden' name='soft' id='soft' value='' />
<input type='hidden' name='defaultSort' id='defaultSort' value='0' /> <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/login.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<!-- 顶部悬浮效果 -->
<script type="text/javascript">
$(document).ready(function() {

    $(".homePage").parent().scroll(function(event) {

        var navH = $("#sort-row-id").offset().top;
        var scorH = $(".resume_list").offset().top;

        if (navH == 0 || navH < 0) {

            if ($(".sort-row").hasClass('top-fixed')) {

            } else {
                $(".sort-row").addClass('top-fixed')
            }
        }

        if (scorH > 72) {

            if ($(".sort-row").hasClass('top-fixed')) {
                $(".sort-row").removeClass('top-fixed')

            }
        }
    })

})
</script>
<script>
// Checkbox
$(".virtualCheckbox").click(function(event) {
    /* Act on the event */
    var isChecked = $(this).hasClass('checked');

    var id = $(this).attr("rel");

    if (isChecked) {
        $(this).removeClass('checked');

        var checkBoxValue = 0

    } else {

        $(this).addClass('checked');

        var checkBoxValue = 1
    }

    if (id) {

        $("#" + id).val(checkBoxValue)

        resumeSearch(1);
    }
})

// var formData = new FormData();

// displayTip('tip_industry', formData, function success(data) {

//     // $('body').append('<div id="backdrop" style="opacity: 0.7; z-index: 1000; position: absolute; width: 1280px; height: 2971px; left: 0px; top: 0px; background: rgb(0, 0, 0);display: none;"></div>');

//     $('body').append(data)

//     //$('#backdrop').show();

// });


// $(".searchvirtualCheckbox").click(function (event) {
//     /* Act on the event */
//     var isChecked = $(this).hasClass('checked');

//     var id = $(this).attr("rel");

//     if (isChecked) {
//         $(this).removeClass('checked');

//         var checkBoxValue = 0

//     } else {

//         $(this).addClass('checked');

//         var checkBoxValue = 1
//     }

//     if(id){

//         $("#"+id).val(checkBoxValue)

//         resumeSearch(1);
//     }
// })

//点击空白地方 隐藏 下拉列表  id有问题#selectProvince
$(document).on("click", function(e) {

    if ($(e.target).parents(".selectWrap").length == 0) {
        $(".select_ul").fadeOut();
    }
})

// 下拉框
$(".selectBtn").click(function(event) {
    /* Act on the event */
    $(".select_ul").hide();
    $(this).next().show();
})

$(".select_ul li").click(function(event) {
    /* Act on the event */

    setDefaultValue();

    var selectVal = $(this).text();
    $(this).parents().prev('.selectBtn').children().text(selectVal);
    $(".select_ul").hide();
})

function setDefaultValue() {

    $(".default-val-buy-number").text('购买次数');

    $(".default-val-price").text('更新价格');

}


// $('.sceen_ul li').click(function(){

//     var selectVal = $(this).text();
//     $(this).parents().prev('.selectBtn').children().text(selectVal);

//     $(".sceen_ul").hide();

// })

$('#search').bind('keypress', function(event) {
    if (event.keyCode == "13") {
        //需要处理的事情

        var searchVal = $("#search").val();

        if (searchVal.length != 0) {

            $('#resume_hidden_status').val(1)

            ajaxPage(1)
        } else {

            setErrorTip('请填写筛选条件');
        }
    }
});

function selectScreen(obj) {

    var selectVal = $(obj).text();

    $(obj).parents().prev('.selectBtn').children().text(selectVal);

    $(".sceen_ul").hide();
}

function resumeSearch(page, value) {

    value = value || 2

    var array1 = new Array('search', 'soft', 'dict_work_place', 'dict_work_year', 'dict_education', 'dict_salary_range', 'dict_language', 'dict_place', 'dict_sex', 'dict_marries', 'dict_age', 'search_type', 'dict_industry_function', 'activate', 'objectivte', 'dict_industry', 'dict_industry_function', 'resume_hidden_status');

    var array2 = new Array('search_name', 'soft', 'hope_place', 'work_year', 'education', 'salary_range', 'lanuage', 'place', 'sex', 'marriage', 'age', 'search_type', 'industry_function', 'activate', 'objectivte', 'industry', 'industry_function', 'resume_hidden_status');

    var ajax_url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_search'

    data = {}

    if (value == 2) {

        $('#resume_hidden_status').val(1)
    }

    var resume_operation_status = $('#resume_operation_status').val()

    if (resume_operation_status != 0) {

        return false;

    }

    for (var i = 0; i < array1.length; i++) {

        var name = array1[i]

        var objectName = array2[i]

        data[objectName] = $("#" + name).val()

    }

    data['type'] = 5

    data['page'] = page

    $(".loading").show();

    $('#default').val(5)

    $.ajax({
        url: ajax_url, // 跳转到 action
        data: data,
        type: 'post',
        cache: false,
        success: function(data) {

            $(".loading").hide();

            $('.resume_list').html(data)

            var resume_list_soft = $('#resume_list_sort').val()

            $('.resume_list_sort_list').css("color", '#333')

            if (resume_list_soft != '' && resume_list_soft != undefined) {

                var resume_search_soft_array = resume_list_soft.split(',')

                $('#resume_search_' + resume_search_soft_array[0]).css('color', '#3398ff');


            } else {

                $('.resume_list_sort_list').css("color", '#333')

                $('#resume_search_match').css('color', '#3398ff');
            }

        },
        error: function() {
            $(".loading").hide();
        }
    });
}

function ajaxPage(page) {

    var type = $('#default').val();

    var sort_type = $("#defaultSort").val()

    var resume_hidden_status = $('#resume_hidden_status').val()

    if (resume_hidden_status == 0) {

        var hidden_status_value = 1;

    } else if (resume_hidden_status == 1) {

        var hidden_status_value = 2;

    }

    switch (type) {

        case '5':

            resumeSearch(page, hidden_status_value);

            break;
    }
}


function selectPositionRedict(value, name, softType) {

    var soft = $('#soft').val();

    var type = $('#default').val();

    switch (name) {

        case 'soft':

            soft = value + ',' + softType;

            $('#soft').val(soft);

            break;
    }

    switch (type) {

        case '5':

            resumeSearch(1);

            break;
    }
}


function emptySearch() {

    $('#soft').val('')

    resumeSearch(1);

}


function goToResumeDetail(id, score) {
    // body...
    var user_id = '<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
';

    if (user_id > 0) {

        var keywords = $("#search").val()


        window.open('<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_detail?id=' + id + '&score=' + score + '&keyword=' + encodeURIComponent(keywords))
    } else {

        $(".loninContainer").show();
    }
}

// Screen.getScreenList();

// Screen.selectFilter(6)
</script>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/confim.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>