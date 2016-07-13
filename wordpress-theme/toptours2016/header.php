<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) );

	?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<!--<link href="/blog/wp-content/themes/twentyeleven/style.css" rel="stylesheet" type="text/css">-->

	<link rel="icon" href="/favicon.png" type="image/png">
	<link rel="shortcut icon" href="/favicon.ico" type="img/x-icon">

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/css/style.css" rel="stylesheet" type="text/css">
	<link href="/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="/css/animate.css" rel="stylesheet" type="text/css">
	<link href="/css/last.css" rel="stylesheet" type="text/css">

	<link href="/blog/wp-content/themes/toptours2016/style.css" rel="stylesheet" type="text/css">

	<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

	<script type="text/javascript" src="/js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/js/jquery.isotope.js"></script>
	<script type="text/javascript" src="/js/wow.js"></script>
	<script type="text/javascript" src="/js/classie.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!--[if lt IE 9]>
	    <script src="/js/respond-1.1.0.min.js"></script>
	    <script src="/js/html5shiv.js"></script>
	    <script src="/js/html5element.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>