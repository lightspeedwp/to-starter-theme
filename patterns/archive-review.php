<?php
/**
 * Title: archive-review
 * Slug: to-starter-theme/archive-review
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"secondary-900","isUserOverlayColor":true,"minHeight":300,"minHeightUnit":"px","metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-900-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default"><!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large","layout":{"type":"default"}} -->
<div class="wp-block-group has-large-font-size" style="font-style:normal;font-weight:600"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"breadcrumbs"} /-->

<!-- wp:group {"metadata":{"name":"Archive Content"},"align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-default" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":67,"query":{"perPage":6,"pages":0,"offset":0,"postType":"review","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-section-1" style="border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","align":"center"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/review-testominal-quote-mark-TO-tertiary-32px.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:post-title {"textAlign":"center"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"textAlign":"center","moreText":"\u003cstrong\u003eRead full review\u003c/strong\u003e","excerptLength":40} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query-pagination {"paginationArrow":"chevron","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p class="has-text-align-center">Unfortunately, there are no reviews listed at the moment. Please check back soon as we regularly update our offerings.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->