<script>
  "use strict";
  var $ = jQuery;
 



function loadScript(){
  var script      = document.createElement('script');
		script.type = 'text/javascript';
		//script.src  = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
	
  document.body.appendChild(script);
}


/*social*/
var toggleFlag = false;
var toggle;

function toggleInterval(){
	toggleFlag = false;
	clearTimeout(toggle);
}

/*social*/
function social() {
	$('.social-links').hide();
	if ( $('body').width() > 1080 ) {
	  $('.social-links').removeClass('fadeOutLeftBig').addClass('fadeOutRightBig');
	}
	else {
		$('.social-links').removeClass('fadeOutRightBig').addClass('fadeOutLeftBig');
	}
  $('.soc-link').on('click', function(event){
    var target = $(event.target);
    $('.social-links').show();
 		if ( $('body').width()> 1080 ) {
  	 	if (target.hasClass('soc-link-img') && !toggleFlag) {
      	$('.social-links').toggleClass('fadeOutRightBig fadeInRightBig');
      	toggleFlag =true;
      	toggle = setTimeout(toggleInterval,100);
        return false;
      } 
 		}
		else {
	    if (target.hasClass('soc-link-img')  && !toggleFlag) {
	    	$('.social-links').toggleClass('fadeOutLeftBig fadeInRightBig');
	    	toggleFlag =true;
		    toggle = setTimeout(toggleInterval,100);
	      return false;
	    } 
		}
  });
}

 /*layout()*/
function layout() {  
	var heightcontent=$('body').height()-350-$('.wpsm_csp').height();
	if ( heightcontent < 0 ) {
		$('.copyright-block').css('position','static');
		$('.wpsm_csp-home').css({'height':'auto'});
		$('.wpsm_csp').css({'display':'block', 'padding-bottom': '60px'});
	 		if ( $('body').width() > 768 && $('body').width() < 1080 ) {
	 			$('.social-block, .copyright-block ').css('position','static');
	 		}
		else {
			$('.social-block ').css('position','absolute');
		}
	}
	else {
		$('.copyright-block').css('position','absolute');
		$('.wpsm_csp-home').css({'height':'100%'});
	 	$('.wpsm_csp').css({'display':'table-cell', 'padding-bottom': '175px'});
 		if ( $('body').width() > 768 && $('body').width() < 1080 ) {
 			$('.social-block, .copyright-block ').css('position','absolute');
 		}
	}
}

  /*.svg to svg */
function imgtosvg() {     
  $('img.svg').each(function(){
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
      var $svg = $(data).find('svg');
      if(typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      if(typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass+' replaced-svg');
      }
      $svg = $svg.removeAttr('xmlns:a');
      $img.replaceWith($svg);

    }, 'xml');
  });
}  

/*navigationcontent*/
function navigationcontent(){
	$('.btn-nav').on( "click", function(e) {
		var wpsm_csppage = $('.wpsm_csp-page'),
		nextPanelName = $(this).attr('href'),
		nextPanel = $(nextPanelName),
		currentPanel= $('.page-current');
		e.preventDefault();
		currentPanel.scrollTop(0);	
		if($(this).hasClass("btn-prev")){
	    currentPanel.addClass('slideOutRight');
	    nextPanel.addClass('slideInLeft');
	    wpsm_csppage.removeClass('page-current');
			nextPanel.addClass('page-current');
			setTimeout(function() {
	      wpsm_csppage.removeClass('slideInLeft');
			}, 600);
		}
		if($(this).hasClass( "btn-next" )){
	      currentPanel.addClass('slideOutLeft');
	      nextPanel.addClass('slideInRight');
				wpsm_csppage.removeClass('page-current');
				nextPanel.addClass('page-current');
				setTimeout(function() {
		      wpsm_csppage.removeClass('slideInRight');
				}, 600);
		}
		if(currentPanel.hasClass("wpsm_csp-prev")){
			wpsm_csppage.removeClass('slideOutRight');
		    currentPanel.addClass('slideOutLeft');
		    nextPanel.addClass('slideInRight');
				setTimeout(function() {
					wpsm_csppage.removeClass('page-current');
					nextPanel.addClass('page-current');
		      wpsm_csppage.removeClass('slideOutLeft');
		      wpsm_csppage.removeClass('slideInRight');
				}, 600);
		}
		if(currentPanel.hasClass("wpsm_csp-next")){
			wpsm_csppage.removeClass('slideOutLeft');
		    currentPanel.addClass('slideOutRight');
		    nextPanel.addClass('slideInLeft');
				setTimeout(function() {
      		wpsm_csppage.removeClass('page-current');
			    nextPanel.addClass('page-current');
		      wpsm_csppage.removeClass('slideOutRight');
		      wpsm_csppage.removeClass('slideInLeft');
				}, 600);
		}
	});
}

/*=================================================
email validation
=================================================*/
  function fn_formValidation(email_address) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(email_address);
  }

 /* php */
  function fn_subscribeForm() {

  /*=================================================
subscribe
=================================================*/

var __subscribeSuccess = '<i class="icons fa fa-check valid"></i> <?php echo $wpsm_mmr_plugin_options_subscription_field['success_subs_notification_text'];  ?>'; // subscribe success message
var __subscribeError = '<i class="icons fa fa-close error"></i> <?php echo $wpsm_mmr_plugin_options_subscription_field['invalid_email_notification_text'];  ?>'; // subscribe error message
  
  
    var $form = $('#subscribe-form');
    var $subscribeEmail = $('#subscribe-email');

    $subscribeEmail.prop('type', 'text');

    $form.on('submit', function(e) {

      var subscribeEmailVal = $subscribeEmail.val();
	 
      var $subscribeNotice = $('.subscribe-notice');
      var $submitButton = $form.find('button[type="submit"]');
		$(".load_msg").fadeIn();
      e.preventDefault();
		
      $submitButton.prop('disabled', true);

      if (!fn_formValidation(subscribeEmailVal)) {
		  $(".load_msg").fadeOut();
        $subscribeNotice.stop(true).hide().addClass('visible').html(__subscribeError).fadeIn();
			
        $submitButton.prop('disabled', false);
        $('#subscribe-email').focus();
      }
      else {
        $.ajax({
          type: 'POST',
          url: location.href,
          data: {
			action:"wp_mail",  
            email: subscribeEmailVal,
           
          },
          success: function() {
			  $(".load_msg").fadeOut();
            $subscribeNotice.stop(true).hide().addClass('visible').html(__subscribeSuccess).fadeIn();

            $submitButton.prop('disabled', false);
            $form[0].reset();
            $subscribeEmail.blur();

          }
        });
      }
      return false;

    });

  }


var isTouchDevice = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone)/);
$(document).ready(function(){
	navigationcontent();
	fn_subscribeForm();
	imgtosvg();
	social();
	
	/* ------------------------------------------------------------------------ */
	/*	COUNTDOWN
	/* ------------------------------------------------------------------------ */
	
	<?php if($wpsm_mmr_plugin_options_countdown['countdown_enable']=="on") {?>
	
		if($.find('#countdown')[0]) {
			$('#countdown').countdown('<?php echo $wpsm_mmr_plugin_options_countdown['countdown_date']; ?> <?php echo $wpsm_mmr_plugin_options_countdown['countdown_time']; ?>').on('update.countdown', function(event) {
				var $this = $(this).html(event.strftime(''
					+ ''
					+ '<li class="time-wrap col-xs-6 col-sm-3"><span class="time">%-D</span><p class="unit"><?php echo $wpsm_mmr_plugin_options_countdown['days']; ?></p></li>'
					+ '<li class="time-wrap col-xs-6 col-sm-3"><span class="time">%H</span><p class="unit"><?php echo $wpsm_mmr_plugin_options_countdown['hours']; ?></p></li>'
					+ '<li class="time-wrap col-xs-6 col-sm-3"><span class="time">%M</span><p class="unit"><?php echo $wpsm_mmr_plugin_options_countdown['minutes']; ?></p></li>'
					+ '<li class="time-wrap col-xs-6 col-sm-3"><span class="time">%S</span><p class="unit"><?php echo $wpsm_mmr_plugin_options_countdown['seconds']; ?></p></li>'
					+''
				));
			});
		};
		
	<?php } ?>
	
	
  if($('.wpsm_csp').length) {
    layout();
  }
  if($('.image-link').length) {
   	$('.image-link').magnificPopup({type:'image'});
  }


/*IE*/
  var ua = navigator.userAgent;
	  if ((ua.match(/MSIE 10.0/i))) {
	    $('.block-nav').addClass('ie');
	  } 
	  else if((ua.match(/rv:11.0/i))){
	     $('.block-nav').addClass('ie');
	  }

	/*Scroll*/
	if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone)/)){
		$('.wpsm_csp-scroll-overlay').perfectScrollbar("destroy");
	  $('.wpsm_csp-scroll-overlay').addClass('scroll-block');
	  $('.bg-video').find('video').remove();
	} 
	else {
		$('.wpsm_csp-scroll-overlay').perfectScrollbar();
		$('.wpsm_csp-scroll-overlay').removeClass('scroll-block');
	}

  //Retina
  if('devicePixelRatio' in window && window.devicePixelRatio >= 2){
    var imgToReplace = $('img.replace-2x').get(); 
    for (var i=0,l=imgToReplace.length; i<l; i++){
      var src = imgToReplace[i].src;
      src = src.replace(/\.(png|jpg|gif)+$/i, '@2x.$1');
      imgToReplace[i].src = src;
      $(imgToReplace[i]).load(function(){
      $(this).addClass('loaded');
      });
    }
  }

	/*Background*/
	/*Slider*/
	if($('.rslides').length){
	  $(function() {
	    $('.rslides').responsiveSlides({
	      timeout: 5000,
	      speed: 200,
	    });
	  });
	}

	/*Parallax*/
	if($('body').hasClass('parallax-theme')){ 
		$.parallaxify({
			positionProperty: 'transform',
			responsive: true,
			motionType: 'natural',
			mouseMotionType: 'gaussian',
			motionAngleX: 70,
			motionAngleY: 70,
			alphaFilter: 0.9,
			adjustBasePosition: true,
			alphaPosition: 0.025,
		});
	}	

	$(window).load(function(){
		loadScript();
    if($('.timer').length) {
			var elem = document.getElementsByClassName("timer")[0];
			var timer = new Timer(elem);
		}

	  /*preloader*/
	  $('.loader').delay(1500).fadeOut();
  });
});

	//Window Resize
	(function(){
	  var delay = (function(){
			var timer = 0;
			return function(callback, ms){
				clearTimeout (timer);
				timer = setTimeout(callback, ms);
			};
	  })();
	  
	  function resizeFunctions() {
			
			if($('.wpsm_csp').length) {
				layout();
			}
	  }

		if(isTouchDevice) {
			 $(window).bind('orientationchange', function(){
				 delay(function(){
				 resizeFunctions();
			 }, 300);
				 });
		} else {
			 $(window).on('resize', function(){
				 delay(function(){
				 resizeFunctions();
				if(!$('.social-links').hasClass('fadeInRightBig')){
					social();
				}
			}, 500);
		 });
		}
	}());
	</script>
<?php
if(isset($_POST['action'])=="wp_mail") {
	
		 $email = $_POST['email'];
		$email = strtolower($email);
		
		 $to_admin = $wpsm_mmr_plugin_options_newsletter['email_add_of_admin'];
         $subject  = $wpsm_mmr_plugin_options_newsletter['to_admin_mail_sub'];
         $message  = $wpsm_mmr_plugin_options_newsletter['to_admin_mail_msg'] . "<br>Subscriber Email - " . $email ;
        $from     = $wpsm_mmr_plugin_options_newsletter['email_add_of_admin'];
        $headers  = "From:" . $from;
		
		$to_user  = $email;
        $subject1 = $wpsm_mmr_plugin_options_newsletter['to_subs_mail_sub'];
        $message1 = $wpsm_mmr_plugin_options_newsletter['to_subs_mail_msg'];
        $from1    = $wpsm_mmr_plugin_options_newsletter['email_add_of_admin'];
        $headers1 = "From:" . $from1;
	
		wp_mail($to_admin,$subject,$message,$headers);
		wp_mail($to_user,$subject1,$message1,$headers1);
	
}
?>