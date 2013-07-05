<?get_header()?>
	<div class="extend-header shadow">
		<section class="tiles">
			<div class="tile"><a href="/us/innovation/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_1.png"></a></div>
			<div class="tile"><a href="/services/supplement/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_2.png"></a></div>
			<div class="tile"><a href="/services/cooperation/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_3.png"></a></div>
		</section>
	</div>
	<section class="tiles">
		<div class="tile"><a href="/cases/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_4.png"></a></div>
		<div class="tile"><a href="/lifestyle/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_5.png"></a></div>
		<div class="tile"><a href="/evaluation/" target="_blank"><img src="/wp-content/uploads/2013/03/tile_6.png"></a></div>
		<hr>
	</section>
	<section class="headlines">
		<div class="widget column-3-1 news">
			<h2>动态</h2>
			<ul>
				<?query_posts('category_name=新闻动态&posts_per_page=5')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/tag/资讯/" target="_blank">Read more</a></button>
		</div>
		<div class="widget column-3-1 discount">
			<h2>EB5项目</h2>
			<ul>
				<?query_posts('category_name=移民项目&posts_per_page=5')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/tag/优惠活动/" target="_blank">Read more</a></button>
		</div>
		<div class="widget column-3-1 project">
			<h2>投资案例</h2>
			<ul>
				<?query_posts('category_name=项目和案例&posts_per_page=5')?>
				<?while(have_posts()):the_post();?>
				<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/tag/特色项目/" target="_blank">Read more</a></button>
		</div>
		<hr>
	</section>
<?get_footer()?>