<?php
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('jquery.onebyone');
	wp_enqueue_script('jquery.onebyone');
});
get_header();
?>

<div class="wrape homeone">
	<div class="fallback"><img src="<?=get_template_directory_uri()?>/images/sliders/home_page_1/home_page_1_fallback.jpg" alt="" /></div>
	<div id="obo_slider">
		<?=get_post(icl_object_id(get_posts(array('name'=>'slider内容'))[0]->ID))->post_content?>
	</div>    
</div>

<div class="content_block">
	<div class="wraper">
		<div class="features_block">
			<?=get_posts(array('name'=>'服务流程', 'suppress_filters'=>0))[0]->post_content?>
		</div>
	</div>
</div>

<script type="text/javascript">
jQuery(function($){
	$('#obo_slider').oneByOne({
		className: 'oneByOne1',
		easeType: 'random',
		slideShow: true,
		slideShowDelay: 5000
	});
});
</script>
<?php get_footer(); ?>