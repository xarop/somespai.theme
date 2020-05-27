<?php
/**
 * Customises the stock Storefront homepage template to include the sidebar and the somespai_before_homepage_content hook.
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div class="somespai-featured-products site-main">
		<?php do_action( 'somespai_before_homepage_content' ); ?>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php do_action( 'homepage' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php do_action( 'storefront_sidebar' ); ?>

<?php get_footer(); ?>
