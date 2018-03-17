/*Admin options panel data value*/
function wpsm_mmr_option_data_save(name) { 	

	
	

	var wpsm_mmr_plugin_options = "#wpsm_mmr_plugin_options_"+name;
	jQuery("#wpsm_loding_general_image").show();
	jQuery.ajax({
		type: "POST",
		url: location.href,
		data : 'action_mmr=action_mmr_page_setting_save_post' + '&hook=' + name +'&' + jQuery(wpsm_mmr_plugin_options).serialize(),
		success : function(data){
			jQuery("#wpsm_loding_general_image").fadeOut();
		   jQuery(".dialog-button").click();
		   
		   if(name=="dashboard"){
				 location.href='?page=wpsm_maintenance_mode';
				
			}
	   }			
	});
}
/*Admin options panel data value*/
function wpsm_mmr_option_data_reset(name) 
{ 	
	if (confirm('Are you sure you want to reste this setting?')) {
    
	} else {
	   return;
	}
		
	jQuery("#wpsm_loding_general_image").show();
	jQuery.ajax({
		type: "POST",
		url: location.href,
		data : 'action_mmr_reset=action_mmr_page_setting_reset_post' + '&hook=' + name ,
		success : function(data){
			jQuery("#wpsm_loding_general_image").fadeOut();
		   jQuery(".dialog-button").click();
		location.href='?page=wpsm_maintenance_mode';
		 
		
	
	   }			
	});
	

}

	
	
	