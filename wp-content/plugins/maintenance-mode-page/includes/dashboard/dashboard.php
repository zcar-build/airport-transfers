<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 	
<?php $wpsm_mmr_plugin_options_dashboard = unserialize(get_option('wpsm_mmr_plugin_options_dashboard'));	
?>
<script>
	function rcsp_mode(status){

		if(status.value=="3"){
			jQuery(".redirect_url_form").show(500);
		}
		else{
			jQuery(".redirect_url_form").hide(500);
		}
	}
</script>
<div class="row">
	
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								<?php _e('Maintenance mode Dashboard ','WPSM_MMR_TEXT_DOMAIN'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<form method="post" id="wpsm_mmr_plugin_options_dashboard" novalidate>
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Maintenance Mode Status','WPSM_MMR_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Enable Your Maintenance Mode here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<?php $wpsm_csp_status = $wpsm_mmr_plugin_options_dashboard['wpsm_csp_status']; ?>
						<td>
							<span>
								<input type="radio" name="wpsm_csp_status" value="0" id="wpsm_csp_status" onclick="rcsp_mode(this);" <?php if($wpsm_csp_status == "0") { echo "checked"; } ?> />&nbsp;<?php _e('Disabled','WPSM_MMR_TEXT_DOMAIN'); ?><br>
							</span>
							<span>	
								<input type="radio" name="wpsm_csp_status" value="1" id="wpsm_csp_status" onclick="rcsp_mode(this);" <?php if($wpsm_csp_status == "1") { echo "checked"; } ?>  />&nbsp;<?php _e('Enable Maintenance Mode','WPSM_MMR_TEXT_DOMAIN'); ?><br>
							</span>
						
						</td>
					</tr>					
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Maintenance Mode Live Demo For Help','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<a style="color:#fff" href="http://demo.wpshopmart.com/maintenance-mode-page/" class="portfolio_demo_btn" target="_blank">Check Live Demo</a>
						</td>
					</tr>					
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Need Support','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						
					</tr>
					
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<a type="button" target="_new" href="https://wordpress.org/support/plugin/maintenance-mode-page/" class="btn btn-primary btn-lg" style="color:#fff">Get Support Here</a>
						</td>
					</tr>				
				</table>
			</div>
		</div>
		
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Video Help','WPSM_RCS_TEXT_DOMAIN'); ?></th>
						
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<iframe width="853" height="480" src="https://www.youtube.com/embed/iIt6Aakcwjc" frameborder="0" allowfullscreen></iframe>
						
						</td>
					</tr>					
				</table>
			</div>
		</div>
	</form>

	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_mmr_option_data_save('dashboard')"><?php _e('Save Changes','WPSM_MMR_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_mmr_option_data_reset('dashboard')"><?php _e('Reset Default','WPSM_MMR_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>
	
</div>