<?php
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_script('simpleFAQ', get_template_directory_uri() . '/scripts/jquery.simpleFAQ-0.7.min.js', array('jquery'), '0.7');
});
$questions = get_posts(array('category_name'=>'faq'));
get_header();
the_post();
?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2><?php the_title(); ?><span><?php the_excerpt(); ?></span></h2>
			<ul>
				<li><a href="<?=site_url()?>">首页</a></li>
				<li>FAQ</li>
			</ul>
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<!-- /faq_list -->
		<div class="faq_list">
<!--			<ul class="filter">
				<li class="active all"><a href="#all">All</a></li>
				<li class="business"><a href="#business">Business</a></li>
				<li class="technical"><a href="#technical">Technical</a></li>
				<li class="miscellaneous"><a href="#miscellaneous">Miscellaneous</a></li>
			</ul>-->
			<ul id="faq">
				<?php foreach($questions as $question){ ?>
				<li class="all business">
					<p class="question"><?=get_the_title($question->ID)?></p>
					<div class="answer">
						<?=wpautop($question->post_content)?>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>

<script>
jQuery(function($){
	$('#faq').simpleFAQ();
});
</script>

<?php get_footer(); ?>
