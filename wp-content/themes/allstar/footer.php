	<div class="social_block">
		<div class="wraper">
			<p>与我们取得联系</p>
			<?php wp_nav_menu(array('theme_location'=>'footer-contact')); ?>
		</div>
	</div>
	
	<div class="footer">
			<footer>
				<div class="recent_posts" style="width:458px">
					<h3><span>团队动态</span></h3>
					<ul>
						<?php foreach(get_posts(array('tag'=>'团队动态')) as $news){ ?>
						<li><a href="<?=get_the_permalink($news->ID)?>"><?=get_the_title($news->ID)?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="recent_posts">
					<h3><span>近期项目</span></h3>
					<ul>
						<?php foreach(get_posts(array('tag'=>'近期项目')) as $news){ ?>
						<li><a href="<?=get_the_permalink($news->ID)?>"><?=get_the_title($news->ID)?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="recent_posts">
					<h3><span>专业服务</span></h3>
					<ul>
						<?php foreach(get_posts(array('tag'=>'专业服务', 'posts_per_page'=>10)) as $news){ ?>
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
