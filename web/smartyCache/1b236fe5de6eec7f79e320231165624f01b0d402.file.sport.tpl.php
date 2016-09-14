<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 11:40:09
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resume/Tpl/Resume/sport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2926014355732a99964b022-89666836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b236fe5de6eec7f79e320231165624f01b0d402' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resume/Tpl/Resume/sport.tpl',
      1 => 1459133972,
    ),
  ),
  'nocache_hash' => '2926014355732a99964b022-89666836',
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
