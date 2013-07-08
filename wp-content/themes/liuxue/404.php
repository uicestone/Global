<?php
$post_title = substr($_SERVER['REQUEST_URI'],1);
$postid = $wpdb->get_var("SELECT post_content FROM $wpdb->posts WHERE post_type='post_migrate' AND post_title = '$post_title'");
if($postid){
	$postid = str_replace(' ', '-', $postid);
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: /'.urlencode($postid));
}else{
	header('Location: /');
}
?>
