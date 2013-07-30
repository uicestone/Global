<?get_header()?>
	<div class="extend-header shadow">
		<section class="tiles">
			<div class="tile"><p>境外投资</p><a href="/category/%e5%a2%83%e5%a4%96%e6%8a%95%e8%b5%84/" target="_blank"><img src="/wp-content/uploads/tile_1.jpg"></a></div>
			<div class="tile"><p>EB5移民</p><a href="/category/eb5%e7%a7%bb%e6%b0%91/" target="_blank"><img src="/wp-content/uploads/tile_2.jpg"></a></div>
			<div class="tile"><p>L1移民</p><a href="/category/l1%e7%a7%bb%e6%b0%91/" target="_blank"><img src="/wp-content/uploads/tile_3.jpg"></a></div>
		</section>
	</div>
	<section class="tiles">
		<div class="tile"><p>考察项目</p><a href="/category/%e8%81%94%e7%b3%bb%e6%88%91%e4%bb%ac/%e6%b5%b7%e5%a4%96%e8%80%83%e5%af%9f/" target="_blank"><img src="/wp-content/uploads/tile_4.jpg"></a></div>
		<div class="tile"><p>后续服务</p><a href="/%E3%80%90%E6%98%9F%E7%80%9A%E6%98%8E%E6%98%9F%E4%BA%A7%E5%93%81%E3%80%91%E6%B5%B7%E5%A4%96%E5%90%8E%E7%BB%AD%E6%9C%8D%E5%8A%A1/" target="_blank"><img src="/wp-content/uploads/tile_5.jpg"></a></div>
		<div class="tile"><p>海外房产</p><a href="/category/%E8%81%94%E7%B3%BB%E6%88%91%E4%BB%AC/%E5%85%B6%E5%AE%83%E7%BE%8E%E5%9B%BD%E4%BA%8B%E5%8A%A1/" target="_blank"><img src="/wp-content/uploads/tile_6.jpg"></a></div>
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