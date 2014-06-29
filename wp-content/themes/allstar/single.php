<?php get_header(); the_post(); ?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2><?php the_title(); ?> <span></span></h2>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li>Blog Post</li>
			</ul>
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<!-- blog entries -->
		<div class="blog_entries">

			<div class="post post_full">
				<div class="img_wrap bwWrapper">
					<div class="date"><?php the_date(); ?></div>
					<img src="<?=get_template_directory_uri()?>/images/blog/blog_01.png" width="640" height="265" alt="" />
				</div>
				<div class="desc">
					<?php the_content(); ?>
				</div>
			</div>

			<!-- /share story -->
<!--			<div class="share_story">
				<h4>Share This Story!</h4>
				<ul>
					<li><a class="facebook" href="#">facebook</a></li>
					<li><a class="tweeter" href="#">tweeter</a></li>
					<li><a class="in" href="#">in</a></li>
					<li><a class="baby" href="#">baby</a></li>
					<li><a class="rss" href="#">rss</a></li>
					<li><a class="google" href="#">google</a></li>
					<li><a class="www" href="#">www</a></li>
				</ul>
			</div>-->
			<!-- /share story -->

			<!-- /Comments -->
<!--			<div class="comments">
				<h4>Comments</h4>
				<div class="add_comment c_after"><a class="btn_m" href="#">Add Comment</a></div>
				<ul>
					<li>
						<div class="info"><img src="<?=get_template_directory_uri()?>/images/avatar.png" alt="" /><strong>Jason Smith</strong>  |  <i>15th February 2012</i>  |  <a href="#">Reply</a></div>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut etras omns unytreas  volupNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nontres  numquam eius mo  pora incidunt ut labore et dolore magnam aliquam quaerat voluptatems uns.</p>
					</li>
					<li>
						<div class="info"><img src="<?=get_template_directory_uri()?>/images/avatar.png" alt="" /><strong>Jason Smith</strong>  |  <i>15th February 2012</i>  |  <a href="#">Reply</a></div>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut etras omns unytreas  volupNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nontres  numquam eius mo  pora incidunt ut labore et dolore magnam aliquam quaerat voluptatems uns.</p>
						<ul>
							<li>
								<div class="info"><img src="<?=get_template_directory_uri()?>/images/avatar.png" alt="" /><strong>Jason Smith</strong>  |  <i>15th February 2012</i>  |  <a href="#">Reply</a></div>
								<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut etras omns unytreas  volupNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nontres  numquam eius mo  pora incidunt ut labore et dolore magnam aliquam quaerat voluptatems uns.</p>
							</li>
						</ul>
					</li>
					<li>
						<div class="info"><img src="<?=get_template_directory_uri()?>/images/avatar.png" alt="" /><strong>Jason Smith</strong>  |  <i>15th February 2012</i>  |  <a href="#">Reply</a></div>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut etras omns unytreas  volupNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nontres  numquam eius mo  pora incidunt ut labore et dolore magnam aliquam quaerat voluptatems uns.</p>
					</li>
				</ul>
			</div>-->
			<!-- /Comments -->

			<!-- /Leave a Comment -->
			<div class="leave_comment">
				<h4>Leave a Comment</h4>
				<form action="#" method="post">
					<p><label for="namet">Name</label>(required)<br /><input id="namet" type="text" /></p>
					<p><label for="mailt">E-mail</label>(required)<br /><input id="mailt" type="text" /></p>
					<p><label for="website">Website</label><br /><input id="website" type="text" /></p>
					<p><label for="message">Message</label>(required)<br /><textarea id="message"></textarea></p>
					<p><input class="btn_m" type="submit" value="Add Comment" /></p>
				</form>
			</div>
			<!-- /Leave a Comment -->

		</div>
		<!-- /blog entries -->
		<!-- sidebar -->
		<div class="sidebar">
			<!-- most popular -->
			<div class="most_popular">
				<h4>Most Popular Blog Posts</h4>
				<ul>
					<li>
						<div class="bwWrapper"><a href="blog_post.html"><img src="<?=get_template_directory_uri()?>/images/blog/blog_23.png" width="60" height="55" alt="" /></a></div>
						<div class="desc">
							<p><strong><a href="blog_post.html">Being Creative Work</a></strong></p>
							<p>Sectetut amet fermens ...</p>
							<p><span>February 15th 2012   <a href="#">By Crucio</a></span></p>
						</div>
					</li>
					<li>
						<div class="bwWrapper"><a href="blog_post.html"><img src="<?=get_template_directory_uri()?>/images/blog/blog_24.png" width="60" height="55" alt="" /></a></div>
						<div class="desc">
							<p><strong><a href="blog_post.html">Being Creative Work</a></strong></p>
							<p>Sectetut amet fermens ...</p>
							<p><span>February 15th 2012   <a href="#">By Crucio</a></span></p>
						</div>
					</li>
					<li>
						<div class="bwWrapper"><a href="blog_post.html"><img src="<?=get_template_directory_uri()?>/images/blog/blog_25.png" width="60" height="55" alt="" /></a></div>
						<div class="desc">
							<p><strong><a href="blog_post.html">Being Creative Work</a></strong></p>
							<p>Sectetut amet fermens ...</p>
							<p><span>February 15th 2012   <a href="#">By Crucio</a></span></p>
						</div>
					</li>
				</ul>
			</div>
			<!-- /most popular -->
			<!-- acc tabs -->
			<div class="acc_tabs">
				<div id="tabs">
					<ul class="tab_select">
						<li><a href="#tab-1">Archives</a></li>
						<li><a href="#tab-2">Categories</a></li>
						<li><a href="#tab-3">Comments</a></li>
					</ul>
					<div id="tab-1">
						<ul>
							<li><a href="#">January 2012 (12)</a></li>
							<li><a href="#">February 2012 (12)</a></li>
							<li><a href="#">March 2012 (12)</a></li>
							<li><a href="#">April 2012 (12)</a></li>
							<li><a href="#">May 2012 (12)</a></li>
							<li><a href="#">June 2012 (12)</a></li>
							<li><a href="#">July 2012 (12)</a></li>
						</ul>
					</div>
					<div id="tab-2">
						<ul>
							<li><a href="#">Cat 1</a></li>
							<li><a href="#">Cat 2</a></li>
							<li><a href="#">Cat 3</a></li>
						</ul>
					</div>
					<div id="tab-3">
						<ul>
							<li><a href="#">Some comment</a></li>
							<li><a href="#">Some comment2</a></li>
							<li><a href="#">Some comment3</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /acc tabs -->
			<!-- latest tweets -->
			<div class="latest_tweets">
				<h4>Latest From The Twittersphere</h4>
				<ul>
					<li><a href="#">@crucio</a> what an incredible site!<br /><a href="#">less than a minute ago</a></li>
					<li><a href="#">@themesector</a> love this theme, tons of options, lots of goodies and crazy good support.  I cant ask for anything better!<br /><a href="#">about 3 hours ago</a></li>
					<li><a href="#">@themeforest</a> where do you get support for account issues?  <a href="#">http://t.co/sr324nLrQw</a><br /><a href="#">less than a minute ago</a></li>
				</ul>
			</div>
			<!-- /latest tweets -->
			<!-- our clients -->
			<div class="our_clients">
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
			</div>
			<!-- /our clients -->
			<!-- flyout_area sidebar -->
			<div class="flyout_area">
				<dl id="faq">
					<dt><h4>Flyout Content Area 1</h4></dt>
					<dd>
						<div>
							<p>Fugiat dapibus, tellus ac cursus commodo, mauris sit condime ntum nibh, ut fermentum massa justo vitaes amet risus amets un.  osi sectetut amet fermentum aecenas faucib. doplores sadips uns.</p>
						</div> 
					</dd>
					<dt><h4>Flyout Content Area 2</h4></dt>
					<dd>
						<div>
							<p>Fugiat dapibus, tellus ac cursus commodo, mauris sit condime ntum nibh, ut fermentum massa justo vitaes amet risus amets un.  osi sectetut amet fermentum aecenas faucib. doplores sadips uns.</p>
						</div> 
					</dd>
					<dt><h4>Flyout Content Area 3</h4></dt>
					<dd>
						<div>
							<p>Fugiat dapibus, tellus ac cursus commodo, mauris sit condime ntum nibh, ut fermentum massa justo vitaes amet risus amets un.  osi sectetut amet fermentum aecenas faucib. doplores sadips uns.</p>
						</div> 
					</dd>
				</dl>
			</div>
			<!-- /flyout_area sidebar -->
			<!-- recent work -->
			<div class="recent_work">
				<h4>Recent Work Widget</h4>
				<ul class="recent_slider">
					<li><div class="bwWrapper"><a href="#"><img src="<?=get_template_directory_uri()?>/images/blog/blog_23.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?=get_template_directory_uri()?>/images/blog/blog_24.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?=get_template_directory_uri()?>/images/blog/blog_25.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?=get_template_directory_uri()?>/images/blog/blog_26.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?=get_template_directory_uri()?>/images/blog/blog_27.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?=get_template_directory_uri()?>/images/blog/blog_28.png" width="59" height="54" alt="" /></a></div></li>
				</ul>
			</div>
			<!-- /recent work -->
		</div>
		<!-- /sidebar -->
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
