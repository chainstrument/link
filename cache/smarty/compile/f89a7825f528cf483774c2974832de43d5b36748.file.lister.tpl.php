<?php /* Smarty version Smarty-3.1.15, created on 2014-01-24 14:22:15
         compiled from "C:\wamp\www\link\App\View\Ressource\lister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2350752e277173911a1-28509793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89a7825f528cf483774c2974832de43d5b36748' => 
    array (
      0 => 'C:\\wamp\\www\\link\\App\\View\\Ressource\\lister.tpl',
      1 => 1390405295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2350752e277173911a1-28509793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ressource' => 0,
    'item' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e2771757ecb7_65462885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e2771757ecb7_65462885')) {function content_52e2771757ecb7_65462885($_smarty_tpl) {?><table class="table">
    <thead>
    <th>Id</th>
    <th>Nom</th>
    <th>Lien</th>
    <th>Type</th>
    <th>Categorie</th>
    <th>Remarque</th>
    <th>Action</th>
    </thead>

    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ressource']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['lien'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nom_cat'];?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['remarque'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
ressource/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">supprimer</a> /
             <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
ressource/update/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">update</a> </td>
        </tr>
    <?php } ?>
</table><?php }} ?>
