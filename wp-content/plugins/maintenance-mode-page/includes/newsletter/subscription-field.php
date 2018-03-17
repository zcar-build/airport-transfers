<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 
	<?php $wpsm_mmr_plugin_options_subscription_field = unserialize(get_option('wpsm_mmr_plugin_options_subscription_field'));	
	?>	
	<div class="row">
		<div class="post-social-wrapper clearfix">
			<div class="col-md-12 post-social-item heading-item">
				<div class="panel panel-default heading-item-default">
					<div class="panel-heading padding-none">
						<div class="post-social post-social-xs" id="post-social-5">
							<div class="text-center padding-all text-center">
								<div class="textbox text-white   margin-bottom settings-title">
									<?php _e('Subscription Field Settings','WPSM_MMR_TEXT_DOMAIN'); ?>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	<form method="post" id="wpsm_mmr_plugin_options_subscription_field" >
		
		
		
		
		
		
		
		
	    <div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Update Email Field Place holder text ','WPSM_MMR_TEXT_DOMAIN'); ?></th>
						
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="email_field_pl_hold_text" name="email_field_pl_hold_text"  size="56" value="<?php echo $wpsm_mmr_plugin_options_subscription_field['email_field_pl_hold_text'];  ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Subscribe Me Button Icon','')?></th>
						<td></td>
					</tr>
					<tr class="" style="border-bottom:none;">
						<td>
							<div class="form-group input-group">
                                <input data-placement="bottomRight" class="form-control icp icp-auto" name="subs_me_button_icon" id="subs_me_button_icon" value="<?php echo $wpsm_mmr_plugin_options_subscription_field['subs_me_button_icon'];  ?>" type="text" readonly="readonly" />
                                <span class="input-group-addon "></span>
                            </div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
	
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('After Success Subscription Notification Text','WPSM_MMR_TEXT_DOMAIN'); ?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="success_subs_notification_text" name="success_subs_notification_text"  size="56" value="<?php echo $wpsm_mmr_plugin_options_subscription_field['success_subs_notification_text'];  ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Invalid Email Notification Text','WPSM_MMR_TEXT_DOMAIN'); ?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="invalid_email_notification_text" name="invalid_email_notification_text"  size="56" value="<?php echo $wpsm_mmr_plugin_options_subscription_field['invalid_email_notification_text'];  ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
	</form>		
		
		<div class="panel panel-primary save-button-block">
			<div class="panel-body">
				<div class="pull-left">
					<button type="button" class="btn btn-info btn-lg" onclick="wpsm_mmr_option_data_save('subscription_field')"><?php _e('Save Changes','WPSM_MMR_TEXT_DOMAIN'); ?></button>
				</div>
				<div class="pull-right">
					<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_mmr_option_data_reset('subscription_field')"><?php _e('Reset Default','WPSM_MMR_TEXT_DOMAIN'); ?></button>
				</div>
			</div>
		</div>
								
							

	</div>
	<!-- /row -->