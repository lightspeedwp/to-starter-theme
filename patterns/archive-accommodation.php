<?php
/**
 * Title: archive-accommodation
 * Slug: to-starter-theme/archive-accommodation
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

<!-- wp:group {"metadata":{"name":"Archive Description"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Discover a wide variety of accommodation options designed to suit every travellers needs and preferences. Whether you\'re seeking the indulgence of a five-star resort, the charm of a boutique hotel, or the simplicity of a rustic cabin, our collection has something for everyone. Each accommodation is carefully chosen to provide comfort, convenience, and a seamless blend with the local surroundings, ensuring that your stay is as memorable as the destinations themselves.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Archive Content"},"align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-default" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":1,"query":{"perPage":20,"pages":"","offset":"0","postType":"accommodation","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"lock":{"move":false,"remove":false},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"21rem"}} -->
<!-- wp:group {"metadata":{"name":"Accommodation Card"},"className":"is-style-shadow-sm is-style-section-1","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadow-sm is-style-section-1" style="border-radius:8px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","linkTarget":"_blank","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->

<!-- wp:group {"metadata":{"name":"Content"},"className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Accommodation Title"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"dimensions":{"minHeight":"3rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:3rem;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Accommodation Information"},"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"lsx-duration-wrapper","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group lsx-duration-wrapper"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"__default":{"source":"core/pattern-overrides"}},"name":"From Price Icon"}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/unit-price.png" alt="" class="" style="object-fit:cover;width:20px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>From:</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"lsx/post-meta","args":{"key":"price"}},"__default":{"source":"core/pattern-overrides"}},"name":"Price"},"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><strong>price</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"lsx-duration-wrapper","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group lsx-duration-wrapper"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","height":"auto","sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"__default":{"source":"core/pattern-overrides"}},"name":"Number of Rooms Icon"}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/rooms.png" alt="" class="" style="width:20px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Rooms:</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"lsx/post-meta","args":{"key":"number_of_rooms"}},"__default":{"source":"core/pattern-overrides"}},"name":"Number of Rooms"},"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"100px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"__default":{"source":"core/pattern-overrides"}},"name":"Accommodation Type Icon"}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/unit-type.png" alt="" class="" style="object-fit:cover;width:20px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Type:</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"accommodation-type","prefix":" ","className":"is-style-post-terms-1","style":{"elements":{"link":{"color":{":hover":{"color":{"text":"var:preset|color|primary-900"}}}}}},"fontFamily":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Accommodation Text Content"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":25,"className":"lsx-price-wrapper","style":{"spacing":{"blockGap":"10px","padding":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","width":100,"metadata":{"name":"Permalink"},"className":"lsx-to-link permalink"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 lsx-to-link permalink"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#permalink">View More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query-pagination {"paginationArrow":"chevron","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p class="has-text-align-center">Unfortunately, there is no accommodation listed at the moment. Please check back soon as we regularly update our offerings.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->