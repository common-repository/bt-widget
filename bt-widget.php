<?php
/*
Plugin Name: BT.com Widget
Plugin URI: http://dansgalaxy.co.uk
Description: BT.com Widget
Author: Dan Rodgers (Dansgalaxy)
Version: 0.1
Author URI: http://dansgalaxy.co.uk

*/


// We're putting the plugin's functions inside the init function to ensure the
// required Sidebar Widget functions are available.
  
  function widget_btad_init() 
	  {
	  /* Your custom code starts here */
	  /* ---------------------------- */
	  
	  /* Your Function */
	  function btad()
	  {
		  
		  /* Your Code ----------------- */ 
		  
		  ?>
<div style="margin-left: 25px">
<!-- WIDGET CODE START-->
<link rel="stylesheet" href="http://uidget.appspot.com/bt/btikhsd8734.css" media="screen" title="no title" charset="utf-8" />
<!--<script src="http://ic-widget.appspot.com/js/jquery-1.3.min.js" type="text/javascript"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.1/swfobject.js" type="text/javascript"></script>


<script>
	function vid_popup_74fd8x7(o){
		if(o.attr("id") == "background_popup_74fd8x7" ||
		   o.attr("id") == "popup_cont_close_74fd8x7"){
			swfobject.removeSWF("popup_flash_74fd8x7");
			jQuery("#background_popup_74fd8x7").hide();
			jQuery("#popup_cont_74fd8x7").hide();
			jQuery("#popup_flash_wrap_74fd8x7").html('<div id="popup_flash_74fd8x7"></div>');
		} else {
			center_popup_74fd8x7();
			jQuery("#background_popup_74fd8x7").css({"opacity": "0.7"});
			jQuery("#background_popup_74fd8x7").fadeIn(300);
			jQuery("#popup_cont_74fd8x7").fadeIn(300, function(){vid_content_load_74fd8x7(o.attr("href"));});
		}
	}

	function center_popup_74fd8x7(){
		if(window.XMLHttpRequest) {
			jQuery("#popup_cont_74fd8x7").css({
				"top": document.documentElement.clientHeight/2 - jQuery("#popup_cont_74fd8x7").height()/2,
				"left": document.documentElement.clientWidth/2 - jQuery("#popup_cont_74fd8x7").width()/2
			});
		} else {
			jQuery("#background_popup_74fd8x7").css({
				"height": document.documentElement.clientHeight*1.5,
				"width": document.documentElement.clientWidth,
				"top": jQuery().scrollTop()
			});
			jQuery("#popup_cont_74fd8x7").css({
				"top": jQuery().scrollTop() + document.documentElement.clientHeight/2 - jQuery("#popup_cont_74fd8x7").height()/2,
				"left": document.documentElement.clientWidth/2 - jQuery("#popup_cont_74fd8x7").width()/2
			});
		}
	}

	jQuery(function(){
		jQuery(".vid_links_74fd8x7 a, .img_vis_1_2_74fd8x7, #popup_cont_close_74fd8x7, #background_popup_74fd8x7").click(function(){
			vid_popup_74fd8x7(jQuery(this));
			return false;
		});
	});

	function vid_content_load_74fd8x7(file_id) {
		var flashvars = {};
		flashvars.videoSource = "http://www.productsandservices.bt.com/consumer/consumerProducts/flash/entertainment/videos/" + file_id.replace('#','') + ".flv";
		var params = {allowScriptAccess:"sameDomain"};
		swfobject.embedSWF(
			"http://www.productsandservices.bt.com/consumer/consumerProducts/flash/entertainment/BTVideoPlayer.swf",
			"popup_flash_74fd8x7",
			"640", "360", "9.0.0","",
			flashvars, params);
	}
</script>

<script>
    jQuery(function() {

		jQuery('.pnl_search_74fd8x7 form a').click(function(){
			jQuery(this).parent().submit();
		});

		jQuery('.cntnt_swch_74fd8x7').click(function() {
			cntnt_swtchr_74fd8x7( jQuery(this).attr('href') );
			jQuery('.cntnt_swch_74fd8x7').removeClass('active_74fd8x7');
			jQuery(this).addClass('active_74fd8x7');
			return false;
	    });

        jQuery('.head_m_link_74fd8x7').click(function() {
			if (jQuery(this).hasClass('bt_vision_m_link_74fd8x7_u')) {
				jQuery('#tab_slider_74fd8x7').animate({left:'+=208'},500);
				jQuery('.bt_vision_m_link_74fd8x7_u').removeClass("bt_vision_m_link_74fd8x7_u").addClass("bt_vision_m_link_74fd8x7_a");
				jQuery('.bt_broadband_m_link_74fd8x7_a').removeClass("bt_broadband_m_link_74fd8x7_a").addClass("bt_broadband_m_link_74fd8x7_u");
			} else
			if (jQuery(this).hasClass('bt_broadband_m_link_74fd8x7_u')){
				jQuery('#tab_slider_74fd8x7').animate({left:'-=208'},500);
				jQuery('.bt_vision_m_link_74fd8x7_a').removeClass("bt_vision_m_link_74fd8x7_a").addClass("bt_vision_m_link_74fd8x7_u");
				jQuery('.bt_broadband_m_link_74fd8x7_u').removeClass("bt_broadband_m_link_74fd8x7_u").addClass("bt_broadband_m_link_74fd8x7_a");
			}

			if (jQuery(this).hasClass('bt_vision_m_link_74fd8x7_a')) {
				cntnt_swtchr_74fd8x7("#vision_74fd8x7_2");
			} else
			if (jQuery(this).hasClass('bt_broadband_m_link_74fd8x7_a')) {
				cntnt_swtchr_74fd8x7("#broadband_74fd8x7_0");
			}
			jQuery('.cntnt_swch_74fd8x7').removeClass('active_74fd8x7');
			return false;
	    });
		jQuery('.cntnt_pnl_74fd8x7').filter(':not(:first)').hide();
		jQuery('#rss_cntnr_74fd8x7').html(generate_rss_74fd8x7());
    });

	String.prototype.trim = function() {
		return this.replace(/^\s+|\s+$/g,"");
	}

	function cntnt_swtchr_74fd8x7(the_element){
		if (jQuery(the_element).is(':not(:visible)')) {
			jQuery('.cntnt_pnl_74fd8x7:visible').fadeOut(200, function(){
				jQuery(the_element).fadeIn(350);
			});
		}
		return false;
	}

	function generate_rss_74fd8x7() {
		var output = '';
		for(i in feed1){
			if (i < 4) {
				if (i != 0) output+='<div class="rss_spcr_74fd8x7"></div>';
				output+='<a class="rssitem_74fd8x7" href="'+feed1[i].url+'">'+feed1[i].title.trim()+'</a>';
			}
		}
		return output;
	}

    function BTPopup(href) {
        var bt_window = window.open(href,"BT_"+Math.ceil(Math.random()*1000),"width=800,height=600,titlebar=no,scrollbars=yes");
        bt_window.focus();
        return false;
    }
	
	jQuery(function(){
		jQuery('#btline').click(function(){
			jQuery("#btlinet").show();
			jQuery("#othert").hide();
		});
		jQuery('#other').click(function(){
			jQuery("#btlinet").hide();
			jQuery("#othert").show();
		});
	});

</script>



<div align="left">
<div id="wrapper934nbdfi8">
	<div class="topdiv_edge_74fd8x7"></div>
    <div class="topdiv_74fd8x7">
        <!--<a href="http://www.productsandservices.bt.com/consumerProducts/displayPnSHub.do?common_selectedPrimaryNavIndex=2" title="BT Broadband"> </a>-->
		<div class="cl_74fd8x7"></div>
    </div>

	<div class="middle_bg_74fd8x7">
	<div class="padleft6">

		<a class="bt_vision_m_link_74fd8x7_a head_m_link_74fd8x7" href="#" title="BT Vision"> </a>
		<a class="bt_broadband_m_link_74fd8x7_u head_m_link_74fd8x7" href="#" title="BT Broadband"> </a>
		<div class="cl_74fd8x7"></div>

		<div class="spacer8"></div>

		<div id="tab_window_74fd8x7">
			<div id="tab_slider_74fd8x7">
				<div id="vision_tab_74fd8x7">

					<div class="grey_m_74fd8x7"><p>
							<a class="cntnt_swch_74fd8x7" href="#vision_74fd8x7_1">How it works</a>|<a class="cntnt_swch_74fd8x7" href="#vision_74fd8x7_0">BT Vision news</a>|<a class="cntnt_swch_74fd8x7" href="#vision_74fd8x7_3">Cost</a>

					</p></div>

					<div class="cntnt_pnl_74fd8x7" id="vision_74fd8x7_2">
						<div class="pnl_title_74fd8x7">What's on</div>
						<p>Watch clips below to see highlights of whats available with <a target="_blank" href="http://www.btbroadbandinformation.com/bt-vision/">BT Vision</a></p>
						<div class="vid_links_74fd8x7">
							<a href="#tv" class="vid_tv_74fd8x7" title="Click to preview"></a>
							<a href="#pictureBoxFilm" class="vid_picbox_74fd8x7" title="Click to preview"></a>

							<a href="#sport" class="vid_sport_74fd8x7" title="Click to preview"></a>
							<a href="#music" class="vid_music_74fd8x7" title="Click to preview"></a>
							<a href="#kids" class="vid_kids_74fd8x7" title="Click to preview"></a>
							<a href="#replay" class="vid_tvr_74fd8x7" title="Click to preview"></a>
						</div>
                        <div class="cl_74fd8x7"></div>
                        <a target="_blank" rel="nofollow" href="http://www.productsandservices.bt.com/consumerProducts/displayCategory.do?categoryId=CON-TV-I">© All Rights Reserved</a>
					</div>

					<div class="cntnt_pnl_74fd8x7 active_74fd8x7" id="vision_74fd8x7_0">
						<div class="pnl_title_74fd8x7 vis_rss_header1_74fd8x7">Vision news</div>
						<div class="vis_rss_header2_74fd8x7"></div>
						<div class="spacer18 cl_74fd8x7"></div>
						<div id="rss_cntnr_74fd8x7"></div>
					</div>

					<div class="cntnt_pnl_74fd8x7" id="vision_74fd8x7_1">

						<div class="pnl_title_74fd8x7">How it works</div>
						<p>BT Vision gives you access to Freeview digital tv channels, radio channels and a great range of on demand entertainment.</p>
						<a class="img_vis_1_74fd8x7" target="_blank" onclick="return BTPopup('http://www.productsandservices.bt.com/consumer/consumerProducts/flash/vision_demo/index.html');" href="http://www.productsandservices.bt.com/consumer/consumerProducts/flash/vision_demo/index.html" title="BT Vision TV"></a>
                        <a href="#vision_promo" class="img_vis_1_2_74fd8x7" title="BT Vision TV"></a>
					</div>

					<div class="cntnt_pnl_74fd8x7" id="vision_74fd8x7_3">
						<div class="col_vis_3_0_74fd8x7 fl_74fd8x7">

							<div class="pnl_title_74fd8x7">Cost</div>
							<p>There are a range of prices for BT Vision packages to suit everyone. Visit our website to find out more.</p>
						</div>
						<div class="col_vis_3_1_74fd8x7 fl_74fd8x7">
							<div class="pnl_title_74fd8x7">What you need</div>
							<p class="bulletlist_74fd8x7">BT Phone line</p>
							<p class="bulletlist_74fd8x7">BT Total Broadband</p>

							<p class="bulletlist_74fd8x7">A TV and aerial</p>
							<p class="bulletlist_74fd8x7">Freeview coverage</p>
						</div>
						<div class="cl_74fd8x7"></div>
						<div class="img1_vis_3_74fd8x7"> </div>
						<div class="img2_vis_3_74fd8x7"> </div>
					</div>

				</div>
				<div id="broadband_tab_74fd8x7">

					<div class="grey_m_74fd8x7"><p class="padleft9"> <a href="#broadband_74fd8x7_1" class="cntnt_swch_74fd8x7 active_74fd8x7">Speed test</a>  |  <a href="#broadband_74fd8x7_2" class="cntnt_swch_74fd8x7">Availability</a>  |  <a href="#broadband_74fd8x7_3" class="cntnt_swch_74fd8x7">Comparison</a> </p></div>

					<div class="cntnt_pnl_74fd8x7" id="broadband_74fd8x7_0">

						<div class="pnl_title_74fd8x7">BT Total Broadband</div>
						<p>Want fast, wireless broadband? Get one of our <a target="_blank" href="http://www.btbroadbandinformation.com/">BT Broadband packages</a></p>
						<div class="img_brb_0_74fd8x7"> ;</div>
					</div>

					<div class="cntnt_pnl_74fd8x7" id="broadband_74fd8x7_1">
						<div class="pnl_title_74fd8x7">Speed test</div>

						<p>Want to see how fast your line is with a <a target="_blank" href="http://www.btbroadbandinformation.com/broadband-speed-test">broadband speed check</a>? Enter your telephone number or postcode in our broadband postcode checker below. You will need a minimum of 2MB speed to be able to get BT Vision.</p>
						<div class="pnl_title_purple_74fd8x7"> <br/>Enter phone number</div>
						<div class="pnl_search_74fd8x7">
							<form action="http://www.productsandservices.bt.com/consumerProducts/displayADSLCheckerResults.do" method="get" target="_blank">
								<input name="telephone" type="text"/>
								<input name="switch" type="hidden" value="BBAvailability"/>
								<input name="postcode" type="hidden" value="z"/>

								<a href="#" onclick="this.submit()"></a>
							</form>
						</div>
					</div>

					<div class="cntnt_pnl_74fd8x7" id="broadband_74fd8x7_2" >
						<p class="availability_74fd8x7">Want to see check <a target="_blank" href="http://www.btbroadbandinformation.com/broadband-availability">broadband availability</a> in your local area? Try our availability checker below:</p>

						<div id="bt_avail">
							<div id="btlinet" class="bg a1">
								<form method="get" target="_blank" action="http://www.productsandservices.bt.com/consumerProducts/displayADSLCheckerResults.do">
									<input type="text" value="" name="telephone" id="telnum"/>
									<a href="#" onclick="jQuery('#btlinet form').submit(); return false;" id="btline_submit"> </a>
									<input type="hidden" value="z" name="postcode"/>
									<input type="hidden" value="BBAvailability" name="switch"/>
								</form>

							</div>
							<div id="othert" class="bg b1">
								<form method="get" target="_blank" action="http://www.productsandservices.bt.com/consumerProducts/displayADSLCheckerResults.do">
									<input type="text" value="" name="housename" id="housenum"/>
									<input type="text" value="" name="postcode" id="postcode"/>
									<a href="#" onclick="jQuery('#othert form').submit(); return false;" id="other_submit"> </a>
									<input type="hidden" value="BBAvailability" name="switch"/>
									<input type="hidden" name="telephone"/>

								</form>
							</div>
							<a href="#" id="btline"> </a>
							<a href="#" id="other"> </a>
						
						</div>					
					</div>
					<div id="broadband_74fd8x7_3" class="cntnt_pnl_74fd8x7" style="display: block;">
						<div class="pnl_title_74fd8x7">Comparison</div>

							<p>Use our free broadband comparison tool to compare <a href="http://www.btbroadbandinformation.com/wireless-broadband/" target="_blank">BT wireless broadband</a> against other broadband services.</p>
							<a title="British telecom" href="http://www.btbroadbandinformation.com/broadband-help" target="_blank" class="img_brb_3_74fd8x7"> </a> 
					</div>
                </div>
			</div>
		</div>
	</div>

	</div>

    <div class="bottomdiv_74fd8x7">
		<div class="spacer18"></div>
        <a href="http://www.btbroadbandinformation.com/broadband-packages-and-services/" target="_blank" title="Btinternet"> </a>
    </div>
	<div class="bottomdiv_edge_74fd8x7"></div>
</div>
<div id="background_popup_74fd8x7"></div>
<div id="popup_cont_74fd8x7">

	<a href="#" id="popup_cont_close_74fd8x7">close</a>
	<div id="popup_flash_wrap_74fd8x7"><div id="popup_flash_74fd8x7"></div></div>
</div>
<script src="http://ic-widget.appspot.com/rss/feed1/http://www.btvision.bt.com/feed/" language="Javascript"></script>
</div>



<!-- WIDGET CODE END--> 
</div>
<?php
		  
		  /* End of Your Code ---------- */
		  
	  }
	  
	  /* -------------------------- */
	  /* Your custom code ends here */
	  
	  function widget_btad($args) 
	  {
	  
	  	  // Collect our widget's options, or define their defaults.
		  $options = get_option('widget_btad');
		  $title = empty($options['title']) ? __('btad') : $options['title'];
			
		  extract($args);
		  echo $before_widget;
		  echo $before_title;
		  echo $title;
		  echo $after_title;
		  btad();
		  echo $after_widget;
	  }  
	  
	  // This is the function that outputs the form to let users edit
	  // the widget's title. It's an optional feature, but were're doing 
	  // it all for you so why not!
	  
	  function widget_btad_control()
	  {
	  
		// Collect our widget options.
		$options = $newoptions = get_option('widget_btad');
		
		// This is for handing the control form submission.
		if ( $_POST['widget_btad-submit'] ) 
		{
			// Clean up control form submission options
			$newoptions['title'] = strip_tags(stripslashes($_POST['widget_btad-title']));
		}
				
		// If original widget options do not match control form
		// submission options, update them.
		if ( $options != $newoptions ) 
		{
			$options = $newoptions;
			update_option('widget_btad', $options);
		}
						
		$title = attribute_escape($options['title']);

		echo '<p><label for="btad-title">';
		echo 'Title: <input style="width: 250px;" id="widget_btad-title" name="widget_btad-title" type="text" value="';
		echo $title;
		echo '" />';
		echo '</label></p>';
		echo '<input type="hidden" id="widget_btad-submit" name="widget_btad-submit" value="1" />';
	  }
	  
	  
	// This registers the widget.
    register_sidebar_widget('btad', 'widget_btad');
	
	// This registers the (optional!) widget control form.
    register_widget_control('btad', 'widget_btad_control');
	
  }
    
  add_action('plugins_loaded', 'widget_btad_init');

?>