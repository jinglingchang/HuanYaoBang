<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-08 19:41:29
         compiled from "/private/var/www/html/employer_tool/Lib/Collect/Tpl/Collect/salary_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17637640755758046924d743-89450295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf26e42849253291890484d2ae49981a8147d01d' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Collect/Tpl/Collect/salary_result.tpl',
      1 => 1465385931,
    ),
  ),
  'nocache_hash' => '17637640755758046924d743-89450295',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
    * {
        font-family: 'Hiragino Sans GB', 'Microsoft Yahei UI', 'Microsoft Yahei', 微软雅黑, 'Segoe UI', Arial, Tahoma, 宋体b8b体, SimSun, sans-serif;
    }
    
    .body-background {
        background-color: #ffffff;
        background-image: url(https://dn-gdprod-assets.qbox.me/assets/wallpaper/textures/texture_wood-a13752cd73f647273f7318b033fd3397.png?imageView2/2/w/1440);
        background-position: top center;
        background-attachment: fixed;
        background-repeat: repeat;
    }
    </style>
</head>

<body class='body-background' style='width:100%;'>
    <div >
        <div style='background-color: #2CC0C5;height:20px;width:320px;margin: 0 auto;'>&nbsp;</div>
        <div style='width:320px;margin:0 auto;background-color: white;max-height: 500px;' id='review-body'>
            <div style='height:82px;'>&nbsp;</div>
            <div style='font-size: 18px;color:#525252;width:92%;margin: 0 auto;'>根据您的信息，计算出您现在的薪资应该是：</div>
            <div style='height:39px;'>&nbsp;</div>
            <div style='text-align: center;font-size: 24px;color:#1CC0C6'><?php echo $_smarty_tpl->getVariable('salary')->value;?>
元/月</div>
            <div style='height:57px;'>&nbsp;</div>
            <div id='no-write-div' style='display:none'>
                <div style='width:90%;height:36px;background-color: #1CC0C6;color:white;margin: 0 auto;line-height: 36px;text-align: center;font-size: 16px;cursor: pointer;' onclick='submitSalary("<?php echo $_smarty_tpl->getVariable('number')->value;?>
",1)'>预估准确</div>
                <div style='height:24px;'>&nbsp;</div>
                <div style='width:90%;height:36px;margin:0 auto;' id='unsubmit_div'>
                    <span style='display: inline-block;width:40%;height:36px;border:1px solid #1CC0C6;text-align: center;color:#1CC0C6;line-height: 36px;' onclick='submitSalary("<?php echo $_smarty_tpl->getVariable('number')->value;?>
",2)'>预估偏高</span>
                    <span style='display: inline-block;width:16%;height:36px;'>&nbsp;</span>
                    <span style='display: inline-block;width:40%;height:36px;border:1px solid #1CC0C6;text-align: center;color:#1CC0C6;line-height: 36px;' onclick='submitSalary("<?php echo $_smarty_tpl->getVariable('number')->value;?>
",3)'>预估偏低</span>
                </div>
                <div style='height:40px;'>&nbsp;</div>
            </div>
            <div id='write-div' style='display:none;'>
                <div style='width:90%;margin:0 auto;font-size: 16px;color:#525252' id='unsubmit_div'>
                    <div>想获取更高薪资，请登录众人识才</div>
                    
                </div>
                <div style='height:30px;'>&nbsp;</div>
                <div style='width:90%;height:36px;background-color: #1CC0C6;color:white;margin: 0 auto;line-height: 36px;text-align: center;font-size: 16px;cursor: pointer;clear:both;' onclick='redict()'>立即体验</div>
                <div style='width:90%;font-size: 12px;margin: 0 auto;margin-top: 15px;'>我们将向您推荐高薪职位，每次推荐您将会获得10元左右的奖励。</div>
                <div style='height:20px;'>&nbsp;</div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
$(function() {

    var success_number = "<?php echo $_smarty_tpl->getVariable('success')->value;?>
"

    if (success_number == 1) {

        $('#no-write-div').hide();

        $('#write-div').show();

    } else {

        $('#no-write-div').show();

        $('#write-div').hide();
    }

    var height = window.screen.height

    $('#review-body').css('height',(parseInt(height) - 80 )+'px')

})

function redict() {

    window.location.href = 'http://www.liezoom.com/index.php/user/newCreatAccount';
}

function submitSalary(number, val) {

    params = {}

    params['number'] = number

    params['val'] = val

    $.ajax({
        url: 'http://www.liezoom.com/index.php/collect/submitSalaryInfo', // 跳转到 action  
        data: params,
        type: 'get',
        cache: false,
        success: function(data) {

            $('#no-write-div').hide();

            $('#write-div').show();

        },
        error: function(e) {}
    });
}
</script>