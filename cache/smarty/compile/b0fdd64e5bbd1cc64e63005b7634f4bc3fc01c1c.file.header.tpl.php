<?php /* Smarty version Smarty-3.1.15, created on 2014-01-24 14:14:29
         compiled from "C:\wamp\www\link\App\View\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:558552e27545b8cdb9-14437939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0fdd64e5bbd1cc64e63005b7634f4bc3fc01c1c' => 
    array (
      0 => 'C:\\wamp\\www\\link\\App\\View\\header.tpl',
      1 => 1390227110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '558552e27545b8cdb9-14437939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'js_file' => 0,
    'js_dir' => 0,
    'link' => 0,
    'css_file' => 0,
    'css_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e27545cb77c1_84265090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e27545cb77c1_84265090')) {function content_52e27545cb77c1_84265090($_smarty_tpl) {?>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" rel="stylesheet" type="text/css" media="screen" />
<?php } ?><?php }} ?>
