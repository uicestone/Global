<?php get_header(); the_post(); ?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2><?php the_title(); ?><span><?php the_excerpt(); ?></span></h2>
			<ul>
				<li><a href=" <?=icl_get_home_url()?>">首页</a></li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<!-- intro text -->
		<div class="intro_text">
			<?php $posts = get_posts(array('category_name'=>'团队概况')); ?>
			<ul class="intro_slider">
				<?php foreach($posts as $post){ ?>
				<li>
					<div class="bwWrapper"><a href="<?=get_the_permalink($post->ID)?>"><?=get_the_post_thumbnail($post->ID, 'about-us')?></a></div>
					<div class="desc">
						<h4><a href="<?=get_the_permalink($post->ID)?>"><?=get_the_title($post->ID)?></a></h4>
						<?=wpautop($post->post_excerpt)?>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
		<!-- /intro text -->
		<!-- process -->
		<div class="process">
			<h4>团队优势</h4>
			<ul>
				<?php foreach(get_posts(array('category_name'=>'团队优势')) as $index => $post){ ?>
				<li>
					<h3>
						<span><?=$index + 1?></span>
						<a href="<?=get_the_permalink($post->ID)?>"><?=get_the_title($post->ID)?></a>
					</h3>
					<p><?=wpautop($post->post_content)?></p>
				</li>
				<?php } ?>
			</ul>
		</div>
		
		<div class="featured_list client_list">
			<div class="features_slider_wrap">
				<h3>我们的团队</h3>
				<?php $team = get_posts(array('category_name'=>'专业人员'));?>
				<ul class="features_slider">
					<?php foreach($team as $person){ ?>
					<li>
						<div>
							<div class="bwWrapper">
								<a href="<?=get_the_permalink($person->ID)?>"><?=get_the_post_thumbnail($person->ID, 'about-us-team')?></a>
							</div>
							<div style="font-size:16px; padding: 15px 0 10px;">
								<a href="<?=get_the_permalink($person->ID)?>" style="color:#888"><?=get_the_title($person->ID)?></a>
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
jQuery(function($) {
	$('.features_slider').bxSlider({
		auto: false,
		displaySlideQty: 5,
		moveSlideQty: 1,
		speed: 1000
	});
	$('.intro_slider').bxSlider({
		auto: false,
		controls: false,
		mode: 'fade',
		pager: true
	});
	$('.bwWrapper').BlackAndWhite({
		hoverEffect: true,
		webworkerPath: false,
		responsive: true,
		invertHoverEffect: false
	});
});
</script>

<?php get_footer(); ?>
