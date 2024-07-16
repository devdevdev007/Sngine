<?php
/* Smarty version 4.5.1, created on 2024-07-16 07:38:38
  from 'C:\Users\Administrator\Documents\Friendly\sngine\Script\content\themes\default\templates\__categories.recursive_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6696237eaffdf5_82846289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3e0f5e58c6c86f1ec5f0d1ca7fc5861e7b0ab70' => 
    array (
      0 => 'C:\\Users\\Administrator\\Documents\\Friendly\\sngine\\Script\\content\\themes\\default\\templates\\__categories.recursive_options.tpl',
      1 => 1664801264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 2,
  ),
),false)) {
function content_6696237eaffdf5_82846289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Administrator\\Documents\\Friendly\\sngine\\Script\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<option <?php if ($_smarty_tpl->tpl_vars['data_category']->value == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected style="font-weight: 600;" class="bg-info" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
">
  <?php echo str_repeat((string) "- - ", (int) $_smarty_tpl->tpl_vars['category']->value['iteration']);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['category']->value['category_name'],30) ));?>

</option>
<?php if ($_smarty_tpl->tpl_vars['category']->value['sub_categories']) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['sub_categories'], '_category');
$_smarty_tpl->tpl_vars['_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_category']->value) {
$_smarty_tpl->tpl_vars['_category']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category'=>$_smarty_tpl->tpl_vars['_category']->value), 0, true);
?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
