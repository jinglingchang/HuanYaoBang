<?php /* Smarty version Smarty-3.0-RC2, created on 2016-10-11 09:23:24
         compiled from "C:\wamp\www\hybbbb\admin/Tpl/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1725057fc3f0c078255-38069188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a7554aba6d5797be535029ffe9090d42025bab1' => 
    array (
      0 => 'C:\\wamp\\www\\hybbbb\\admin/Tpl/default/index.tpl',
      1 => 1473786538,
    ),
  ),
  'nocache_hash' => '1725057fc3f0c078255-38069188',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo $_smarty_tpl->getVariable('WEBSITEPUBLIC')->value;?>
/css/css.css" rel="stylesheet" type="text/css">

    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <title></title>
    <style>
    * {
        font-family: "黑体", "宋体", Serif;
    }
    </style>
</head>

<body class='boby'>
    <div class='bobyBackGroud' style='width:98%;margin: 0 auto;'>
        <div style='overflow: hidden; height: 86px; width: 98%;margin: 0 auto;'>
            <?php $_template = new Smarty_Internal_Template('top.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        </div>
        <div style='  background-color: #fff;
    border: 1px solid #d9dadc; width: 98% ; margin: 0 auto;height: 1000px;'>
            <div style='float: left; width: 17%;font-weight: bold;background-color: white;;'>
                <!-- <iframe frameborder='0' src="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=left&functionname=left" name="leftFrame" id="leftFrame" title="leftFrame" style=' height: 1000px; width: 196px; '></iframe> -->

                <?php $_template = new Smarty_Internal_Template('left.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

            </div>
            <div style='float: left;height: 1000px; width: 82.5%;background-color: white;'>
                <iframe frameborder='0' src="<?php echo $_smarty_tpl->getVariable('WEBSITEPUBLIC')->value;?>
/html/mainfra.html" name="mainFrame" id="mainFrame" title="mainFrame" style='height: 1000px; width: 100%;background-color: white;'></iframe>
            </div>
        </div>

        <div style='clear:both;'>&nbsp;</div>

    </div>
</body>

</html>