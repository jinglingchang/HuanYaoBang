<?php /* Smarty version Smarty-3.0-RC2, created on 2016-10-11 09:23:26
         compiled from "C:\wamp\www\hybbbb\admin/Tpl/website/user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1744957fc3f0e05bdc0-77845200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9f90f30a89390badeb801fa042aae1c3e19232' => 
    array (
      0 => 'C:\\wamp\\www\\hybbbb\\admin/Tpl/website/user_list.tpl',
      1 => 1474429893,
    ),
  ),
  'nocache_hash' => '1744957fc3f0e05bdc0-77845200',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\hybbbb\admin\Smarty\libs\plugins\modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<style>
body {
    overflow-x: hidden;
}

.userMangerTitle {
    color: rgb(91, 91, 91);
    font-size: 2.5em;
    margin-top: 15px;
    text-align: center;
}

.sortBar {
    width: auto;
    margin-left: 25px;
    height: 25px;
    line-height: 0px;
    margin-right: 45px;
    /*        margin: 0 auto;*/
}

table tr>th {
    text-align: center;
    background-color: #eee;
}

table tr>td {
    text-align: center;
    vertical-align: middle !important;
    border-bottom-color: #D5E3E7 !important;
}

table tr:nth-of-type(even) {
    background-color: #F9FCFD;
}

.selectText {
    height: 32px;
    border-radius: 0px;
    border: #c5c5c5 solid 1px;
    box-shadow: 0px 2px 2px #888 inset;
    padding-left: 10px;
    width: 224px;
}

.selectBar {
    padding-left: 25px;
}
</style>
<script>
</script>
<div style="height: 51px;"></div>
<div class="dataArea">
    <table class="table table-bordered ">
        <tr>
            <th style="width: 121px;">序号</th>
            <th style="width: 121px;">id</th>
            <th style="width: 154px;">微信昵称</th>
            <th style="width: 154px;">性别</th>
            <th style="width: 154px;">城市</th>
            <th style="width: 154px;">手机</th>
            <th style="width: 154px;">创建时间</th>
            <th style="width: 154px;">更新时间</th>
            <th style="width: 154px;">操作</th>

            
        </tr>
        <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['nickname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['sex'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['province'];?>
<?php echo $_smarty_tpl->tpl_vars['datas']->value['city'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['phone'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['update_time'],"%Y-%m-%d");?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['create_time'],"%Y-%m-%d");?>
</td>
            <td>
                <a href="pageredirst.php?action=user&functionname=detail&id=<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
">查看详情</a>
            </td>
        </tr>
        <?php }} ?>
    </table>
</div>
<?php echo $_smarty_tpl->getVariable('fenye')->value;?>
