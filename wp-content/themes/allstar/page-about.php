<?php get_header(); the_post(); ?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2><?php the_title(); ?><span><?php the_excerpt(); ?></span></h2>
			<ul>
				<li><a href=" <?=site_url()?>">首页</a></li>
				<li>关于我们</li>
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
					<div class="bwWrapper"><?=get_the_post_thumbnail($post->ID, 'about-us')?></div>
					<div class="desc">
						<h4><?=get_the_title($post->ID)?></h4>
						<?=wpautop($post->post_excerpt)?>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
		<!-- /intro text -->
		<!-- process -->
		<div class="process">
			<h4>服务流程</h4>
			<ul>
				<li>
					<h3><span>Step 1</span> 专业咨询</h3>
					<p></p>
				</li>
				<li>
					<h3><span>Step 2</span> 提供方案</h3>
					<p></p>
				</li>
				<li>
					<h3><span>Step 3</span> 签约</h3>
					<p></p>
				</li>
				<li>
					<h3><span>Step 4</span> 协助执行</h3>
					<p></p>
				</li>
			</ul>
		</div>
		<!-- /process --> 
<!--		<div class="why_choose_explore">
			<h4>Why Choose Crucio?  We’ll Tell You!</h4>
			 why choose 
			<div class="why_choose">
				<ul>
					<li>Cras rutrum leo at odio volutpat id blandit fugiats ipsum ornare.</li>
					<li>Donec fermentum porttitor nunc, sit amet gravida est porttitor vel.</li>
					<li>Maecenas quis nisi i luctus adipiscing sed vehicula tellus amet dolore.</li>
					<li>Aenean faucibus sapien a odio varius aliquet voluptas sadips..</li>
					<li>Suspendisse venenatis euismod ve vestibulum volutpat nibh imperdiets.</li>
					<li>Quisque non leo molestie augue imperdiet sollicitudin eu nec urna.</li>
					<li>Donec pulvinar lectus quis felis laoreet vestibulum.</li>
				</ul>
			</div>
			 /why choose 
			 features_explore 
			<div class="features_explore">
				<ul>
					<li>
						<div class="bwWrapper"><a href="#"><img src="<?= get_template_directory_uri() ?>/images/about_us/why_choose_us_1.png" width="94" height="65" alt="" /></a></div>
						<p>Fugiat dapibus, tellus cursus commodo, tortoeir in mauristes conds ime ntum nibh, ut fermentum massats justo sitis amet risus. Crast matisers consectetut ameter fermes ntum unsers maecenas sadips ipsumores un  ...<a href="#" class="read_more">read more</a></p>
					</li>
					<li>
						<div class="bwWrapper"><a href="#"><img src="<?= get_template_directory_uri() ?>/images/about_us/why_choose_us_2.png" width="94" height="65" alt="" /></a></div>
						<p>Fugiat dapibus, tellus cursus commodo, tortoeir in mauristes conds ime ntum nibh, ut fermentum massats justo sitis amet risus. Crast matisers consectetut ameter fermes ntum unsers maecenas sadips ipsumores un  ...<a href="#" class="read_more">read more</a></p>
					</li>
				</ul>
			</div>
			 /features_explore 
		</div>-->
		<!-- client list -->
		<div class="featured_list client_list">
			<div class="features_slider_wrap">
				<h3>我们的团队</h3>
				<?php $team = get_posts(array('category_name'=>'专业人员'));?>
				<ul class="features_slider">
					<?php foreach($team as $person){ ?>
					<li><div><div class="bwWrapper"><a href="<?=get_the_permalink($person->ID)?>"><?=get_the_post_thumbnail($person->ID, 'about-us-team')?></a></div></div></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<!-- /client list -->
		<!-- /send_quote -->
<!--		<div class="send_quote">
			<h4>Would you like us to send you a quote?</h4>
			<p>Click the button, fill out the form and we'll be right with you!<a class="btn_col" href="#">Get A Quote</a></p>
		</div>-->
		<!-- /send_quote -->

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
