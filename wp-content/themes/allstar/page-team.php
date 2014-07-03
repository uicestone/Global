<?php
get_header();
the_post();
$people = get_posts(array('category_name'=>'team'));
?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2><?php the_title(); ?><span><?php the_excerpt(); ?></span></h2>
			<ul>
				<li><a href="<?=site_url()?>">首页</a></li>
				<li>专业人员</li>
			</ul>
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<!-- team_option -->
		<div class="team_option">
			<ul>
				<?php foreach($people as $person){ ?>
				<li>
					<div class="img bwWrapper"><??><p><strong><?=get_the_title($person->ID)?></strong>, <?=$person->post_excerpt?></p></div>
					<div class="desc">
						<ul class="social">
							<li><a class="rss" href="#">电话：</a></li>
							<li><a class="rss" href="#">E-mail：</a></li>
							<li><a class="rss" href="#">微博</a></li>
						</ul>
						<?=wpautop($person->post_content)?>
					</div>
				</li>
				<?php } ?>
			</ul>
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
