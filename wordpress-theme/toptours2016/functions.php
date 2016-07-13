<?php
add_action( 'init', 'toptours_init' );
function toptours_init() {
	define(PATH_PREFIX, '/home/toptoursinitaly/toptoursinitaly.net/');
	require_once (ABSPATH.'/wp-content/themes/twentyeleven/functions.php');
}
?>