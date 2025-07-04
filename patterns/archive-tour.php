<?php
/**
 * Title: archive-tour
 * Slug: to-starter-theme/archive-tour
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"secondary-900","isUserOverlayColor":true,"minHeight":300,"minHeightUnit":"px","metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-900-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}},"border":{"bottom":{"color":"var:preset|color|primary-200","width":"2px"},"top":[],"right":[],"left":[]},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large","layout":{"type":"default"}} -->
<div class="wp-block-group has-large-font-size" style="border-bottom-color:var(--wp--preset--color--primary-200);border-bottom-width:2px;padding-top:10px;padding-bottom:10px;font-style:normal;font-weight:600"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"tagline"}}}}} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"breadcrumbs","area":"uncategorized"} /-->

<!-- wp:group {"metadata":{"name":"Archive Description"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Content"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Browse through our extensive collection of tours and find the perfect journey for your next adventure. Whether you\'re drawn to historical explorations, nature-filled escapes, or vibrant cultural experiences, our range of tours has something to suit every interest. Start planning your next memorable trip with options tailored to every type of traveller.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Archive Content"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":1,"query":{"perPage":"9","pages":"3","offset":"0","postType":"tour","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"lock":{"move":false,"remove":false},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"metadata":{"name":"Tour Card"},"className":"is-style-section-1","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-1"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","linkTarget":"_blank","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->

<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Tour Title"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"dimensions":{"minHeight":"3rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:3rem;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Tour Information"},"style":{"border":{"top":{"color":"var:preset|color|primary","width":"2px"},"right":[],"bottom":{"color":"var:preset|color|primary","width":"2px"},"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:2px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Price"},"align":"wide","className":"lsx-price-wrapper","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide lsx-price-wrapper"><!-- wp:paragraph {"className":"has-x-small-font-size"} -->
<p class="has-x-small-font-size"><strong>From:</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"lsx/post-meta","args":{"key":"price"}}}},"className":"amount has-primary-color has-text-color has-link-color"} -->
<p class="amount has-primary-color has-text-color has-link-color"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Duration"},"className":"lsx-duration-wrapper","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group lsx-duration-wrapper"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/duration.png" alt="" style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px"}}}} -->
<p style="padding-top:2px;padding-bottom:2px"><strong>Duration:</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"lsx/post-meta","args":{"key":"duration"}}}},"className":"is-style-post-terms-1","style":{"spacing":{"padding":{"top":"2px","bottom":"2px"}}}} -->
<p class="is-style-post-terms-1" style="padding-top:2px;padding-bottom:2px"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"has-primary-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-700"}}},"spacing":{"padding":{"top":"2px","bottom":"2px"}}},"textColor":"primary-700"} -->
<p class="has-primary-color has-text-color has-link-color has-primary-700-color" style="padding-top:2px;padding-bottom:2px">Days</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"100px"},"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/travel-styles.png" alt="" style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="padding-top:2px;padding-bottom:2px"><strong>Travel Styles:</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"travel-style","className":"is-style-post-terms-1","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{":hover":{"color":{"text":"var:preset|color|primary-900"}}}}}},"fontFamily":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Tour Text Content"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":25,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","width":100,"metadata":{"name":"Permalink"},"className":"lsx-to-link permalink"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 lsx-to-link permalink"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#permalink">View More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p class="has-text-align-center">Unfortunately, there are no tours listed at the moment. Please check back soon as we regularly update our offerings.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->