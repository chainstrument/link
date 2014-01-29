<?php /* Smarty version Smarty-3.1.15, created on 2014-01-24 14:14:29
         compiled from "C:\wamp\www\link\App\View\gabarit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:741652e27545734ac9-91829240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c198890f4c9501a27910f764140dca00792289' => 
    array (
      0 => 'C:\\wamp\\www\\link\\App\\View\\gabarit.tpl',
      1 => 1390389829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '741652e27545734ac9-91829240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e27545b48793_23678018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e27545b48793_23678018')) {function content_52e27545b48793_23678018($_smarty_tpl) {?><html>
        <head>
                <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </head>
<body>
        <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="content">

            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['tpl_file']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        </div>
        
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
