<?php
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('jquery.onebyone');
	wp_enqueue_script('jquery.onebyone');
});
get_header();
?>
<!-- one bt one slider -->
<div class="wrape homeone">
	<div class="fallback"><img src="<?=get_template_directory_uri()?>/images/sliders/home_page_1/home_page_1_fallback.jpg" alt="" /></div>
	<div id="obo_slider">  				
		<div class="oneByOne_item">
			<img src="<?=get_template_directory_uri()?>/images/sliders/home_page_1/home1_slide_1.png" class="wp1_3 slide1_bot" alt="">		            
			<span class="txt1">Construct Looks Good On</span>			
			<span class="txt2">ALL Screen Sizes</span>												
			<span class="txt3 short">Lid est laborum dolo rumes fugats untras. Et harums ser quidem sit rerum facilis dolores nemis uns voluptas sadips ipsums vitae tolu ptas nemis omnis fugiats vitaes nemo minima rerums uns.</span>												
			<span class="txt4 txt4up"><a href="#" class="btn_l">Purchase Now!</a></span>
		</div>
		<div class="oneByOne_item">                                 	
			<img src="<?=get_template_directory_uri()?>/images/sliders/home_page_7/home7_slide_2.png" class="wp1_3 wp1_left slide2_bot" alt="">			            
			<span class="txt1 blue txt_right2">This Slider Has Tons of Great Features</span>			
			<span class="txt2 blue txt_right2">iOS Friendly</span>												
			<span class="txt2 blue txt_right2">and Hyperlinks</span>												
			<span class="txt4 txt_right2 txt4up"><a href="#" class="btn_l">Purchase Now!</a></span>												
		</div>	

		<div class="oneByOne_item">
			<img src="<?=get_template_directory_uri()?>/images/sliders/home_page_7/home7_slide_3.png" class="wp1_3 slide2_bot" alt="">		            
			<span class="txt1">Crucio is a responsive, business</span>			
			<span class="txt2">HTML template</span>												
			<span class="txt3">Lid est laborum dolo rumes fugats untras. Et harums ser quidem sit rerum facilis dolores nemis uns voluptas sadips ipsums vitae tolu ptas nemis omnis fugiats vitaes nemo minima rerums uns.</span>												
			<span class="txt4"><a href="#" class="btn_l">Purchase Now!</a></span>
		</div>                                                                                              

		<div class="oneByOne_item">                                 	
			<img src="<?=get_template_directory_uri()?>/images/sliders/home_page_7/home7_slide_4.png" class="wp1_3 slide3_bot" alt="">			            
			<span class="txt1 blue">Use Individual Elements or </span>			
			<span class="txt2 blue">BIG IMAGES</span>												
			<span class="txt3 short">Lid est laborum dolo rumes fugats untras. Et harums ser quidem sit rerum facilis dolores nemis uns volu taes nemo minima rerums uns.</span>												
			<span class="txt4 txt4up"><a href="#" class="btn_l">Purchase Now!</a></span>
		</div>

	</div>    
</div>
<!-- /one bt one slider -->

<div class="content_block">
	<!-- text bar -->
	<div class="text_bar">
		<div class="wraper">
			<h2>Construct is a responsive, business HTML template!<span>Check out the numerous options and features that Construct includes.</span></h2>
			<a class="buy btn_l" href="#">Buy Construct!</a>
			<div class="widget">
				<h3>Construct Is Flexible</h3>
				<p>This is a widgetized area, you can add icons,  shortcodes, etc  ...  <a href="#">read more</a></p>
			</div>
		</div>
	</div>
	<!-- /text bar -->
	<div class="wraper">
		<!-- features_block -->
		<div class="features_block">
			<ul>
				<li class="design">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>Design</span></h4>
					<p>Lid est laborum dolo rumes fugats untras. Et harums ser quidem sit rerum facilis est dolores nemis uns.  </p>
				</li>
				<li class="flexible">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>Flexible</span></h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem que laudantium totam</p>
				</li>
				<li class="support">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>Support</span></h4>
					<p>Nemo enim ipsam voluptatem uns quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunturs.</p>
				</li>
				<li class="easy">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>Easy To Edit</span></h4>
					<p>Neque porro qusquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia nons.</p>
				</li>
				<li class="seo">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>SEO Ready</span></h4>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis voluptas uns sadips doloreusi.</p>
				</li>
			</ul>
		</div>
		<!-- /features_block -->
	</div>
</div>

<!-- footer -->
<!-- social block -->
<div class="social_block">
	<div class="wraper">
		<p>Stay connected with us in your favorite flavor!</p>
		<ul>
			<li class="facebook"><a href="#">Facebook</a></li>
			<li class="twitter"><a href="#">Twitter</a></li>
			<li class="linkedin"><a href="#">LinkedIn</a></li>
			<li class="rss"><a href="#">RSS</a></li>
			<li class="dribbble"><a href="#">Dribbble</a></li>
			<li class="google"><a href="#">Google+</a></li>
		</ul>
	</div>
</div>
<!-- /social block -->

<script type="text/javascript">
jQuery(function($){
	$('#obo_slider').oneByOne({
		className: 'oneByOne1',
		easeType: 'random',
		slideShow: true
	});
});
</script>
<?php get_footer(); ?>