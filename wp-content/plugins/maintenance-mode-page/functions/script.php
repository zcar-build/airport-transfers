<?php 
function wpsm_maintenance_mode_responsive_plugin_js_css()
{

    //enequeue scripts page for coming soon plugin admin panel
   
    wp_enqueue_script('theme-preview');
	wp_enqueue_media();
    wp_enqueue_style('wp-color-picker');
	wp_enqueue_style('thickbox');
	wp_enqueue_style('wpsm_mmr-bootstrap_css', wpsm_mmr_PLUGIN_URL.'css/bootstrap.css');
	wp_enqueue_style('wpsm_mmr-smartech_css', wpsm_mmr_PLUGIN_URL.'css/smartech.css');

	wp_enqueue_style('wpsm_mmr-font-awesome_min', wpsm_mmr_PLUGIN_URL.'css/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('wpsm_mmr-font-awesome-picker', wpsm_mmr_PLUGIN_URL.'css/fontawesome-iconpicker.css');
	
	//dailog pop css
	wp_enqueue_style('wpsm_mmr-dialog', wpsm_mmr_PLUGIN_URL.'css/dialog/dialog.css');
	wp_enqueue_style('wpsm_mmr-dialog-box-style', wpsm_mmr_PLUGIN_URL.'css/dialog/dialog-box-style.css');
	wp_enqueue_style('wpsm_mmr-dialog-wilma', wpsm_mmr_PLUGIN_URL.'css/dialog/dialog-jamie.css');
	
	wp_enqueue_style('wpsm_mmr-fv', wpsm_mmr_PLUGIN_URL.'css/fv.css');
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-ui-sortable' );
	
	// Media Upload Js
	wp_enqueue_script('wpsm_mmr-media-uploads',wpsm_mmr_PLUGIN_URL.'js/media-upload-script.js',array('media-upload','thickbox','jquery'));
    // Date Picker Js
	wp_enqueue_script('wpsm_mmr-time-picker', wpsm_mmr_PLUGIN_URL.'js/jquery-ui-timepicker.js',array('jquery','jquery-ui-datepicker'));
	// Colour Picker Js
	wp_enqueue_script('wpsm_mmr-my-color-picker-script', wpsm_mmr_PLUGIN_URL.'js/my-color-picker-script.js', array( 'wp-color-picker' ), false, true );
	// Bootstrap Js
	wp_enqueue_script('wpsm_mmr-bootstrap_min_js',wpsm_mmr_PLUGIN_URL.'js/bootstrap.min.js');
	// Admin Settings Dashboard Js
	wp_enqueue_script('wpsm_mmr-metisMenu',wpsm_mmr_PLUGIN_URL.'js/plugins/metisMenu/metisMenu.min.js');
	wp_enqueue_script('wpsm_mmr-smartech',wpsm_mmr_PLUGIN_URL.'js/smartech.js',array('jquery'));
	wp_enqueue_script('wpsm_mmr-sidebar_nav',wpsm_mmr_PLUGIN_URL.'js/rcsp_sidebar_nav.js');
	// Font Awesome Icon Picker Js
	wp_enqueue_script('wpsm_mmr-font-icon-picker-js',wpsm_mmr_PLUGIN_URL.'js/fontawesome-iconpicker.js',array('jquery'));
	wp_enqueue_script('wpsm_mmr-call-icon-picker-js',wpsm_mmr_PLUGIN_URL.'js/call-icon-picker.js',array('jquery'), false, true);
	
	// Multi select Dropdown Js
	wp_enqueue_script('wpsm_mmr-bootstrap-multiselect-js',wpsm_mmr_PLUGIN_URL.'js/chosen.jquery.js');
	// Data Save Js
	wp_enqueue_script('wpsm_mmr-rcsp-option-data-save-js',wpsm_mmr_PLUGIN_URL.'js/rcsp-option-data-save.js');
	// Data Field Validator Js
	wp_enqueue_script('wpsm_mmr-rcsp-validator-js',wpsm_mmr_PLUGIN_URL.'js/validator.js');
	
	wp_enqueue_style('wpsm_mmr-jquery-ui-css', wpsm_mmr_PLUGIN_URL.'css/rcsp_jquery-ui.css');
	
	//dailog pop js
	wp_enqueue_script('wpsm_mmr-snap-svg-min',wpsm_mmr_PLUGIN_URL.'js/dialog/snap.svg-min.js');
	wp_enqueue_script('wpsm_mmr-modernizr-custom',wpsm_mmr_PLUGIN_URL.'js/dialog/modernizr.custom.js');
	wp_enqueue_script('wpsm_mmr-classie',wpsm_mmr_PLUGIN_URL.'js/dialog/classie.js');
	wp_enqueue_script('wpsm_mmr-dialogFx',wpsm_mmr_PLUGIN_URL.'js/dialog/dialogFx.js'); 
	
		
	
}

add_action( 'admin_notices', 'wpsm_wpsm_mmcs_review' );
function wpsm_wpsm_mmcs_review() {

	// Verify that we can do a check for reviews.
	$review = get_option( 'wpsm_wpsm_mmcs_review' );
	$time	= time();
	$load	= false;
	if ( ! $review ) {
		$review = array(
			'time' 		=> $time,
			'dismissed' => false
		);
		add_option('wpsm_wpsm_mmcs_review', $review);
		//$load = true;
	} else {
		// Check if it has been dismissed or not.
		if ( (isset( $review['dismissed'] ) && ! $review['dismissed']) && (isset( $review['time'] ) && (($review['time'] + (DAY_IN_SECONDS * 2)) <= $time)) ) {
			$load = true;
		}
	}
	// If we cannot load, return early.
	if ( ! $load ) {
		return;
	}

	// We have a candidate! Output a review message.
	?>
	<div class="notice notice-info is-dismissible wpsm-wpsm-mmcs-review-notice">
		<div style="float:left;margin-right:10px;margin-bottom:5px;">
			<img style="width:100%;height: auto;" src="<?php echo wpsm_mmr_PLUGIN_URL.'images/icon-show.png'; ?>" />
		</div>
		
		
		<p style="font-size:18px;">'A big sale Get  <strong>40% off </strong> on our every Wordpress Plugins (including <strong>Maintenance Mode Pro Plugin</strong>) hurry up offer expire date is <strong>31st December </strong> USE THIS COUPON CODE  -  <strong style="color:#ef4238">OFF40</strong></p>
		<p style="font-size:18px;"><strong><?php _e( '~ wpshopmart', '' ); ?></strong></p>
		<p style="font-size:19px;"> 
			<a style="color: #fff;background: #ed1c94;padding: 4px 10px 8px 10px;border-radius: 4px;text-decoration: none;" href="https://wpshopmart.com/plugins/" class="wpsm-wpsm-mmcs-dismiss-review-notice wpsm-wpsm-mmcs-review-out" target="_blank" rel="noopener">Grab This Offer Now </a>&nbsp; &nbsp;
			<a style="color: #fff;background: #27d63c;padding: 4px 10px 8px 10px;border-radius: 4px;text-decoration: none;" href="#"  class="wpsm-wpsm-mmcs-dismiss-review-notice wpsm-rate-later" target="_self" rel="noopener"><?php _e( 'No, I am not interested', '' ); ?></a>&nbsp; &nbsp;
			<a style="color: #fff;background: #31a3dd;padding: 4px 10px 8px 10px;border-radius: 4px;text-decoration: none;" href="#" class="wpsm-wpsm-mmcs-dismiss-review-notice wpsm-rated" target="_self" rel="noopener"><?php _e( 'I already Purchased', '' ); ?></a>
		</p>
		
	</div>
	<script type="text/javascript">
		jQuery(document).ready( function($) {
			$(document).on('click', '.wpsm-wpsm-mmcs-dismiss-review-notice, .wpsm-wpsm-mmcs-dismiss-notice .notice-dismiss', function( event ) {
				if ( $(this).hasClass('wpsm-wpsm-mmcs-review-out') ) {
					var wpsm_rate_data_val = "1";
				}
				if ( $(this).hasClass('wpsm-rate-later') ) {
					var wpsm_rate_data_val =  "2";
					event.preventDefault();
				}
				if ( $(this).hasClass('wpsm-rated') ) {
					var wpsm_rate_data_val =  "3";
					event.preventDefault();
				}

				$.post( ajaxurl, {
					action: 'wpsm_wpsm_mmcs_dismiss_review',
					wpsm_rate_data_wpsm_mmcs : wpsm_rate_data_val
				});
				
				$('.wpsm-wpsm-mmcs-review-notice').hide();
				//location.reload();
			});
		});
	</script>
	<?php
}

add_action( 'wp_ajax_wpsm_wpsm_mmcs_dismiss_review', 'wpsm_wpsm_mmcs_dismiss_review' );
function wpsm_wpsm_mmcs_dismiss_review() {
	if ( ! $review ) {
		$review = array();
	}
	
	if($_POST['wpsm_rate_data_wpsm_mmcs']=="1"){
		
	}
	if($_POST['wpsm_rate_data_wpsm_mmcs']=="2"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		update_option( 'wpsm_wpsm_mmcs_review', $review );
		
		
	}
	if($_POST['wpsm_rate_data_wpsm_mmcs']=="3"){
		$review['time'] 	 = time();
		$review['dismissed'] = true;
		update_option( 'wpsm_wpsm_mmcs_review', $review );
	}
	die;
}
?>