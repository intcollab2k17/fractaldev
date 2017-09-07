<?php
function styles_and_scripts() {
	$template_path = explode('wp-content', __dir__);
	$template_path = '/wp-content'.$template_path[1];

    wp_enqueue_style('responsive', $template_path.'/css/responsive.css');
}
add_action('wp_enqueue_scripts', 'styles_and_scripts');

function test_mail() {
	if(isset($_GET['testmail'])) {
		$testmail = mail('debugsterd@gmail.com', 'testmail', 'lorem ipsum dolor sit amet.');
		echo 'Test Mail Result: ' . ($testmail ? '<span style="color: green">Success</span>' : '<span style="color: red">Failed</span>');
		die;
	}
}
add_action('init', 'test_mail');