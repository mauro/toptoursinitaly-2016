<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="topbar" class="wow fadeInDown">
	    <h3>Top Tours In Italy by Nick Solipaca</h3>
	</div>

<?php while ( have_posts() ) : the_post(); ?>

<?php 
	if (has_post_thumbnail( $post->ID ) ):
		$header_bg_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$header_style = 'style="background-image: url(\''.$header_bg_image_url[0].'\')"';
 	endif;
?>

<header id="page-header">
	<div class="header-image animated fadeInDown delay-01s" <?php echo $header_style; ?>></div>
	<h1 class="animated fadeInDown delay-05s">
		<?php the_title(); ?>
	</h1>
</header>
<?php
    include (PATH_PREFIX.'partials/nav-pages.php');
?>
<div id="page" class="hfeed">
	<div id="main">

		<div id="primary">
			<div id="content" role="main">

					<?php get_template_part( 'content-single', get_post_format() ); ?>

					<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->

					<?php comments_template( '', true ); ?>

				

			</div><!-- #content -->
		</div><!-- #primary -->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>