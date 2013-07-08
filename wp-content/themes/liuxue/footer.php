	<footer>
		<div class="service">
			<section>
				<div class="widget column-1 service">
					<h2>服务项目</h2>
					<div class="service-content">
						<ul class="column-4-1">
							<h3><a href="/category/eb5%e7%a7%bb%e6%b0%91/%e6%b5%81%e7%a8%8b%e4%b8%8e%e6%97%b6%e9%97%b4/" target="_blank">EB5移民</a></h3>
							<?query_posts('category_name=流程与时间&posts_per_page=5')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-4-1">
							<h3><a href="/category/l1%e7%a7%bb%e6%b0%91/%e7%a8%8b%e5%ba%8f%e4%bb%8b%e7%bb%8d/" target="_blank">L1移民</a></h3>
							<?query_posts('category_name=程序介绍&posts_per_page=5')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-4-1">
							<h3><a href="/category/%e4%ba%b2%e5%b1%9e%e7%a7%bb%e6%b0%91/%e6%a1%88%e4%be%8b%e4%bb%8b%e7%bb%8d/" target="_blank">亲属移民</a></h3>
							<?query_posts('category_name=案例介绍&posts_per_page=5')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-4-1">
							<h3><a href="/category/%e5%85%b3%e4%ba%8e%e6%88%91%e4%bb%ac/%e6%9c%8d%e5%8a%a1%e5%86%85%e5%ae%b9/" target="_blank">后续服务</a></h3>
							<?query_posts('category_name=服务内容&posts_per_page=5')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
					</div>
				</div>
			</section>
		</div>
		<section>
			<hr>
			<div class="copy">Copyright by <a href="http://www.lawyerstars.com" target="_blank">上海星瀚律师事务所</a> &copy; 2010-2013</div>
			<nav>
				<?wp_nav_menu(array('menu'=>'底部导航','menu_class'=>'foot','container'=>false,'depth'=>1))?>
			</nav>
		</section>
	</footer>
<?wp_footer()?>
</body>
</html>