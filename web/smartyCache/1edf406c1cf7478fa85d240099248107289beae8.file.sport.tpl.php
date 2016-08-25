<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-16 16:39:15
         compiled from "/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/sport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1980035778573987330b8d70-34235432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1edf406c1cf7478fa85d240099248107289beae8' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/sport.tpl',
      1 => 1463387651,
    ),
  ),
  'nocache_hash' => '1980035778573987330b8d70-34235432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['skill'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('skills')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['skill']->key => $_smarty_tpl->tpl_vars['skill']->value){
?>
        <span class="live"><?php echo $_smarty_tpl->tpl_vars['skill']->value;?>
</span>
        <?php }} ?>
