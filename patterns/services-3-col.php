<?php
/**
 * Title: Services, 3 columns
 * Slug: to-starter-theme/services-3-col
 * Categories: call-to-action, banner, services
 * Description: Three columns with images and text to showcase services.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since to-starter-theme 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"align":"wide"} -->
	<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Our services', 'to-starter-theme' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
			<figure class="wp-block-image size-full" style="margin-bottom:24px">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/campanula-alliariifolia-flower.webp" alt="<?php esc_attr_e( 'Image for service', 'to-starter-theme' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Collect', 'to-starter-theme' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'to-starter-theme' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
			<figure class="wp-block-image size-full" style="margin-bottom:24px">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/delphinium-flowers.webp" alt="<?php esc_attr_e( 'Image for service', 'to-starter-theme' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Assemble', 'to-starter-theme' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'to-starter-theme' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
			<figure class="wp-block-image size-full" style="margin-bottom:24px">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star-thristle-flower.webp" alt="<?php esc_attr_e( 'Image for service', 'to-starter-theme' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Deliver', 'to-starter-theme' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'to-starter-theme' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
