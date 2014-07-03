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
	<!-- /top_title -->
	<div class="wraper">
		<!-- contact_us -->
		<div class="contact_us">
			<h4>我们的位置</h4>
		 <!--   <div class="bwWrapper"><img src="<?= get_template_directory_uri() ?>/images/contact_us/contact_us.png" width="640" height="265" alt="" /></div>-->
			<div class="map_wrap"><iframe width="640" height="265" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=555+Smith+Street+New+York,+NY+12345&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.223579,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=555+Smith+St,+Brooklyn,+Kings,+New+York+11231&amp;t=m&amp;z=14&amp;ll=40.672836,-73.998729&amp;output=embed"></iframe></div>
			<ul>
				<li>地址：<br /><br />电话：<br />传真：</li>
				<li><strong>[地址]<br />[详细地址]<br />[电话]<br />[传真]</strong></li>
				<li>坐落信息</li>
			</ul> 
			<!--<h4>在线留言</h4>-->
<!--			<form action="#" method="post">
				<p><label for="namet">Name</label>(required)<br /><input id="namet" type="text" /></p>
				<p><label for="mailt">E-mail</label>(required)<br /><input id="mailt" type="text" /></p>
				<p><label for="website">Website</label><br /><input id="website" type="text" /></p>
				<p><label for="message">Message</label>(required)<br /><textarea id="message"></textarea></p>
				<p><input class="btn_m" type="submit" value="Submit Form" /></p>
			</form>-->
		</div>
		<!-- /contact_us -->
		<!-- sidebar -->
		<div class="sidebar">
			<!-- most popular -->
			<div class="most_popular">
				<h4>最新动态</h4>
				<?php $news = get_posts(array('category_name'=>'news'));?>
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
			<div class="our_clients">
				<h4>客户评价</h4>
				<?php $client_comments = get_posts(array('category_name'=>'news'));?>
				<ul class="clients_slider">
					<?php foreach($client_comments as $client_comment){ ?>
					<li>
						<blockquote>
							<?=wpautop($client_comment->post_content)?>
						</blockquote>
					</li>
					<?php } ?>
				</ul>
			</div>
			<!-- /our clients -->
			<!-- recent work -->
			<div class="recent_work">
				<h4>近期项目</h4>
				<ul class="recent_slider">
					<li>
						<div class="bwWrapper">
							<a href="#">
								<img src="<?= get_template_directory_uri() ?>/images/blog/blog_23.png" width="59" height="54" alt="" />
							</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- /recent work -->
		</div>
		<!-- /sidebar -->
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
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true,
        webworkerPath : false,
        responsive:true,
        invertHoverEffect:false
    });
})
</script>
<?php get_footer(); ?>