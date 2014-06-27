<?php get_header(); ?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2>Get In Touch<span>We're just an email or phone call away.  Fill out the form below and we’ll be right with you!</span></h2>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Pages</a></li>
				<li>Contact Us</li>
			</ul>
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<!-- contact_us -->
		<div class="contact_us">
			<h4>Where We Make Magic Happen</h4>
		 <!--   <div class="bwWrapper"><img src="<?= get_template_directory_uri() ?>/images/contact_us/contact_us.png" width="640" height="265" alt="" /></div>-->
			<div class="map_wrap"><iframe width="640" height="265" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=555+Smith+Street+New+York,+NY+12345&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.223579,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=555+Smith+St,+Brooklyn,+Kings,+New+York+11231&amp;t=m&amp;z=14&amp;ll=40.672836,-73.998729&amp;output=embed"></iframe></div>
			<ul>
				<li>Address:<br /><br />Phone:<br />Fax:<br />Toll Free:</li>
				<li><strong>555 Smith Street<br />New York, NY 12345<br />555-123-4567<br />555-123-5678<br />555-123-6789</strong></li>
				<li>Construct is located at the heart of downtown New York City.  Come on down and have a visit!  Or feel free to fill out the form below to get in touch with us. We’d love to hear from you, and will be in touch with you right away.  Thanks, we look forward to hearing from you!  Tempora un incidunt ut labore et dolore magnam aliquam quaeraptatem.</li>
			</ul> 
			<h4>Drop Us A Quick Line!</h4>
			<form action="#" method="post">
				<p><label for="namet">Name</label>(required)<br /><input id="namet" type="text" /></p>
				<p><label for="mailt">E-mail</label>(required)<br /><input id="mailt" type="text" /></p>
				<p><label for="website">Website</label><br /><input id="website" type="text" /></p>
				<p><label for="message">Message</label>(required)<br /><textarea id="message"></textarea></p>
				<p><input class="btn_m" type="submit" value="Submit Form" /></p>
			</form>
		</div>
		<!-- /contact_us -->
		<!-- sidebar -->
		<div class="sidebar">
			<!-- most popular -->
			<div class="most_popular">
				<h4>Most Popular Blog Posts</h4>
				<ul>
					<li>
						<div class="bwWrapper"><img src="<?= get_template_directory_uri() ?>/images/blog/blog_23.png" width="60" height="55" alt="" /></div>
						<div class="desc">
							<p><strong>Being Creative Work</strong></p>
							<p>Sectetut amet fermens ...</p>
							<p><span><a href="#">February 15th 2012</a>   By Crucio</span></p>
						</div>
					</li>
					<li>
						<div class="bwWrapper"><img src="<?= get_template_directory_uri() ?>/images/blog/blog_24.png" width="60" height="55" alt="" /></div>
						<div class="desc">
							<p><strong>Being Creative Work</strong></p>
							<p>Sectetut amet fermens ...</p>
							<p><span><a href="#">February 15th 2012</a>   By Crucio</span></p>
						</div>
					</li>
					<li>
						<div class="bwWrapper"><img src="<?= get_template_directory_uri() ?>/images/blog/blog_25.png" width="60" height="55" alt="" /></div>
						<div class="desc">
							<p><strong>Being Creative Work</strong></p>
							<p>Sectetut amet fermens ...</p>
							<p><span><a href="#">February 15th 2012</a>   By Crucio</span></p>
						</div>
					</li>
				</ul>
			</div>
			<!-- /most popular -->
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
			<!-- recent work -->
			<div class="recent_work">
				<h4>Recent Work Widget</h4>
				<ul class="recent_slider">
					<li><div class="bwWrapper"><a href="#"><img src="<?= get_template_directory_uri() ?>/images/blog/blog_23.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?= get_template_directory_uri() ?>/images/blog/blog_24.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?= get_template_directory_uri() ?>/images/blog/blog_25.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?= get_template_directory_uri() ?>/images/blog/blog_26.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?= get_template_directory_uri() ?>/images/blog/blog_27.png" width="59" height="54" alt="" /></a></div><div class="bwWrapper"><a href="#"><img src="<?= get_template_directory_uri() ?>/images/blog/blog_28.png" width="59" height="54" alt="" /></a></div></li>
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