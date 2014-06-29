<?php
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_script('jquery.bxSlider');
	wp_enqueue_script('jquery.faq');
	wp_enqueue_script('jquery.blackandwhite');
});

get_header();
?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2><?php single_cat_title(); ?><span><?php echo category_description(get_the_category()[0]->ID); ?></span></h2>
<!--			<ul>
				<li><a href="#">Home</a></li>
				<li>Large Image No Sidebar</li>
			</ul>-->
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<!-- blog entries full -->
		<div class="blog_entries blog_entries_full">
			
			<?php while(have_posts()): the_post(); ?>
			<div class="post post_medium">
				<div class="img_wrap bwWrapper">
					<div class="date"><?php the_date(); ?></div>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail'); ?></a>
				</div>
				<div class="desc">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p><?php the_excerpt(); ?></p>
					<div class="metadata">
						<strong class="dots">....</strong>
						By <a href="#"><?php the_author(); ?></a>
						<!--<a href="#">12 COMMENTS</a>-->
						<br />
						<?php the_tags(); ?>
						<a href="<?php the_permalink(); ?>" class="read_more btn_col">Read More</a>
					</div>   
				</div>   
			</div>
			<?php endwhile; ?>
			
			<!-- pager_nav -->
			<div class="pager_nav">
				<?php
				echo paginate_links(array(
					'base' => str_replace( 99999, '%#%', esc_url( get_pagenum_link( 99999 ) ) ),
					'format'=>'/%n%/page/%#%',
					'total'=>2,
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages)
				);
				?>
			</div>
			<!-- /pager_nav -->
		</div>
		<!-- /blog entries full -->

	</div>
</div>

<script type="text/javascript">
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
	$('#faq').dltoggle( { "open-image"   : "images/open.png", "closed-image" : "images/closed.png" } );
	$("#open").click(function(event){
      $('#faq').dltoggle_show();
      return false;
	});
	$("#close").click(function(event){
      $('#faq').dltoggle_hide();
      return false;
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
