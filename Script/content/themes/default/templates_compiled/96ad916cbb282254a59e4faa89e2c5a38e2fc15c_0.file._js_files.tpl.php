<?php
/* Smarty version 4.5.1, created on 2024-07-16 07:38:24
  from 'C:\Users\Administrator\Documents\Friendly\sngine\Script\content\themes\default\templates\_js_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6696237052d1a4_88884545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ad916cbb282254a59e4faa89e2c5a38e2fc15c' => 
    array (
      0 => 'C:\\Users\\Administrator\\Documents\\Friendly\\sngine\\Script\\content\\themes\\default\\templates\\_js_files.tpl',
      1 => 1710680383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696237052d1a4_88884545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Administrator\\Documents\\Friendly\\sngine\\Script\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.implode.php','function'=>'smarty_modifier_implode',),1=>array('file'=>'C:\\Users\\Administrator\\Documents\\Friendly\\sngine\\Script\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!-- Initialize --><?php echo '<script'; ?>
>/* initialize vars */var site_title = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( $_smarty_tpl->tpl_vars['system']->value['system_title'] ));?>
";var site_path = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
";var ajax_path = site_path + "/includes/ajax/";var uploads_path = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
";var current_page = "<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
";var system_debugging_mode = <?php if ($_smarty_tpl->tpl_vars['system']->value['DEBUGGING']) {?>true<?php } else { ?>false<?php }?>;/* language */var system_langauge_dir = "<?php echo strtolower($_smarty_tpl->tpl_vars['system']->value['language']['dir']);?>
";var system_langauge_code = "<?php echo substr((string) $_smarty_tpl->tpl_vars['system']->value['language']['code'], (int) 0, (int) -3);?>
";/* datetime */var system_datetime_format = <?php if ($_smarty_tpl->tpl_vars['system']->value['system_datetime_format'] == "m/d/Y H:i") {?>'MM/DD/YYYY HH:mm'<?php } else { ?>'DD/MM/YYYY HH:mm'<?php }?>;/* theme */var theme_mode_night = <?php if ($_smarty_tpl->tpl_vars['system']->value['theme_mode_night']) {?>true<?php } else { ?>false<?php }?>;var theme_dir_rtl = <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "LTR") {?>false<?php } else { ?>true<?php }?>;/* payments */var currency = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
";var stripe_key = <?php if ($_smarty_tpl->tpl_vars['system']->value['stripe_mode'] == "live") {?>"<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_live_publishable'];?>
"<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_test_publishable'];?>
"<?php }?>;var twocheckout_merchant_code = "<?php echo $_smarty_tpl->tpl_vars['system']->value['2checkout_merchant_code'];?>
";var twocheckout_publishable_key = "<?php echo $_smarty_tpl->tpl_vars['system']->value['2checkout_publishable_key'];?>
";var razorpay_key = "<?php echo $_smarty_tpl->tpl_vars['system']->value['razorpay_key_id'];?>
";var securionpay_key = "<?php echo $_smarty_tpl->tpl_vars['system']->value['securionpay_api_key'];?>
";/* features */var adblock_detector = <?php if (!$_smarty_tpl->tpl_vars['user']->value->_is_admin && $_smarty_tpl->tpl_vars['system']->value['adblock_detector_enabled']) {?>true<?php } else { ?>false<?php }?>;var location_finder = <?php if (!$_smarty_tpl->tpl_vars['user']->value->_is_admin && $_smarty_tpl->tpl_vars['system']->value['location_finder_enabled']) {?>true<?php } else { ?>false<?php }?>;var desktop_infinite_scroll = <?php if ($_smarty_tpl->tpl_vars['system']->value['desktop_infinite_scroll']) {?>true<?php } else { ?>false<?php }?>;var mobile_infinite_scroll = <?php if ($_smarty_tpl->tpl_vars['system']->value['mobile_infinite_scroll']) {?>true<?php } else { ?>false<?php }?>;var auto_play_videos = <?php if ($_smarty_tpl->tpl_vars['system']->value['auto_play_videos']) {?>true<?php } else { ?>false<?php }?>;<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>/* user */var user_id = "<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
";/* ajax */var min_data_heartbeat = "<?php echo $_smarty_tpl->tpl_vars['system']->value['data_heartbeat']*1000;?>
";var min_chat_heartbeat = "<?php echo $_smarty_tpl->tpl_vars['system']->value['chat_heartbeat']*1000;?>
";/* uploads */var secret = "<?php echo $_smarty_tpl->tpl_vars['secret']->value;?>
";var accpeted_video_extensions = "<?php echo $_smarty_tpl->tpl_vars['system']->value['accpeted_video_extensions'];?>
";var accpeted_audio_extensions = "<?php echo $_smarty_tpl->tpl_vars['system']->value['accpeted_audio_extensions'];?>
";var accpeted_file_extensions = "<?php echo $_smarty_tpl->tpl_vars['system']->value['accpeted_file_extensions'];?>
";var tinymce_photos_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['tinymce_photos_enabled']) {?>true<?php } else { ?>false<?php }?>;/* chat */var chat_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>true<?php } else { ?>false<?php }?>;var chat_typing_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_typing_enabled']) {?>true<?php } else { ?>false<?php }?>;var chat_seen_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_seen_enabled']) {?>true<?php } else { ?>false<?php }?>;var chat_sound = <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['chat_sound']) {?>true<?php } else { ?>false<?php }?>;/* live */var live_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['live_enabled']) {?>true<?php } else { ?>false<?php }?>;<?php if ($_smarty_tpl->tpl_vars['system']->value['live_enabled']) {?>var agora_app_id = "<?php echo $_smarty_tpl->tpl_vars['system']->value['agora_app_id'];?>
";<?php if ($_smarty_tpl->tpl_vars['page']->value == "live") {?>var agora_uid = <?php echo $_smarty_tpl->tpl_vars['agora']->value['uid'];?>
;var agora_token = "<?php echo $_smarty_tpl->tpl_vars['agora']->value['token'];?>
";var agora_channel_name = "<?php echo $_smarty_tpl->tpl_vars['agora']->value['channel_name'];?>
";<?php }
}?>/* notifications */var notifications_sound = <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['notifications_sound']) {?>true<?php } else { ?>false<?php }?>;var noty_notifications_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['noty_notifications_enabled']) {?>true<?php } else { ?>false<?php }?>;var browser_notifications_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['browser_notifications_enabled']) {?>true<?php } else { ?>false<?php }?>;/* stories */<?php if ($_smarty_tpl->tpl_vars['system']->value['stories_enabled']) {?>var stories_duration = "<?php echo $_smarty_tpl->tpl_vars['system']->value['stories_duration'];?>
";<?php }?>/* posts */var daytime_msg_enabled = <?php if ($_smarty_tpl->tpl_vars['daytime_msg_enabled']->value) {?>true<?php } else { ?>false<?php }?>;var giphy_key = "<?php echo $_smarty_tpl->tpl_vars['system']->value['giphy_key'];?>
";var geolocation_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>true<?php } else { ?>false<?php }?>;var yandex_key = "<?php echo $_smarty_tpl->tpl_vars['system']->value['yandex_key'];?>
";var post_translation_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['post_translation_enabled']) {?>true<?php } else { ?>false<?php }?>;var voice_notes_durtaion = "<?php echo $_smarty_tpl->tpl_vars['system']->value['voice_notes_durtaion'];?>
";var voice_notes_encoding = "<?php echo $_smarty_tpl->tpl_vars['system']->value['voice_notes_encoding'];?>
";<?php }
echo '</script'; ?>
><?php echo '<script'; ?>
>/* i18n for JS */var __ = [];__['Ask something'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Ask something' ));?>
";__['Add Friend'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Add Friend' ));?>
";__['Friends'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Friends' ));?>
";__['Sent'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Sent' ));?>
";__['Following'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Following' ));?>
";__['Follow'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Follow' ));?>
";__['Pending'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Pending' ));?>
";__['Remove'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Remove' ));?>
";__['Error'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Error' ));?>
";__['Success'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Success' ));?>
";__['Loading'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Loading' ));?>
";__['Like'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Like' ));?>
";__['Unlike'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Unlike' ));?>
";__['React'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'React' ));?>
";__['Joined'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Joined' ));?>
";__['Join'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Join' ));?>
";__['Remove Admin'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Remove Admin' ));?>
";__['Make Admin'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Make Admin' ));?>
";__['Going'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Going' ));?>
";__['Interested'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Interested' ));?>
";__['Delete'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Delete' ));?>
";__['Delete Cover'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Delete Cover' ));?>
";__['Delete Picture'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Delete Picture' ));?>
";__['Delete Post'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Delete Post' ));?>
";__['Delete Comment'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Delete Comment' ));?>
";__['Delete Conversation'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Delete Conversation' ));?>
";__['Report'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Report' ));?>
";__['Block User'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Block User' ));?>
";__['Unblock User'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Unblock User' ));?>
";__['Mark as Available'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Mark as Available' ));?>
";__['Mark as Sold'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Mark as Sold' ));?>
";__['Save Post'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Save Post' ));?>
";__['Unsave Post'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Unsave Post' ));?>
";__['Boost Post'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Boost Post' ));?>
";__['Unboost Post'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Unboost Post' ));?>
";__['Pin Post'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Pin Post' ));?>
";__['Unpin Post'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Unpin Post' ));?>
";__['For Everyone'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'For Everyone' ));?>
";__['For Subscribers Only'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'For Subscribers Only' ));?>
";__['Verify'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Verify' ));?>
";__['Decline'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Decline' ));?>
";__['Boost'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Boost' ));?>
";__['Unboost'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Unboost' ));?>
";__['Mark as Paid'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Mark as Paid' ));?>
";__['Read more'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Read more' ));?>
";__['Read less'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Read less' ));?>
";__['Turn On Chat'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Turn On Chat' ));?>
";__['Turn Off Chat'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Turn Off Chat' ));?>
";__['Monthly Average'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Monthly Average' ));?>
";__['PayIn Methods'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'PayIn Methods' ));?>
";__['PayIn Types'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'PayIn Types' ));?>
";__['Commissions Types'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Commissions Types' ));?>
";__['Packages'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Packages' ));?>
";__['Jan'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Jan' ));?>
";__['Feb'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Feb' ));?>
";__['Mar'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Mar' ));?>
";__['Apr'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Apr' ));?>
";__['May'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'May' ));?>
";__['Jun'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Jun' ));?>
";__['Jul'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Jul' ));?>
";__['Aug'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Aug' ));?>
";__['Sep'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Sep' ));?>
";__['Oct'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Oct' ));?>
";__['Nov'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Nov' ));?>
";__['Dec'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Dec' ));?>
";__['Users'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Users' ));?>
";__['Pages'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Pages' ));?>
";__['Groups'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Groups' ));?>
";__['Events'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Events' ));?>
";__['Posts'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Posts' ));?>
";__['Translated'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Translated' ));?>
";__['Are you sure you want to delete this?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to delete this?' ));?>
";__['Are you sure you want to remove your cover photo?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to remove your cover photo?' ));?>
";__['Are you sure you want to remove your profile picture?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to remove your profile picture?' ));?>
";__['Are you sure you want to delete this post?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to delete this post?' ));?>
";__['Are you sure you want to delete this comment?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to delete this comment?' ));?>
";__['Are you sure you want to delete this conversation?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to delete this conversation?' ));?>
";__['Are you sure you want to report this?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to report this?' ));?>
";__['Are you sure you want to block this user?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to block this user?' ));?>
";__['Are you sure you want to unblock this user?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to unblock this user?' ));?>
";__['Are you sure you want to delete your account?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to delete your account?' ));?>
";__['Are you sure you want to verify this request?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to verify this request?' ));?>
";__['Are you sure you want to decline this request?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to decline this request?' ));?>
";__['Are you sure you want to approve this request?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to approve this request?' ));?>
";__['Are you sure you want to do this?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to do this?' ));?>
";__['Factory Reset'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Factory Reset' ));?>
";__['Are you sure you want to reset your website?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to reset your website?' ));?>
";__['There is something that went wrong!'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'There is something that went wrong!' ));?>
";__['There is no more data to show'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'There is no more data to show' ));?>
";__['This website uses cookies to ensure you get the best experience on our website'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'This website uses cookies to ensure you get the best experience on our website' ));?>
";__['Got It!'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Got It!' ));?>
";__['Learn More'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Learn More' ));?>
";__['No result found'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'No result found' ));?>
";__['Turn on Commenting'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Turn on Commenting' ));?>
";__['Turn off Commenting'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Turn off Commenting' ));?>
";__['Day Mode'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Day Mode' ));?>
";__['Night Mode'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Night Mode' ));?>
";__['Message'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Message' ));?>
";__['You haved poked'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You haved poked' ));?>
";__['Touch to unmute'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Touch to unmute' ));?>
";__['Press space to see next'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Press space to see next' ));?>
";__['Visit link'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Visit link' ));?>
";__['ago'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'ago' ));?>
";__['hour'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'hour' ));?>
";__['hours'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'hours' ));?>
";__['minute'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'minute' ));?>
";__['minutes'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'minutes' ));?>
";__['from now'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'from now' ));?>
";__['seconds'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'seconds' ));?>
";__['yesterday'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'yesterday' ));?>
";__['tomorrow'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'tomorrow' ));?>
";__['days'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'days' ));?>
";__['Nothing selected'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Nothing selected' ));?>
";__['Seen by'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Seen by' ));?>
";__['Ringing'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Ringing' ));?>
";__['is Offline'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'is Offline' ));?>
";__['is Busy'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'is Busy' ));?>
";__['No Answer'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'No Answer' ));?>
";__['You can not connect to this user'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You can not connect to this user' ));?>
";__['You have an active call already'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You have an active call already' ));?>
";__['The recipient declined the call'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'The recipient declined the call' ));?>
";__['Connection has been lost'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Connection has been lost' ));?>
";__['You must fill in all of the fields'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You must fill in all of the fields' ));?>
";__['Hide from Timeline'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Hide from Timeline' ));?>
";__['Allow on Timeline'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Allow on Timeline' ));?>
";__['Are you sure you want to hide this post from your profile timeline? It may still appear in other places like newsfeed and search results'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to hide this post from your profile timeline? It may still appear in other places like newsfeed and search results' ));?>
";__['Select All'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Select All' ));?>
";__['Deselect All'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Deselect All' ));?>
";__['Total'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Total' ));?>
";__['Stop Campaign'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Stop Campaign' ));?>
";__['Resume Campaign'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Resume Campaign' ));?>
";__['Sorry, WebRTC is not available in your browser'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Sorry, WebRTC is not available in your browser' ));?>
";__['Not able to connect, Try again later!'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Not able to connect, Try again later!' ));?>
";__['You are ready to Go Live now'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You are ready to Go Live now' ));?>
";__['Getting permissions failed'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Getting permissions failed' ));?>
";__['Going Live'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Going Live' ));?>
";__['You are live now'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You are live now' ));?>
";__['You are offline now'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You are offline now' ));?>
";__['Going live failed'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Going live failed' ));?>
";__['Online'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Online' ));?>
";__['Offline'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Offline' ));?>
";__['Switching stream sources'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Switching stream sources' ));?>
";__['Successfully switched to new device'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Successfully switched to new device' ));?>
";__['Unable to determine device type'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Unable to determine device type' ));?>
";__['Failed to switch to new device'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Failed to switch to new device' ));?>
";__['Ending live error'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Ending live error' ));?>
";__['Joining live stream failed'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Joining live stream failed' ));?>
";__['Video Muted'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Video Muted' ));?>
";__['Audio Muted'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Audio Muted' ));?>
";__['Live Ended'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Live Ended' ));?>
";__['Try Package'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Try Package' ));?>
";__['Are you sure you want to subscribe to this free package?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to subscribe to this free package?' ));?>
";__['Sneak Peak'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Sneak Peak' ));?>
";__['Are you sure you want to subscribe to this free plan?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to subscribe to this free plan?' ));?>
";__['Processing'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Processing' ));?>
";__['Your video is being processed, We will let you know when it is ready!'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Your video is being processed, We will let you know when it is ready!' ));?>
";__['Under Review'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Under Review' ));?>
";__['Your post is under review now, We will let you know when it is ready!'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Your post is under review now, We will let you know when it is ready!' ));?>
";__['Payment Confirmation'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Payment Confirmation' ));?>
";__['This message will cost you'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'This message will cost you' ));?>
";__['This call will cost you'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'This call will cost you' ));?>
";__['Login As'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Login As' ));?>
";__['Are you sure you want to login as this user?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to login as this user?' ));?>
";__['Are you sure you want to switch back to your account?'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Are you sure you want to switch back to your account?' ));?>
";/* i18n for DataTables */__['Processing...'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Processing...' ));?>
";__['Search:'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Search:' ));?>
";__['Show _MENU_ entries'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Show _MENU_ entries' ));?>
";__['Showing _START_ to _END_ of _TOTAL_ entries'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Showing _START_ to _END_ of _TOTAL_ entries' ));?>
";__['Showing 0 to 0 of 0 entries'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Showing 0 to 0 of 0 entries' ));?>
";__['(filtered from _MAX_ total entries)'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( '(filtered from _MAX_ total entries)' ));?>
";__['Loading...'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Loading...' ));?>
";__['No matching records found'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'No matching records found' ));?>
";__['No data available in table'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'No data available in table' ));?>
";__['First'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'First' ));?>
";__['Previous'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Previous' ));?>
";__['Next'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Next' ));?>
";__['Last'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Last' ));?>
";__[': activate to sort column ascending'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( ': activate to sort column ascending' ));?>
";__[': activate to sort column descending'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( ': activate to sort column descending' ));?>
";/* i18n for OneSignal */__['Subscribe to notifications'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Subscribe to notifications' ));?>
";__['You are subscribed to notifications'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You are subscribed to notifications' ));?>
";__['You have blocked notifications'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You have blocked notifications' ));?>
";__['Click to subscribe to notifications'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Click to subscribe to notifications' ));?>
";__['Thanks for subscribing!'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Thanks for subscribing!' ));?>
";__['You are subscribed to notifications'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You are subscribed to notifications' ));?>
";__['You will not receive notifications again'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'You will not receive notifications again' ));?>
";__['Manage Site Notifications'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Manage Site Notifications' ));?>
";__['SUBSCRIBE'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'SUBSCRIBE' ));?>
";__['UNSUBSCRIBE'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'UNSUBSCRIBE' ));?>
";__['Unblock Notifications'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Unblock Notifications' ));?>
";__['Follow these instructions to allow notifications:'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Follow these instructions to allow notifications:' ));?>
";/* i18n for Video.js */__['Play'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Play' ));?>
";__['Pause'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Pause' ));?>
";__['Mute'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Mute' ));?>
";__['Unmute'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Unmute' ));?>
";__['Current Time'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Current Time' ));?>
";__['Duration'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Duration' ));?>
";__['Remaining Time'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Remaining Time' ));?>
";__['Fullscreen'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Fullscreen' ));?>
";__['Picture-in-Picture'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Picture-in-Picture' ));?>
";/* i18n for Highcharts.js */__['View Fullscreen'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'View Fullscreen' ));?>
";__['Print Chart'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Print Chart' ));?>
";__['Download PNG'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Download PNG' ));?>
";__['Download JPEG'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Download JPEG' ));?>
";__['Download PDF'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Download PDF' ));?>
";__['Download SVG vector image'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Download SVG vector image' ));?>
";__['Chart context menu'] = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ '__' ][ 0 ], array( 'Chart context menu' ));?>
";<?php echo '</script'; ?>
><!-- Initialize --><!-- Dependencies Libs [jQuery|Bootstrap] --><?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><!-- Dependencies Libs [jQuery|Bootstrap] --><!-- Dependencies Plugins --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/mustache/mustache.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/jquery-form/dist/jquery.form.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/jquery-inview/jquery.inview.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/autosize/dist/autosize.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/readmore-js/readmore.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/moment/min/moment-with-locales.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://unpkg.com/video.js@7.21.1/dist/video.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><link href="https://unpkg.com/@silvermine/videojs-quality-selector/dist/css/quality-selector.css" rel="stylesheet"><?php echo '<script'; ?>
 src="https://unpkg.com/@silvermine/videojs-quality-selector/dist/js/silvermine-videojs-quality-selector.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><link href="https://unpkg.com/video.js@7.21.1/dist/video-js.min.css" rel="stylesheet"><?php if ($_smarty_tpl->tpl_vars['system']->value['auto_play_videos']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/jquery-fracs/dist/jquery.fracs.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?><!-- jQuery-UI --><?php echo '<script'; ?>
>
      var _tooltip = jQuery.fn.tooltip;
    <?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
>
      jQuery.fn.tooltip = _tooltip;
    <?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/triggeredautocomplete/jquery-ui.triggeredAutocomplete.js"><?php echo '</script'; ?>
><!-- jQuery-UI --><!-- Sticky Sidebar --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/theia-sticky-sidebar/dist/theia-sticky-sidebar.min.js"><?php echo '</script'; ?>
><!-- Sticky Sidebar --><!-- Slick Slider --><?php if ($_smarty_tpl->tpl_vars['page']->value == "index") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/slick-carousel/slick/slick.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/slick-carousel/slick/slick.css"><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/slick-carousel/slick/slick-theme.css"><?php }?><!-- Slick Slider --><!-- Google Geocomplete --><?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {
echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.min.js" integrity="sha512-4bp4fE4hv0i/1jLM7d+gXDaCAhnXXfGBKdHrBcpGBgnz7OlFMjUgVH4kwB85YdumZrZyryaTLnqGKlbmBatCpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
"><?php echo '</script'; ?>
><?php }?><!-- Google Geocomplete --><!-- Crop Profile Picture & Reposition Cover Photo --><?php if ($_smarty_tpl->tpl_vars['page']->value == "started" || $_smarty_tpl->tpl_vars['page']->value == "profile" || $_smarty_tpl->tpl_vars['page']->value == "page" || $_smarty_tpl->tpl_vars['page']->value == "group" || $_smarty_tpl->tpl_vars['page']->value == "event") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/JQ-Image-Drag/script/jquery.imagedrag.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/rcrop/dist/rcrop.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/rcrop/dist/rcrop.min.css"><?php }?><!-- Crop Profile Picture & Reposition Cover Photo --><!-- Stories --><?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == '') {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/zuck.js/dist/zuck.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/zuck.js/dist/zuck.min.css"><?php }?><!-- Stories --><!-- Voice Notes --><?php if ($_smarty_tpl->tpl_vars['system']->value['voice_notes_posts_enabled'] || $_smarty_tpl->tpl_vars['system']->value['voice_notes_comments_enabled'] || $_smarty_tpl->tpl_vars['system']->value['voice_notes_chat_enabled']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/web-audio-recorder-js/lib-minified/WebAudioRecorder.min.js"><?php echo '</script'; ?>
><?php }?><!-- Voice Notes --><!-- TinyMCE --><?php if ($_smarty_tpl->tpl_vars['page']->value == "admin" || $_smarty_tpl->tpl_vars['page']->value == "blogs" || $_smarty_tpl->tpl_vars['page']->value == "forums") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/tinymce/tinymce.min.js"><?php echo '</script'; ?>
><?php }?><!-- TinyMCE --><!-- Stripe & 2Checkout & Razorpay & SecurionPay --><?php if ($_smarty_tpl->tpl_vars['page']->value == "packages" || $_smarty_tpl->tpl_vars['page']->value == "ads" || $_smarty_tpl->tpl_vars['page']->value == "wallet" || ($_smarty_tpl->tpl_vars['page']->value == "index" || $_smarty_tpl->tpl_vars['page']->value == "profile" || $_smarty_tpl->tpl_vars['page']->value == "page" || $_smarty_tpl->tpl_vars['page']->value == "group" || $_smarty_tpl->tpl_vars['page']->value == "post" || $_smarty_tpl->tpl_vars['page']->value == "directory" || $_smarty_tpl->tpl_vars['page']->value == "search" || $_smarty_tpl->tpl_vars['page']->value == "movies")) {
if ($_smarty_tpl->tpl_vars['system']->value['creditcard_enabled'] || $_smarty_tpl->tpl_vars['system']->value['alipay_enabled']) {
echo '<script'; ?>
 src="https://js.stripe.com/v3"><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['system']->value['2checkout_enabled']) {
echo '<script'; ?>
 src="https://www.2checkout.com/checkout/api/2co.min.js"><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['system']->value['razorpay_enabled']) {
echo '<script'; ?>
 src="https://checkout.razorpay.com/v1/checkout.js"><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['system']->value['securionpay_enabled']) {
echo '<script'; ?>
 src="https://securionpay.com/checkout.js"><?php echo '</script'; ?>
><?php }
}?><!-- Stripe & 2Checkout & Razorpay & SecurionPay --><!-- Twilio --><?php if ($_smarty_tpl->tpl_vars['system']->value['audio_call_enabled'] || $_smarty_tpl->tpl_vars['system']->value['video_call_enabled']) {
echo '<script'; ?>
 src="https://sdk.twilio.com/js/video/releases/2.20.1/twilio-video.min.js"><?php echo '</script'; ?>
><?php }?><!-- Twilio --><!-- Agora --><?php if ($_smarty_tpl->tpl_vars['system']->value['live_enabled']) {
echo '<script'; ?>
 src="https://download.agora.io/sdk/release/AgoraRTC_N-4.18.0.js"><?php echo '</script'; ?>
><?php }?><!-- Agora --><!-- Easytimer --><?php if ($_smarty_tpl->tpl_vars['system']->value['audio_call_enabled'] || $_smarty_tpl->tpl_vars['system']->value['video_call_enabled'] || $_smarty_tpl->tpl_vars['system']->value['voice_notes_posts_enabled'] || $_smarty_tpl->tpl_vars['system']->value['voice_notes_comments_enabled'] || $_smarty_tpl->tpl_vars['system']->value['voice_notes_chat_enabled']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/easytimer.js/dist/easytimer.min.js"><?php echo '</script'; ?>
><?php }?><!-- Easytimer --><!-- Datatables --><?php if ($_smarty_tpl->tpl_vars['page']->value == "admin" || $_smarty_tpl->tpl_vars['page']->value == "ads" || $_smarty_tpl->tpl_vars['page']->value == "wallet" || $_smarty_tpl->tpl_vars['page']->value == "developers") {?><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.min.css" /><?php echo '<script'; ?>
 src="https://cdn.datatables.net/2.0.2/js/dataTables.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.min.js"><?php echo '</script'; ?>
><?php }?><!-- Datatables --><!-- Tagify --><?php if ($_smarty_tpl->tpl_vars['page']->value == "packages" || $_smarty_tpl->tpl_vars['page']->value == "settings" || $_smarty_tpl->tpl_vars['page']->value == "blogs") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/@yaireo/tagify/dist/jQuery.tagify.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
//node_modules/@yaireo/tagify/dist/tagify.css"><?php }?><!-- Tagify --><!-- HTML2PDF --><?php if ($_smarty_tpl->tpl_vars['page']->value == "market") {
echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"><?php echo '</script'; ?>
><?php }?><!-- HTML2PDF --><!-- Clipboard --><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js" integrity="sha512-7O5pXpc0oCRrxk8RUfDYFgn0nO1t+jLuIOQdOMRp4APB7uZ4vSjspzp5y6YDtDs4VzUSTbWzBFZ/LKJhnyFOKw==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
><!-- Clipboard --><!-- XRegExp --><?php echo '<script'; ?>
 src="https://unpkg.com/xregexp/xregexp-all.js"><?php echo '</script'; ?>
><!-- XRegExp --><?php }?><!-- Dependencies Plugins --><!-- System [JS] --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core/core.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core/user.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core/post.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core/chat.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core/ad_code.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->tpl_vars['system']->value['live_enabled'] && $_smarty_tpl->tpl_vars['page']->value == "live") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core/live.js"><?php echo '</script'; ?>
><?php }
} else {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core/login.js" defer><?php echo '</script'; ?>
><?php }?><!-- System [JS] --><?php if ($_smarty_tpl->tpl_vars['page']->value == "admin") {?><!-- Dependencies Plugins --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/jquery-treegrid/js/jquery.treegrid.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/jquery-treegrid/css/jquery.treegrid.css"><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js" integrity="sha512-8RnEqURPUc5aqFEN04aQEiPlSAdE0jlFS/9iGgUyNtwFnSKCXhmB6ZTNl7LnDtDWKabJIASzXrzD0K+LYexU9g==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/css/css.min.js" integrity="sha512-rQImvJlBa8MV1Tl1SXR5zD2bWfmgCEIzTieFegGg89AAt7j/NBEe50M5CqYQJnRwtkjKMmuYgHBqtD1Ubbk5ww==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/javascript/javascript.min.js" integrity="sha512-I6CdJdruzGtvDyvdO4YsiAq+pkWf2efgd1ZUSK2FnM/u2VuRASPC7GowWQrWyjxCZn6CT89s3ddGI+be0Ak9Fg==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.css" integrity="sha512-uf06llspW44/LZpHzHT6qBOIVODjWtv4MxCricRxkzvopAlSWnTf6hpZTFxuuZcuNE9CBQhqE0Seu1CoRk84nQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/@yaireo/tagify/dist/jQuery.tagify.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
//node_modules/@yaireo/tagify/dist/tagify.css"><!-- Dependencies Plugins [JS] --><!-- System [JS] --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/core/admin.js"><?php echo '</script'; ?>
><!-- System [JS] --><!-- Admin Charts --><?php echo '<script'; ?>
 src="https://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://code.highcharts.com/modules/exporting.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->tpl_vars['view']->value == "dashboard") {
echo '<script'; ?>
>$(function() {$('#admin-chart-dashboard').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['Monthly Average']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total']}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [{name: __['Users'],data: [<?php echo smarty_modifier_implode(',',$_smarty_tpl->tpl_vars['chart']->value['users']);?>
]},{name: __['Pages'],data: [<?php echo smarty_modifier_implode(',',$_smarty_tpl->tpl_vars['chart']->value['pages']);?>
]},{name: __['Groups'],data: [<?php echo smarty_modifier_implode(',',$_smarty_tpl->tpl_vars['chart']->value['groups']);?>
]},{name: __['Events'],data: [<?php echo smarty_modifier_implode(',',$_smarty_tpl->tpl_vars['chart']->value['events']);?>
]},{name: __['Posts'],data: [<?php echo smarty_modifier_implode(',',$_smarty_tpl->tpl_vars['chart']->value['posts']);?>
]}]});});<?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['view']->value == "earnings" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {
echo '<script'; ?>
>$(function() {$('#payment-methods-chart').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['PayIn Methods']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total'] + ' ' + '(' + currency + ')'}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>{name: '<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['method']->value);?>
',data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods_chart']->value, 'payments', false, 'month');
$_smarty_tpl->tpl_vars['payments']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['month']->value => $_smarty_tpl->tpl_vars['payments']->value) {
$_smarty_tpl->tpl_vars['payments']->do_else = false;
echo $_smarty_tpl->tpl_vars['payments']->value[$_smarty_tpl->tpl_vars['method']->value];?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]},<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]});$('#payment-handles-chart').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['PayIn Types']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total'] + ' ' + '(' + currency + ')'}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_handles']->value, 'handle');
$_smarty_tpl->tpl_vars['handle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['handle']->value) {
$_smarty_tpl->tpl_vars['handle']->do_else = false;
?>{name: '<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['handle']->value);?>
',data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_handles_chart']->value, 'payments', false, 'month');
$_smarty_tpl->tpl_vars['payments']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['month']->value => $_smarty_tpl->tpl_vars['payments']->value) {
$_smarty_tpl->tpl_vars['payments']->do_else = false;
echo $_smarty_tpl->tpl_vars['payments']->value[$_smarty_tpl->tpl_vars['handle']->value];?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]},<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]});});<?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['view']->value == "earnings" && $_smarty_tpl->tpl_vars['sub_view']->value == "commissions") {
echo '<script'; ?>
>$(function() {$('#commissions-chart').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['Commissions Types']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total'] + ' ' + '(' + currency + ')'}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commissions_handles']->value, 'handle');
$_smarty_tpl->tpl_vars['handle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['handle']->value) {
$_smarty_tpl->tpl_vars['handle']->do_else = false;
?>{name: '<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['handle']->value);?>
',data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commissions_handles_chart']->value, 'commissions', false, 'month');
$_smarty_tpl->tpl_vars['commissions']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['month']->value => $_smarty_tpl->tpl_vars['commissions']->value) {
$_smarty_tpl->tpl_vars['commissions']->do_else = false;
echo $_smarty_tpl->tpl_vars['commissions']->value[$_smarty_tpl->tpl_vars['handle']->value];?>
,<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]},<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]});});<?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['view']->value == "earnings" && $_smarty_tpl->tpl_vars['sub_view']->value == "packages") {
echo '<script'; ?>
>$(function() {$('#admin-chart-earnings').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['Packages']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total'] + ' ' + '(' + currency + ')'}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>{name: "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
",data: [<?php echo smarty_modifier_implode(',',$_smarty_tpl->tpl_vars['value']->value['months_sales']);?>
]},<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]});});<?php echo '</script'; ?>
><?php }?><!-- Admin Charts --><!-- Admin Code Editor --><?php if ($_smarty_tpl->tpl_vars['view']->value == "design") {
echo '<script'; ?>
>
        $(function() {
          CodeMirror.fromTextArea(document.getElementById('custome_js_header'), {
            mode: "javascript",
            lineNumbers: true,
            readOnly: false
          });

          CodeMirror.fromTextArea(document.getElementById('custome_js_footer'), {
            mode: "javascript",
            lineNumbers: true,
            readOnly: false
          });

          CodeMirror.fromTextArea(document.getElementById('custom-css'), {
            mode: "css",
            lineNumbers: true,
            readOnly: false
          });
        });
      <?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "uploads") {
echo '<script'; ?>
>
        $(function() {
          $('.nav-tabs a').on('shown.bs.tab', function() {
            cm.refresh();
          });
          cm = CodeMirror.fromTextArea(document.getElementById('google_cloud_file'), {
            mode: "javascript",
            lineNumbers: true,
            readOnly: false
          });
        });
      <?php echo '</script'; ?>
><?php }?><!-- Admin Code Editor --><?php }?><!-- Cookies Policy --><?php if ($_smarty_tpl->tpl_vars['system']->value['cookie_consent_enabled']) {
echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js" <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" /><?php echo '<script'; ?>
>window.addEventListener("load", function() {window.cookieconsent.initialise({"palette": {"popup": {"background": "#1e2321","text": "#fff"},"button": {"background": "#5e72e4"}},"theme": "edgeless","position": <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == 'LTR') {?>"bottom-left"<?php } else { ?>"bottom-right"<?php }?>,"content": {"message": __['This website uses cookies to ensure you get the best experience on our website'],"dismiss": __['Got It!'],"link": __['Learn More'],"href": site_path + "/static/privacy"}})});<?php echo '</script'; ?>
><?php }?><!-- Cookies Policy --><!-- OneSignal Notifications --><?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['system']->value['onesignal_notification_enabled']) {
echo '<script'; ?>
 src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""><?php echo '</script'; ?>
><?php echo '<script'; ?>
>var onesignal_app_id = "<?php echo $_smarty_tpl->tpl_vars['system']->value['onesignal_app_id'];?>
";var onesignal_user_id = "<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['onesignal_user_id'];?>
";var onesignal_push_id = "";var OneSignal = window.OneSignal || [];OneSignal.push(function() {OneSignal.init({appId: onesignal_app_id,autoResubscribe: false,notifyButton: {enable: true,/* Required to use the Subscription Bell */size: 'medium',/* One of 'small', 'medium', or 'large' */theme: 'default',/* One of 'default' (red-white) or 'inverse" (white-red) */position: (theme_dir_rtl) ? 'bottom-right' : 'bottom-left',/* Either 'bottom-left' or 'bottom-right' */offset: {bottom: '20px',left: '20px',/* Only applied if bottom-left */right: '20px' /* Only applied if bottom-right */},prenotify: true,/* Show an icon with 1 unread message for first-time site visitors */showCredit: false,/* Hide the OneSignal logo */text: {'tip.state.unsubscribed': __['Subscribe to notifications'],'tip.state.subscribed': __['You are subscribed to notifications'],'tip.state.blocked': __['You have blocked notifications'],'message.prenotify': __['Click to subscribe to notifications'],'message.action.subscribed': __['Thanks for subscribing!'],'message.action.resubscribed': __['You are subscribed to notifications'],'message.action.unsubscribed': __['You will not receive notifications again'],'dialog.main.title': __['Manage Site Notifications'],'dialog.main.button.subscribe': __['SUBSCRIBE'],'dialog.main.button.unsubscribe': __['UNSUBSCRIBE'],'dialog.blocked.title': __['Unblock Notifications'],'dialog.blocked.message': __['Follow these instructions to allow notifications:']},colors: {'circle.background': 'rgb(84,110,123)','circle.foreground': 'white','badge.background': 'rgb(84,110,123)','badge.foreground': 'white','badge.bordercolor': 'white','pulse.color': 'white','dialog.button.background.hovering': 'rgb(77, 101, 113)','dialog.button.background.active': 'rgb(70, 92, 103)','dialog.button.background': 'rgb(84,110,123)','dialog.button.foreground': 'white'},},allowLocalhostAsSecureOrigin: true,});OneSignal.getUserId(function(userId) {onesignal_push_id = userId;if (userId != onesignal_user_id) {$.post(api['users/notifications'], { handle: 'update', id: onesignal_push_id });}});OneSignal.on('subscriptionChange', function(isSubscribed) {if (isSubscribed == false) {$.post(api['users/notifications'], { handle: 'delete' });} else {$.post(api['users/notifications'], { handle: 'update', id: onesignal_push_id });}});});<?php echo '</script'; ?>
><?php }?><!-- OneSignal Notifications --><?php }
}
