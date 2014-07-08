<?php get_header(); the_post(); ?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2><?php the_title(); ?> <span></span></h2>
			<ul>
			</ul>
		</div>
	</div>
	<div class="wraper">
		<div class="blog_entries">

			<div class="post post_full">
				<div class="img_wrap bwWrapper">
					<div class="date"><?php the_date(); ?></div>
					<?php the_post_thumbnail('single-top'); ?>
				</div>
				<div class="desc">
					<?php the_content(); ?>
				</div>
			</div>

			<div class="leave_comment">
				<h4>评论</h4>
				<form action="#" method="post">
					<p><label for="namet">Name</label>(required)<br /><input id="namet" type="text" /></p>
					<p><label for="mailt">E-mail</label>(required)<br /><input id="mailt" type="text" /></p>
					<p><label for="website">Website</label><br /><input id="website" type="text" /></p>
					<p><label for="message">Message</label>(required)<br /><textarea id="message"></textarea></p>
					<p><input class="btn_m" type="submit" value="提交" /></p>
				</form>
			</div>

		</div>
		
		<div class="sidebar">
			
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
			
			<div class="most_popular">
				<h4>最新文章</h4>
				<ul>
					<?php foreach(get_posts() as $post){ ?>
					<li>
						<div class="bwWrapper"><a href="<?=get_the_permalink($post->ID)?>"><?=get_the_post_thumbnail($post->ID, 'contact-news')?></a></div>
						<div class="desc">
							<p><strong><a href="<?=get_the_permalink($post->ID)?>"><?=get_the_title($post->ID)?></a></strong></p>
							<p><?=$post->post_excerpt?></p>
							<p><span><?=get_the_date($post->ID)?></span></p>
						</div>
					</li>
					<?php } ?>
					
				</ul>
			</div>
			
			<div class="acc_tabs">
				<div id="tabs">
					<div id="tab-1">
						<?php wp_list_categories(array('taxonomy'=>'category')); ?>
					</div>
				</div>
			</div>
			
<!--			<div class="latest_tweets">
				<h4>Latest From The Twittersphere</h4>
				<ul>
					<li><a href="#">@crucio</a> what an incredible site!<br /><a href="#">less than a minute ago</a></li>
					<li><a href="#">@themesector</a> love this theme, tons of options, lots of goodies and crazy good support.  I cant ask for anything better!<br /><a href="#">about 3 hours ago</a></li>
					<li><a href="#">@themeforest</a> where do you get support for account issues?  <a href="#">http://t.co/sr324nLrQw</a><br /><a href="#">less than a minute ago</a></li>
				</ul>
			</div>-->
			
<!--			<div class="our_clients">
				<h4>Our Clients Just Love Us</h4>
				<ul class="clients_slider">
					<li>
						<blockquote>
							<p>"Nam libero tempore, cum soluta nobis est eligendi optio cumque nihl impedit quois minus id quod maxime placeat facere rendus sit sadipsamets."</p>
							<p>Jane Doe, CEO of Imperio</p>
						</blockquote>
					</li>	
					<li>
						<blockquote>
							<p>"Cum soluta nobis est eligendi optio cumque nihl impedit quois minus id quod maxime placeait sadipsamets."</p>
							<p>Jane Doe, CEO of Imperio</p>
						</blockquote>
					</li>	
					<li>
						<blockquote>
							<p>"Libero tempore, cuendi optio cumque nihl impedit quois minus id quod maxime placeat facere rendus sit sadipsamets."</p>
							<p>Jane Doe, CEO of Imperio</p>
						</blockquote>
					</li>	
					<li>
						<blockquote>
							<p>"Nam libero tempore, cum soluta nobis es nihl impedit quois minus id quod maxime placeat facere rendus sit sadipsamets."</p>
							<p>Jane Doe, CEO of Imperio</p>
						</blockquote>
					</li>	
					<li>
						<blockquote>
							<p>"Am libero tempore, cum soluta nobis est eligendi optio cumque ipsamets."</p>
							<p>Jane Doe, CEO of Imperio</p>
						</blockquote>
					</li>	
				</ul>   
			</div>-->
			
			<div class="flyout_area">
				<dl id="faq">
					<?php foreach(get_posts(array('category_name'=>'faq')) as $post){ ?>
					<dt><h4><?=get_the_title($post->ID)?></h4></dt>
					<dd>
						<div>
							<?=wpautop($post->post_content)?>
						</div> 
					</dd>
					<?php } ?>
				</dl>
			</div>
			
		</div>
		
	</div>
</div>

<script>
jQuery(function($) {
	$('.clients_slider').bxSlider({
		auto: false,
		controls: false,
		mode: 'fade',
		pager: true
	});
	$('.recent_slider').bxSlider({
		auto: false,
		displaySlideQty: 1,
		moveSlideQty: 1,
		speed: 1000
	});
	$('#faq').dltoggle();
	$("#open").click(function(event) {
		$('#faq').dltoggle_show();
		return false;
	});
	$("#close").click(function(event) {
		$('#faq').dltoggle_hide();
		return false;
	});
	$('.bwWrapper').BlackAndWhite({
		hoverEffect: true,
		webworkerPath: false,
		responsive: true,
		invertHoverEffect: false
	});
})
</script>
<?php get_footer(); ?>
