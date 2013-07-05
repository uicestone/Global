	<footer>
		<div class="service">
			<section>
				<div class="widget column-1 service">
					<h2>服务项目</h2>
					<div class="service-content">
						<ul class="column-4-1">
							<h3><a href="/category/eb5移民/流程与时间/" target="_blank">EB5移民</a></h3>
							<?query_posts('category_name=流程与时间&posts_per_page=5')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-4-1">
							<h3><a href="/category/services/training/" target="_blank">L1移民</a></h3>
							<?query_posts('category_name=程序介绍&posts_per_page=5')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-4-1">
							<h3><a href="/category/services/cooperation" target="_blank">亲属移民</a></h3>
							<?query_posts('category_name=案例介绍&posts_per_page=5')?>
							<?while(have_posts()):the_post();?>
							<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
							<?endwhile;?>
						</ul>
						<ul class="column-4-1">
							<h3><a href="/category/services/supplement/" target="_blank">后续服务</a></h3>
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