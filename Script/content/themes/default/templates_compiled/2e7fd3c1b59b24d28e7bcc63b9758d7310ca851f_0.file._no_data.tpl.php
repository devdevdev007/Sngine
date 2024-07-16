<?php
/* Smarty version 4.5.1, created on 2024-07-16 07:38:38
  from 'C:\Users\Administrator\Documents\Friendly\sngine\Script\content\themes\default\templates\_no_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6696237ebf9ce2_06757706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e7fd3c1b59b24d28e7bcc63b9758d7310ca851f' => 
    array (
      0 => 'C:\\Users\\Administrator\\Documents\\Friendly\\sngine\\Script\\content\\themes\\default\\templates\\_no_data.tpl',
      1 => 1699350640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_6696237ebf9ce2_06757706 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no data -->
<div class="text-center text-muted mb20">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"80px",'height'=>"80px"), 0, false);
?>
  <div class="text-md">
    <span class="no-data"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( "No data to show" ));?>
</span>
  </div>
</div>
<!-- no data --><?php }
}
