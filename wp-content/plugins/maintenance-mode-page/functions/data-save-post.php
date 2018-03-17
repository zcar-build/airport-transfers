<?php 
if(isset($_POST['action_mmr']) == "action_mmr_page_setting_save_post")
	{

	$hook = $_POST['hook'];
	$hook = 'wpsm_mmr_plugin_options_'.$hook;
	
	update_option($hook, serialize($_POST));
}
?>