<?get_header()?>
	<div class="extend-header shadow">
		<section class="tiles">
			<div class="tile"><a href="#" target="_blank"><img src="/wp-content/uploads/tile_1.jpg"></a></div>
			<div class="tile"><a href="#" target="_blank"><img src="/wp-content/uploads/tile_2.jpg"></a></div>
			<div class="tile"><a href="#" target="_blank"><img src="/wp-content/uploads/tile_3.jpg"></a></div>
		</section>
	</div>
	<section class="tiles">
		<div class="tile"><a href="#" target="_blank"><img src="/wp-content/uploads/tile_4.jpg"></a></div>
		<div class="tile"><a href="#" target="_blank"><img src="/wp-content/uploads/tile_5.jpg"></a></div>
		<div class="tile"><a href="#" target="_blank"><img src="/wp-content/uploads/tile_6.jpg"></a></div>
		<hr>
	</section>
	<section class="headlines">
		<div class="widget column-3-1 news">
			<h2>动态</h2>
			<ul>
				<?query_posts('category_name=新闻动态&posts_per_page=10')?>
				<?while(have_posts()):the_post();?>
				<li class="ellipsis" title="<?the_title()?>"><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/category/关于我们/新闻动态/" target="_blank">Read more</a></button>
		</div>
		<div class="widget column-3-1 project">
			<h2>EB5项目</h2>
			<ul>
				<?query_posts('category_name=移民项目&posts_per_page=10')?>
				<?while(have_posts()):the_post();?>
				<li class="ellipsis" title="<?the_title()?>"><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/category/EB5移民/移民项目/" target="_blank">Read more</a></button>
		</div>
		<div class="widget column-3-1 discount">
			<h2>投资案例</h2>
			<ul>
				<?query_posts('category_name=项目和案例&posts_per_page=10')?>
				<?while(have_posts()):the_post();?>
				<li class="ellipsis" title="<?the_title()?>"><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
				<?endwhile;?>
			</ul>
			<button class="read-more"><a href="/category/境外投资/项目和案例/" target="_blank">Read more</a></button>
		</div>
		<hr>
	</section>
<?get_footer()?>