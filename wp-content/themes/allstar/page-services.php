<?php
$posts = get_posts(array('category_name'=>'服务内容', 'order'=>'asc', 'posts_per_page'=>-1));
get_header(); the_post(); ?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2><?php the_title(); ?><span><?php the_excerpt(); ?></span></h2>
			<ul>
				<li><a href="<?=site_url()?>">首页</a></li>
				<li>服务内容</li>
			</ul>
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<!-- services option -->
		<div class="features2_block services_option">
			<div id="h_tabs" class="c_after">
				<ul class="tab_select left_list">
					<?php foreach($posts as $post){ ?>
					<li class="support">
						<a class="tlink" href="#<?=$post->post_name?>">&nbsp;</a>
						<h4><?=$post->post_title?></h4>
						<p><span><?=$post->post_excerpt?></span></p>
					</li>
					<?php } ?>
				</ul>
				<?php foreach($posts as $post){ ?>
				<div id="<?=$post->post_name?>" class="right_desc">
					<?=wpautop($post->post_content)?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<script>
jQuery(function($){
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true,
        webworkerPath : false,
        responsive:true,
        invertHoverEffect:false
    });
});
</script>
<?php get_footer(); ?>
