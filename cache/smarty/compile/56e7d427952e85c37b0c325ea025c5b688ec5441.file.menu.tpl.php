<?php /* Smarty version Smarty-3.1.15, created on 2014-01-24 14:31:40
         compiled from "C:\wamp\www\link\App\View\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1029452e27545ccff60-13610950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e7d427952e85c37b0c325ea025c5b688ec5441' => 
    array (
      0 => 'C:\\wamp\\www\\link\\App\\View\\menu.tpl',
      1 => 1390573897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1029452e27545ccff60-13610950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e27545f117c2_84427605',
  'variables' => 
  array (
    'myMenu' => 0,
    'element' => 0,
    'lien' => 0,
    'link' => 0,
    'elem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e27545f117c2_84427605')) {function content_52e27545f117c2_84427605($_smarty_tpl) {?><div class="navbar navbar-inverse " id="menu-gen" role="navigation">
        <ul class="nav navbar-nav">

             <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_smarty_tpl->tpl_vars['lien'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
 $_smarty_tpl->tpl_vars['lien']->value = $_smarty_tpl->tpl_vars['element']->key;
?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['element']->value)) {?>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lien']->value;?>
 <b class="caret"></b></a>

                         <ul class="dropdown-menu">
                        <?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elem']->_loop = false;
 $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['element']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value) {
$_smarty_tpl->tpl_vars['elem']->_loop = true;
 $_smarty_tpl->tpl_vars['link']->value = $_smarty_tpl->tpl_vars['elem']->key;
?>

                            <li class="a-sublink"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/"><?php echo ucfirst($_smarty_tpl->tpl_vars['elem']->value);?>
</a></li>
                        <?php } ?>
                        </ul></li>
                    <?php } else { ?>
                <li ><a  class="a-sublink" href="<?php echo $_smarty_tpl->tpl_vars['lien']->value;?>
/"><?php echo ucfirst($_smarty_tpl->tpl_vars['element']->value);?>
</a></li>
                    <?php }?>
             <?php } ?>
         </ul>
    <div class="  pull-right">
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                    <button class="btn " type="submit">Search </button>
                </div>
            </div>
           </form>
        </div>
</div>
<?php }} ?>
