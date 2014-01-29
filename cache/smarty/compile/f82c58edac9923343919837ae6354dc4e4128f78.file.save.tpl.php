<?php /* Smarty version Smarty-3.1.15, created on 2014-01-24 14:22:09
         compiled from "C:\wamp\www\link\App\View\Ressource\save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:454652e27711d1fe20-94448633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f82c58edac9923343919837ae6354dc4e4128f78' => 
    array (
      0 => 'C:\\wamp\\www\\link\\App\\View\\Ressource\\save.tpl',
      1 => 1390400558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454652e27711d1fe20-94448633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'root' => 0,
    'list_cat' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e27711e18158_12629165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e27711e18158_12629165')) {function content_52e27711e18158_12629165($_smarty_tpl) {?><form role="form" class="form-horizontal" method="post" action=" <?php echo $_smarty_tpl->tpl_vars['root']->value;?>
ressource/add" >
    <div class="form-group">
        <label for="nom" class="col-sm-2 control-label">Nom</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="nom" name="name" placeholder="Le nom">
        </div>
    </div>
    <div class="form-group">
        <label for="lien" class="col-sm-2 control-label" >Lien</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="link" id="lien" placeholder="Le Lien">
        </div>
    </div>
    <div class="form-group">
        <label for="category" class="col-sm-2 control-label" >Categorie</label>
        <div class="col-sm-10">
            <select class="form-control" name="category">
              <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
              <?php } ?>


            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="remarque" class="col-sm-2 control-label" >Remarque</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="remarque" id="remarque" placeholder="La remarque">

            </textarea>
            </div>
    </div>
    <div class="form-group">
        <label for="type" class="col-sm-2 control-label" >Type</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="type" id="type" placeholder="Le Type">
            </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>
<?php }} ?>
