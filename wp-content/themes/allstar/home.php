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
			<img src="<?=get_template_directory_uri()?>/images/sliders/home_page_1/global.png" class="wp1_3 slide1_bot" alt="">		            
			<span class="txt1">专业律师协助</span>			
			<span class="txt2">境外投资</span>												
			<span class="txt3 short">协助客户进行目标国政策法规分析，对项目进行尽职调查、投资结构设计，帮助完成风控、付汇、登记、交割等专业事务。</span>												
		</div>
		<div class="oneByOne_item">                                 	
			<img src="<?=get_template_directory_uri()?>/images/sliders/home_page_1/team.png" class="wp1_3 wp1_left" alt="">			            
			<span class="txt1 txt_right2">提供独一无二的海外专业服务</span>			
			<span class="txt2 txt_right2">我们的团队</span>												
			<span class="txt3 txt_right2">协助客户落实企业、家庭、个人在美国的后续事务</span>												
		</div>	
	</div>    
</div>
<!-- /one bt one slider -->

<div class="content_block">
	<!-- text bar -->
<!--	<div class="text_bar">
		<div class="wraper">
			<h2>Construct is a responsive, business HTML template!<span>Check out the numerous options and features that Construct includes.</span></h2>
			<a class="buy btn_l" href="#">Buy Construct!</a>
			<div class="widget">
				<h3>Construct Is Flexible</h3>
				<p>This is a widgetized area, you can add icons,  shortcodes, etc  ...  <a href="#">read more</a></p>
			</div>
		</div>
	</div>-->
	<!-- /text bar -->
	<div class="wraper">
		<!-- features_block -->
		<div class="features_block">
			<ul>
				<li class="support">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>专业咨询</span></h4>
					<p></p>
				</li>
				<li class="seo">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>提供方案</span></h4>
					<p></p>
				</li>
				<li class="easy">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>签约</span></h4>
					<p></p>
				</li>
				<li class="design">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>协助执行</span></h4>
					<p></p>
				</li>
				<li class="flexible">
					<a class="circle_link" href="#">&nbsp;</a>
					<h4><span>客户目标实现</span></h4>
					<p></p>
				</li>
			</ul>
		</div>
		<!-- /features_block -->
	</div>
</div>

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