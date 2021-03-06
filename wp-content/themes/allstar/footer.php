<?php if(ICL_LANGUAGE_CODE === 'zh-hans'): get_footer('cn'); else: ?>
	<div class="social_block">
		<div class="wraper">
			<p>Contact us</p>
			<?php wp_nav_menu(array('theme_location'=>'footer-contact')); ?>
		</div>
	</div>
	
	<div class="footer">
			<footer>
				<div class="recent_posts" style="width:458px">
					<h3><span>News</span></h3>
					<ul>
						<?php foreach(get_posts(array('category_name'=>'news-en', 'posts_per_page'=>10)) as $news){ ?>
						<li><a href="<?=get_the_permalink($news->ID)?>"><?=get_the_title($news->ID)?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="recent_posts">
					<h3><span>Projects</span></h3>
					<ul>
						<?php foreach(get_posts(array('category_name'=>'projects', 'posts_per_page'=>10)) as $news){ ?>
						<li><a href="<?=get_the_permalink($news->ID)?>"><?=get_the_title($news->ID)?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="recent_posts">
					<h3><span>Services</span></h3>
					<ul>
						<?php foreach(get_posts(array('category_name'=>'service', 'posts_per_page'=>10)) as $news){ ?>
						<li><a href="<?=get_the_permalink($news->ID)?>"><?=get_the_title($news->ID)?></a></li>
						<?php } ?>
					</ul>
				</div>
			</footer>
		</div>

		<div class="copyright">
			<div class="wraper">
				<p>
					<span>Copyright 2014 Allstar International LLC</span>All Rights Reserved
				</p>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html> 
<?php endif; ?>