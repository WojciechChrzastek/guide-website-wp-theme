<?php
/**
 * The template for displaying the 404 template in the guide theme.
 *
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">
	<h1>Page Not Found</h1>
	<h1>Page Not Found</h1>
	<h1>Page Not Found</h1>
	<h1>Page Not Found</h1>
	<h1>Page Not Found</h1>
	<h1>Page Not Found</h1>
	<h1>Page Not Found</h1>

		<h1 class="entry-title"><?php _e( 'Page Not Found'); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'guide' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php
get_footer();
