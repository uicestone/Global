<?php
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_script('simpleFAQ', get_template_directory_uri() . '/scripts/jquery.simpleFAQ-0.7.min.js', array('jquery'), '0.7');
});
get_header();
?>
<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
		<div class="wraper">
			<h2>FAQ<span>We collected the most frequently asked questions below, enjoy!!</span></h2>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Pages</a></li>
				<li>FAQ</li>
			</ul>
		</div>
	</div>
	<!-- /top_title -->
	<div class="wraper">
		<!-- /faq_list -->
		<div class="faq_list">
			<ul class="filter">
				<li class="active all"><a href="#all">All</a></li>
				<li class="business"><a href="#business">Business</a></li>
				<li class="technical"><a href="#technical">Technical</a></li>
				<li class="miscellaneous"><a href="#miscellaneous">Miscellaneous</a></li>
			</ul>
			<ul id="faq">
				<li class="all business">
					<p class="question">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci?</p>
					<div class="answer">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at auctor purus. Curabitur at ligula nunc. Sed id mattis mi. Integer velit enim, scelerisque at iaculis ut, aliquet eget arcu. Proin ultrices augue nec quam eleifend sed venenatis odio iaculis. In mollis risus et orci luctus venenatis ornare nibh dapse ibus. Sed vehicula placerat orci, eget vestibulum eros tincidunt vitae. Fusce sollicitudin nisl eu ipsum dapibus fringilla. Ut quis erat ligula, vel pellente sque mi. Donec hendrerit adipiscing pellentesque.</p>
						<p>Sed augue dolor, cursus tempor gravida in, egestas vel turpis. Suspendisse potenti. Vestibulum at arcu id erat condimentum semper in ac odio. Donec nsi quam, adipiscing sed pulvinar vitae, pellentesque id mauris. Praesent tempus mauris quis ante euismod id elementum dolor pulvinar. Quisque et orci tortor. Donec cursus porttitor nulla, in ornare mauris aliquam non. Ut placerat felis in leo pellentesque fringilla. Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia Curae; Praesent ut tempor orci. Aliquam erat volutpat. Mauris magna lectus, fermentum vel lacinia sit amet, volutpat at ipsum. Fusce ut ligula orci.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui est, vehicula volutpat mattis eget, pretium in nibh. Suspendisse congue varius sagittis. Proin massa velit, mollis a cursus quis, sodales nec ligula. Proin vitae libero ut lacus lacinia consequat et ut tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget elit lacus. Nullam vel risus quis urna pulvinar dignissim vitae id leo. Ut pellentesque hendrerit est vel tempor.</p>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sit amet venenatis ipsum. Cras nec ornare justo. Cras blandit vehicula nulla sed tristique. Phasellus mattis posuere congue. Sed a velit eros. Sed eros leo, aliquam ac scelerisque non, aliquet at sem. Sed sagittis eleifend odio vel lobortis. Phasellus pulvinar pulvinar neque in laoreet. Aenean eget ipsum erat, quis accumsan ante.</p>
						<p>Vivamus eros lectus, tincidunt id lobortis sit amet, egestas ac nibh. Vestibulum neque erat, imperdiet eget mattis sit amet, tincidunt id leo. Quisque ultrices porttitor dolor, vel suscipit ante mattis condimentum. Nullam suscipit est sed tellus accumsan facilisis. Suspendisse et ultricies est. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Aliquam vulputate lorem adipiscing libero eleifend in euismod dui convallis.</p>
					</div>
				</li>
				<li class="all miscellaneous">
					<p class="question">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci?</p>
					<div class="answer">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at auctor purus. Curabitur at ligula nunc. Sed id mattis mi. Integer velit enim, scelerisque at iaculis ut, aliquet eget arcu. Proin ultrices augue nec quam eleifend sed venenatis odio iaculis. In mollis risus et orci luctus venenatis ornare nibh dapse ibus. Sed vehicula placerat orci, eget vestibulum eros tincidunt vitae. Fusce sollicitudin nisl eu ipsum dapibus fringilla. Ut quis erat ligula, vel pellente sque mi. Donec hendrerit adipiscing pellentesque.</p>
						<p>Sed augue dolor, cursus tempor gravida in, egestas vel turpis. Suspendisse potenti. Vestibulum at arcu id erat condimentum semper in ac odio. Donec nsi quam, adipiscing sed pulvinar vitae, pellentesque id mauris. Praesent tempus mauris quis ante euismod id elementum dolor pulvinar. Quisque et orci tortor. Donec cursus porttitor nulla, in ornare mauris aliquam non. Ut placerat felis in leo pellentesque fringilla. Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia Curae; Praesent ut tempor orci. Aliquam erat volutpat. Mauris magna lectus, fermentum vel lacinia sit amet, volutpat at ipsum. Fusce ut ligula orci.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui est, vehicula volutpat mattis eget, pretium in nibh. Suspendisse congue varius sagittis. Proin massa velit, mollis a cursus quis, sodales nec ligula. Proin vitae libero ut lacus lacinia consequat et ut tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget elit lacus. Nullam vel risus quis urna pulvinar dignissim vitae id leo. Ut pellentesque hendrerit est vel tempor.</p>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sit amet venenatis ipsum. Cras nec ornare justo. Cras blandit vehicula nulla sed tristique. Phasellus mattis posuere congue. Sed a velit eros. Sed eros leo, aliquam ac scelerisque non, aliquet at sem. Sed sagittis eleifend odio vel lobortis. Phasellus pulvinar pulvinar neque in laoreet. Aenean eget ipsum erat, quis accumsan ante.</p>
						<p>Vivamus eros lectus, tincidunt id lobortis sit amet, egestas ac nibh. Vestibulum neque erat, imperdiet eget mattis sit amet, tincidunt id leo. Quisque ultrices porttitor dolor, vel suscipit ante mattis condimentum. Nullam suscipit est sed tellus accumsan facilisis. Suspendisse et ultricies est. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Aliquam vulputate lorem adipiscing libero eleifend in euismod dui convallis.</p>
					</div>
				</li>
				<li class="all business">
					<p class="question">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci?</p>
					<div class="answer">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at auctor purus. Curabitur at ligula nunc. Sed id mattis mi. Integer velit enim, scelerisque at iaculis ut, aliquet eget arcu. Proin ultrices augue nec quam eleifend sed venenatis odio iaculis. In mollis risus et orci luctus venenatis ornare nibh dapse ibus. Sed vehicula placerat orci, eget vestibulum eros tincidunt vitae. Fusce sollicitudin nisl eu ipsum dapibus fringilla. Ut quis erat ligula, vel pellente sque mi. Donec hendrerit adipiscing pellentesque.</p>
						<p>Sed augue dolor, cursus tempor gravida in, egestas vel turpis. Suspendisse potenti. Vestibulum at arcu id erat condimentum semper in ac odio. Donec nsi quam, adipiscing sed pulvinar vitae, pellentesque id mauris. Praesent tempus mauris quis ante euismod id elementum dolor pulvinar. Quisque et orci tortor. Donec cursus porttitor nulla, in ornare mauris aliquam non. Ut placerat felis in leo pellentesque fringilla. Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia Curae; Praesent ut tempor orci. Aliquam erat volutpat. Mauris magna lectus, fermentum vel lacinia sit amet, volutpat at ipsum. Fusce ut ligula orci.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui est, vehicula volutpat mattis eget, pretium in nibh. Suspendisse congue varius sagittis. Proin massa velit, mollis a cursus quis, sodales nec ligula. Proin vitae libero ut lacus lacinia consequat et ut tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget elit lacus. Nullam vel risus quis urna pulvinar dignissim vitae id leo. Ut pellentesque hendrerit est vel tempor.</p>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sit amet venenatis ipsum. Cras nec ornare justo. Cras blandit vehicula nulla sed tristique. Phasellus mattis posuere congue. Sed a velit eros. Sed eros leo, aliquam ac scelerisque non, aliquet at sem. Sed sagittis eleifend odio vel lobortis. Phasellus pulvinar pulvinar neque in laoreet. Aenean eget ipsum erat, quis accumsan ante.</p>
						<p>Vivamus eros lectus, tincidunt id lobortis sit amet, egestas ac nibh. Vestibulum neque erat, imperdiet eget mattis sit amet, tincidunt id leo. Quisque ultrices porttitor dolor, vel suscipit ante mattis condimentum. Nullam suscipit est sed tellus accumsan facilisis. Suspendisse et ultricies est. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Aliquam vulputate lorem adipiscing libero eleifend in euismod dui convallis.</p>
					</div>
				</li>
				<li class="all miscellaneous">
					<p class="question">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci?</p>
					<div class="answer">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at auctor purus. Curabitur at ligula nunc. Sed id mattis mi. Integer velit enim, scelerisque at iaculis ut, aliquet eget arcu. Proin ultrices augue nec quam eleifend sed venenatis odio iaculis. In mollis risus et orci luctus venenatis ornare nibh dapse ibus. Sed vehicula placerat orci, eget vestibulum eros tincidunt vitae. Fusce sollicitudin nisl eu ipsum dapibus fringilla. Ut quis erat ligula, vel pellente sque mi. Donec hendrerit adipiscing pellentesque.</p>
						<p>Sed augue dolor, cursus tempor gravida in, egestas vel turpis. Suspendisse potenti. Vestibulum at arcu id erat condimentum semper in ac odio. Donec nsi quam, adipiscing sed pulvinar vitae, pellentesque id mauris. Praesent tempus mauris quis ante euismod id elementum dolor pulvinar. Quisque et orci tortor. Donec cursus porttitor nulla, in ornare mauris aliquam non. Ut placerat felis in leo pellentesque fringilla. Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia Curae; Praesent ut tempor orci. Aliquam erat volutpat. Mauris magna lectus, fermentum vel lacinia sit amet, volutpat at ipsum. Fusce ut ligula orci.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui est, vehicula volutpat mattis eget, pretium in nibh. Suspendisse congue varius sagittis. Proin massa velit, mollis a cursus quis, sodales nec ligula. Proin vitae libero ut lacus lacinia consequat et ut tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget elit lacus. Nullam vel risus quis urna pulvinar dignissim vitae id leo. Ut pellentesque hendrerit est vel tempor.</p>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sit amet venenatis ipsum. Cras nec ornare justo. Cras blandit vehicula nulla sed tristique. Phasellus mattis posuere congue. Sed a velit eros. Sed eros leo, aliquam ac scelerisque non, aliquet at sem. Sed sagittis eleifend odio vel lobortis. Phasellus pulvinar pulvinar neque in laoreet. Aenean eget ipsum erat, quis accumsan ante.</p>
						<p>Vivamus eros lectus, tincidunt id lobortis sit amet, egestas ac nibh. Vestibulum neque erat, imperdiet eget mattis sit amet, tincidunt id leo. Quisque ultrices porttitor dolor, vel suscipit ante mattis condimentum. Nullam suscipit est sed tellus accumsan facilisis. Suspendisse et ultricies est. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Aliquam vulputate lorem adipiscing libero eleifend in euismod dui convallis.</p>
					</div>
				</li>
				<li class="all technical">
					<p class="question">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci?</p>
					<div class="answer">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at auctor purus. Curabitur at ligula nunc. Sed id mattis mi. Integer velit enim, scelerisque at iaculis ut, aliquet eget arcu. Proin ultrices augue nec quam eleifend sed venenatis odio iaculis. In mollis risus et orci luctus venenatis ornare nibh dapse ibus. Sed vehicula placerat orci, eget vestibulum eros tincidunt vitae. Fusce sollicitudin nisl eu ipsum dapibus fringilla. Ut quis erat ligula, vel pellente sque mi. Donec hendrerit adipiscing pellentesque.</p>
						<p>Sed augue dolor, cursus tempor gravida in, egestas vel turpis. Suspendisse potenti. Vestibulum at arcu id erat condimentum semper in ac odio. Donec nsi quam, adipiscing sed pulvinar vitae, pellentesque id mauris. Praesent tempus mauris quis ante euismod id elementum dolor pulvinar. Quisque et orci tortor. Donec cursus porttitor nulla, in ornare mauris aliquam non. Ut placerat felis in leo pellentesque fringilla. Vestibulum ante ipsum primis in fauci bus orci luctus et ultrices posuere cubilia Curae; Praesent ut tempor orci. Aliquam erat volutpat. Mauris magna lectus, fermentum vel lacinia sit amet, volutpat at ipsum. Fusce ut ligula orci.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dui est, vehicula volutpat mattis eget, pretium in nibh. Suspendisse congue varius sagittis. Proin massa velit, mollis a cursus quis, sodales nec ligula. Proin vitae libero ut lacus lacinia consequat et ut tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget elit lacus. Nullam vel risus quis urna pulvinar dignissim vitae id leo. Ut pellentesque hendrerit est vel tempor.</p>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sit amet venenatis ipsum. Cras nec ornare justo. Cras blandit vehicula nulla sed tristique. Phasellus mattis posuere congue. Sed a velit eros. Sed eros leo, aliquam ac scelerisque non, aliquet at sem. Sed sagittis eleifend odio vel lobortis. Phasellus pulvinar pulvinar neque in laoreet. Aenean eget ipsum erat, quis accumsan ante.</p>
						<p>Vivamus eros lectus, tincidunt id lobortis sit amet, egestas ac nibh. Vestibulum neque erat, imperdiet eget mattis sit amet, tincidunt id leo. Quisque ultrices porttitor dolor, vel suscipit ante mattis condimentum. Nullam suscipit est sed tellus accumsan facilisis. Suspendisse et ultricies est. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Aliquam vulputate lorem adipiscing libero eleifend in euismod dui convallis.</p>
					</div>
				</li>
			</ul>
		</div>
		<!-- /faq_list -->


	</div>
</div>

<script>
jQuery(function($){
	$('#faq').simpleFAQ();
});
</script>

<?php get_footer(); ?>
