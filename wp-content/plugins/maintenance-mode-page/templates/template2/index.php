<!DOCTYPE html>
<html lang="en">
<?php
require_once('php/data-var.php');	
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $wpsm_mmr_plugin_options_header['meta_title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php echo $wpsm_mmr_plugin_options_header['meta_desc']; ?>">
	<!-- Favicon -->
	<link rel="icon" href="<?php echo $wpsm_mmr_plugin_options_header['favicon']; ?>">
	<!-- Fonts -->
	
	<link rel="stylesheet" href="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/css/bootstrap.css'; ?>" >
	<link rel="stylesheet" href="<?php echo wpsm_mmr_PLUGIN_URL.'css/font-awesome/css/font-awesome.min.css'; ?>" >
	<link rel="stylesheet" href="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/css/bootstrap-select.min.css'; ?>" >
	<link rel="stylesheet" href="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/css/animate.css'; ?>" >
	<link rel="stylesheet" href="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/css/perfect-scrollbar.min.css'; ?>" >
	<link rel="stylesheet" href="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/css/style.css'; ?>" >
	<?php echo $wpsm_mmr_plugin_options_header['google_al']; ?>
	
	<style>
		<?php if($wpsm_mmr_plugin_options_background['select_background']=="bg_image"){ ?>
			.parallax-theme .parallax-wallpaper {
				background: url(<?php echo $wpsm_mmr_plugin_options_background['background_image']; ?>) 50% 50%;
				
			}
		<?php } ?>
		<?php $background_color_overlay = $wpsm_mmr_plugin_options_background['background_color_overlay']; ?>
		<?php if($wpsm_mmr_plugin_options_background['select_background']=="bg_color"){ ?>
			.color-theme {
				background: <?php echo $wpsm_mmr_plugin_options_background['background_color']; ?> <?php if($wpsm_mmr_plugin_options_background['bg_effect']=="on") { ?> url('<?php echo wpsm_mmr_PLUGIN_URL."img/overlay/overlay-$background_color_overlay.png"; ?>') repeat <?php } ?>;
			}
		<?php } ?>
		.wpsm_csp h1, .block-contant h2, .block-about h2{
			color:<?php echo $wpsm_mmr_plugin_options_text_and_color['headeline_ft_clr']; ?>;
			font-family:"<?php echo $wpsm_mmr_plugin_options_text_and_color['headlines_ft_stl']; ?>";
		}
		@media only all and (min-width: 992px){
			.wpsm_csp h1, .block-contant h2, .block-about h2{
				font-size: <?php echo $wpsm_mmr_plugin_options_text_and_color['headline_ft_size']; ?>px;
			}
			.wpsm_csp p, #contact p, .block-about p{
				font-size:<?php echo $wpsm_mmr_plugin_options_text_and_color['desc_ft_size']; ?>px;
			}
		}
		.wpsm_csp p, #contact p, .block-about p{
			color:<?php echo $wpsm_mmr_plugin_options_text_and_color['desc_ft_clr']; ?>;
			font-family:"<?php echo $wpsm_mmr_plugin_options_text_and_color['desc_ft_stl']; ?>";
		}
		.text-contact{
			 color:<?php echo $wpsm_mmr_plugin_options_text_and_color['desc_ft_clr']; ?>;
			 font-family:"<?php echo $wpsm_mmr_plugin_options_text_and_color['desc_ft_stl']; ?>";
			 font-size:<?php echo $wpsm_mmr_plugin_options_text_and_color['desc_ft_size']; ?>px;
			
		}
		.notify-me .form-group .btn, .form-control, .subscribe-notice{
			color:<?php echo $wpsm_mmr_plugin_options_text_and_color['sb_btn_ft_clr']; ?>;
		}
		
		.form-control{
			border-bottom: 1px solid <?php echo $wpsm_mmr_plugin_options_text_and_color['sb_btn_ft_clr']; ?>;
			font-family:"<?php echo $wpsm_mmr_plugin_options_text_and_color['other_ft_stl']; ?>";
		}
		.form-control::-webkit-input-placeholder {
		  color: <?php echo $wpsm_mmr_plugin_options_text_and_color['sb_btn_ft_clr']; ?>;
		  font-style: italic;
		  font-family:"<?php echo $wpsm_mmr_plugin_options_text_and_color['other_ft_stl']; ?>";
		}
		.form-control:-moz-placeholder {
		  color:<?php echo $wpsm_mmr_plugin_options_text_and_color['sb_btn_ft_clr']; ?>;
		  font-style: italic;
		  font-family:"<?php echo $wpsm_mmr_plugin_options_text_and_color['other_ft_stl']; ?>";
		}
		.form-control::-moz-placeholder {
		  color: <?php echo $wpsm_mmr_plugin_options_text_and_color['sb_btn_ft_clr']; ?>;
		  font-style: italic;
		  font-family:"<?php echo $wpsm_mmr_plugin_options_text_and_color['other_ft_stl']; ?>";
		}
		#countdown, #countdown p {
			color:<?php echo $wpsm_mmr_plugin_options_text_and_color['cnd_timer_clr']; ?>;
			font-wight:900;
		}
		#countdown p{
			 font-family:"<?php echo $wpsm_mmr_plugin_options_text_and_color['other_ft_stl']; ?>";
			
		}
		.social-links .social-btn, .soc-link span{
			
			 color: <?php echo $wpsm_mmr_plugin_options_text_and_color['social_icon_clr']; ?>;
		}
		.social-links a, .social-links a:hover{
			 background-color: <?php echo $wpsm_mmr_plugin_options_text_and_color['social_icon_bg_clr']; ?>;
		}
		.soc-link {
			background: <?php echo $wpsm_mmr_plugin_options_text_and_color['social_icon_bg_clr']; ?>;
		}
		.soc-link:hover{
			background: <?php echo $wpsm_mmr_plugin_options_text_and_color['social_icon_bg_clr']; ?>;
		}
		.block-nav a,.block-nav a:hover{
			border: 10px solid  <?php echo $wpsm_mmr_plugin_options_text_and_color['ext_ft_clr']; ?>;
			
		}
		.block-nav a i{
			color: <?php echo $wpsm_mmr_plugin_options_text_and_color['ext_ft_clr']; ?>;
			
		}
		
		<?php echo $wpsm_mmr_plugin_options_custom_css['custom_css']; ?>
	</style>
  
</head>
<?php switch($wpsm_mmr_plugin_options_background['select_background']){
	case "bg_color":
		$background_class = "color-theme";
	break;
	case "bg_image":
		$background_class = "parallax-theme";
	break;
	case "bg_slideshow":
		$background_class = "slider-theme";
	break;	
	
} ?>
<body  class="<?php echo $background_class; ?>">
	<?php if($wpsm_mmr_plugin_options_background['select_background']=="bg_image"){ ?>
		<div class="parallax-wallpaper" data-parallaxify-range-x="-20" data-parallaxify-range-y="-20" ></div>
	<?php } ?>
	<?php if($wpsm_mmr_plugin_options_background['select_background']=="bg_slideshow"){ ?>
	<div class="bg-box">
		<ul class="rslides">
			<?php for($i=0; $i<=$wpsm_mmr_plugin_options_background['bg_slideshow_no']-1; $i++) { ?>
				<li style="background:url('<?php echo $wpsm_mmr_plugin_options_background['background_slides_'.$i];  ?>')"></li>
			<?php } ?> 
		</ul> 
	</div>
	<?php } ?>
		<div class="loader">
		<div class="ball-beat">
			<svg width="60" height="20" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="#fff">
			    <circle cx="15" cy="15" r="15">
			        <animate attributeName="r" from="15" to="15"
			                 begin="0s" dur="0.8s"
			                 values="15;9;15" calcMode="linear"
			                 repeatCount="indefinite" />
			        <animate attributeName="fill-opacity" from="1" to="1"
			                 begin="0s" dur="0.8s"
			                 values="1;.5;1" calcMode="linear"
			                 repeatCount="indefinite" />
			    </circle>
			    <circle cx="60" cy="15" r="9" fill-opacity="0.3">
			        <animate attributeName="r" from="9" to="9"
			                 begin="0s" dur="0.8s"
			                 values="9;15;9" calcMode="linear"
			                 repeatCount="indefinite" />
			        <animate attributeName="fill-opacity" from="0.5" to="0.5"
			                 begin="0s" dur="0.8s"
			                 values=".5;1;.5" calcMode="linear"
			                 repeatCount="indefinite" />
			    </circle>
			    <circle cx="105" cy="15" r="15">
			        <animate attributeName="r" from="15" to="15"
			                 begin="0s" dur="0.8s"
			                 values="15;9;15" calcMode="linear"
			                 repeatCount="indefinite" />
			        <animate attributeName="fill-opacity" from="1" to="1"
			                 begin="0s" dur="0.8s"
			                 values="1;.5;1" calcMode="linear"
			                 repeatCount="indefinite" />
			    </circle>
			</svg>
		</div>	
	</div>
	
	<div  id ="home" class="wpsm_csp-wrap-home animated wpsm_csp-page page-current">
		<div class="wpsm_csp-scroll-overlay">
			<div class="container-home">
				<div class="container">
					<div class="block-nav">
						<?php if($wpsm_mmr_plugin_options_about_us['about_us_enable']=="on") { ?>
							<a data-panel="#about" href="#about" title="about" class="btn-nav btn-prev">
								<i class="fa <?php echo $wpsm_mmr_plugin_options_about_us['about_btn_icon']; ?>"></i>
							</a>
						<?php } ?>
						<?php if($wpsm_mmr_plugin_options_contact_us['contact_us_enable']=="on") { ?>
							<a data-panel="#contact" href="#contact" title="contact info" class="btn-nav btn-next">
								<i class="fa <?php echo $wpsm_mmr_plugin_options_contact_us['contact_us_section_btn_icon']; ?>"></i>
							</a>
						<?php } ?>
					</div>
					 <?php if($wpsm_mmr_plugin_options_general['logo_enable']=="on"){ ?>
					<div class="logo-wrap">
						
						<img src="<?php echo $wpsm_mmr_plugin_options_general['rcsp_logo_url']; ?>" class="logo" width="<?php echo $wpsm_mmr_plugin_options_general['logo_width']; ?>" height="<?php echo $wpsm_mmr_plugin_options_general['logo_height']; ?>" alt="logo"> 
						
					</div>
					<?php } ?>

					<div class="wpsm_csp-home">
						<div class="wpsm_csp">
							<div class="row">
								<div class="col-sm-12">
									<?php if($wpsm_mmr_plugin_options_countdown['countdown_enable']=="on") {?>
										<ul id="countdown" ></ul>
									<?php } ?>
									<h1><?php echo $wpsm_mmr_plugin_options_general['rcsp_headline']; ?></h1>
									<p><?php echo $wpsm_mmr_plugin_options_general['rcsp_description']; ?> </p>
									<?php if($wpsm_mmr_plugin_options_newsletter['wpsm_mmr_newsletter_dropdown']=="wpmail"){ ?>	
										<form class="notify-me" id="subscribe-form" name="notify-me" id="" >
											<div class="form-group email">
												<span class="form-message" style="display: none;"></span>
												<input class="form-control email" id="subscribe-email" type="text" name="subscribe" placeholder="<?php echo $wpsm_mmr_plugin_options_subscription_field['email_field_pl_hold_text'];  ?>">
												<button type="submit" class="btn btn-info">
													<i class="fa <?php echo $wpsm_mmr_plugin_options_subscription_field['subs_me_button_icon'];  ?>"></i>
												</button>
												<label class="subscribe-notice" for="subscribe-email" style="display: none;"></label>
												<div class="text-center load_msg" style="display:none" > <img src="<?php echo wpsm_mmr_PLUGIN_URL.'images/loading2.gif'; ?>" /></div>
					
											</div>
										</form>
									<?php } ?>	
								</div>	
							</div>
						</div>
					</div>	
					<?php 
						$Social_Icon = $wpsm_mmr_plugin_options_social['social_icon']; 
						$Social_Name = $wpsm_mmr_plugin_options_social['social_name'];
						$social = $wpsm_mmr_plugin_options_social['social'];
						if($social[0]!="" || $social[1]!="" || $social[2]!="" || $social[3]!="" || $social[4]!="" || $social[5]!=""){
					?>	
					<div class="social-block">
						<div class="soc-link">
							<span class="soc-link-img fa fa-share-alt" title="social link" src="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/img/svg/share.svg'; ?>" alt="share"></span>
						</div>
						<div class="social-links-wrap">
							<div class="social-links animated">
							<?php for($i = 0; $i<=5; $i++) { ?>
									<?php if($social[$i]!="") { ?>
								<a href="<?php echo $social[$i]; ?>" class="social-btn" title="<?php echo $Social_Name[$i]; ?>" target="_blank">
									<i class="fa <?php echo $Social_Icon[$i]; ?>"> </i>
								</a>
								
							<?php } 
							} ?>	
							</div>
						</div>
					</div> 
					<?php } ?>

				
				</div>
			</div> 
		</div>	
	</div>
	
	
	<?php if($wpsm_mmr_plugin_options_about_us['about_us_enable']=="on") { ?>
		
		<!-- About Us Content  -------------------------------------------------------
		--------------------------------------------------------------------------- -->
		<div id ="about" class="wpsm_csp-prev wpsm_csp-wrap-about animated wpsm_csp-page">
			<div class="wpsm_csp-scroll-overlay">
				<div class="container-about">
					<div class="block-nav">
						<a href="#home" class="btn-nav btn-home" data-panel="#home">
							<i class="fa fa-close"></i>						
						</a>
					</div>
					<div class="container">
						<div class="row block-about">
							<div class="col-sm-12">
								<h2><?php echo $wpsm_mmr_plugin_options_about_us['about_section_title']; ?></h2>
								<p><?php echo $wpsm_mmr_plugin_options_about_us['about_section_desc']; ?></p>				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	
	
	
	<?php if($wpsm_mmr_plugin_options_contact_us['contact_us_enable']=="on") { ?>
	
		<!-- Contact Info Content  -------------------------------------------------------
		--------------------------------------------------------------------------- -->
		<div id ="contact" class="wpsm_csp-next wpsm_csp-wrap-contact animated wpsm_csp-page">
			<div class="wpsm_csp-scroll-overlay">
				<div class="container-contact">  
					<div class="block-nav">
						<a href="#home"  class="btn-nav btn-home" data-panel="#home">
							<i class="fa fa-close"></i>	
						</a>
					</div>
					<div class="container">                            
						<div class="row block-contant">
							<div class="col-sm-12">
								<h2><?php echo $wpsm_mmr_plugin_options_contact_us['contact_us_section_title']; ?></h2>	
								<p><?php echo $wpsm_mmr_plugin_options_contact_us['contact_us_section_title_desc']; ?></p>				
														
							</div>

							<?php if($wpsm_mmr_plugin_options_contact_us['contact_info_address']!=""){ ?>
								<div class="col-xs-12 col-sm-4">
									<div class="text-contact">
										<div class="img-block">
											<i class="fa fa-map-marker"></i>
										</div>
											<?php echo $wpsm_mmr_plugin_options_contact_us['contact_info_address']; ?>
									</div>
								</div>
							<?php } ?>

							<?php if($wpsm_mmr_plugin_options_contact_us['contact_info_number']!=""){ ?>
								<div class="col-xs-12 col-sm-4">
									<div class="text-contact">
										<div class="img-block">
											<i class="fa fa-phone"></i>
										</div>	
										<?php echo $wpsm_mmr_plugin_options_contact_us['contact_info_number']; ?>
									</div>
								</div>
							<?php } ?>

							<?php if($wpsm_mmr_plugin_options_contact_us['contact_info_email_address']!=""){ ?>
								<div class="col-xs-12 col-sm-4">
									<div class="text-contact">
										<div class="img-block">
												<i class="fa fa-envelope-o"></i>
										</div>	
										<?php echo $wpsm_mmr_plugin_options_contact_us['contact_info_email_address']; ?>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>

						
				</div>
			</div>
		</div>
	<?php } ?>
	
	<!--[if (!IE)|(gt IE 8)]><!-->
	<script src="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/js/jquery-2.1.3.min.js'; ?>"></script>
	<script src="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/js/bootstrap.min.js'; ?>"></script>
	<script src="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/js/jquery.touchwipe.min.js'; ?>"></script>
	<script src="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/js/responsiveslides.min.js'; ?>"></script>
	<script src="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/js/bootstrap-select.js'; ?>"></script>
	<script src="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/js/perfect-scrollbar.min.js'; ?>"></script>
	<script src="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/js/jquery.parallaxify.min.js'; ?>"></script>
	<script src="<?php echo wpsm_mmr_PLUGIN_URL.'templates/template2/js/jquery.countdown.js'; ?>"></script>
	<?php require_once('js/main.php'); ?>
	
</body>
</html>
