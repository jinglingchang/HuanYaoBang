<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-16 11:34:23
         compiled from "/private/var/www/html/employer_tool/Lib/Collect/Tpl/Collect/recommed_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153275986257621e3f9bb2a1-07247251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6936a6d70155a2a966b9c4149b5a4b32d621ee74' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Collect/Tpl/Collect/recommed_list.tpl',
      1 => 1465377726,
    ),
  ),
  'nocache_hash' => '153275986257621e3f9bb2a1-07247251',
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
    
    .div-1 {
        border: solid 1px #e1e1e1;
        height: 170px;
    }

    .input-style-1{

    	    border: solid 1px #CCC;
    width: 100%;
    height: 48px;
    border-radius: 3px;
    font-size: 14px;
    color: #333;
    padding-left: 1em;
    }

    </style>
    <script>
    var user_id = '<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'

    var visit_url = 'http://localhost/employer_tool'

    function redict(resume_id) {

        if (resume_id > 0) {

            window.location.href = visit_url + '/collect/resume_preview_collect?id='+resume_id

        }
    }
    </script>
</head>

<body>
    <div style='width:86%;margin: 0 auto;'>
        <div style='height: 20px;'>&nbsp;</div>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
?>
        <div class="row div-1" onclick='redict("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
")'>
            <div class="col-md-8" style='margin-top: 12px;'>
                <div style='line-height: 30px;'>
                    <span>
                        <?php echo $_smarty_tpl->getVariable('list')->value->name;?>

                    </span>
                    <span class='new-area1-td-div2'><?php echo $_smarty_tpl->getVariable('list')->value->education;?>
</span>
                </div>
                <?php if ($_smarty_tpl->getVariable('list')->value->work_info['job_title']!=''){?>
                <div style='line-height: 30px;'>
                    最近职位：<?php echo mb_substr($_smarty_tpl->getVariable('list')->value->work_info['job_title'],0,16,'utf8');?>

                </div>
                <?php }?> <?php if ($_smarty_tpl->getVariable('list')->value->workexperience!=''){?>
                <div style='line-height: 30px;'>工作经验：<?php echo $_smarty_tpl->getVariable('list')->value->workexperience;?>
</div>
                <?php }?> <?php if ($_smarty_tpl->getVariable('list')->value->work_info['company']!=''){?>
                <div style='line-height: 30px;'>
                    <span>最近公司：<?php echo mb_substr($_smarty_tpl->getVariable('list')->value->work_info['company'],0,14,'utf8');?>
</span>
                </div>
                <?php }?> <?php if ($_smarty_tpl->getVariable('list')->value->education_info['school_name']!=''){?>
                <div style='line-height: 30px;'>
                    <span>毕业学校：<?php echo $_smarty_tpl->getVariable('list')->value->education_info['school_name'];?>
</span>
                </div>
                <?php }?>
            </div>
            <!-- <div class="col-md-4">查看详情</div> -->
        </div>
        <div style='height:20px;'>&nbsp;</div>
        <?php }} ?>
        <div class="row">
            <div style='text-align: center;'>点击这里查看更多</div>
        </div>
        <div style='height:20px;'>&nbsp;</div>
    </div>
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">用户登录</h4>
                </div>
                <div class="modal-body">
                    <div style='font-size: 12px;'>还没有账号？立即注册，完成任务领取200元奖励</div>
                    <input type='text' name='user_name' id='user_name' class='input-style-1'>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick='submitrefuseContent()'>确定</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>