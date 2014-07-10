<?php get_header(); the_post(); ?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2><?php the_title(); ?><span><?php the_excerpt(); ?></span></h2>
			<ul>
				<li><a href="<?=site_url()?>">首页</a></li>
				<li>联系我们</li>
			</ul>
		</div>
	</div>
	<div class="wraper">
		<div class="contact_us">
			<h4>我们的位置</h4>
			<?php the_content(); ?>
		</div>
		<div class="sidebar">
			<div class="most_popular">
				<h4>团队动态</h4>
				<?php $news = get_posts(array('tag'=>'团队动态'));?>
				<ul>
					<?php foreach($news as $news_piece){ ?>
					<li>
						<div class="bwWrapper"><?=get_the_post_thumbnail($news_piece->ID, 'contact-news')?></div>
						<div class="desc">
							<p><strong><?=get_the_title($news_piece->ID)?></strong></p>
							<p><?=$news_piece->post_excerpt?></p>
							<p><span><a href="#"><?=get_the_date('', $news_piece->ID)?></a></span></p>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="recent_work">
				<h4>近期项目</h4>
				<ul class="recent_slider">
					<?php foreach(get_posts(array('tag'=>'近期项目')) as $post){ ?>
					<li>
						<div class="bwWrapper">
							<a href="<?=get_the_permalink($post->ID)?>"><?=get_the_post_thumbnail($post->ID, 'contact-news')?></a>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<script>
jQuery(function($){
	$('.clients_slider').bxSlider({
		auto: false,
		controls : false,
		mode: 'fade',
		pager: true
	});	
	$('.recent_slider').bxSlider({
		auto: false,
		displaySlideQty: 1,
		moveSlideQty: 1,
    	speed : 1000
	});
})
</script>
<?php get_footer(); ?>