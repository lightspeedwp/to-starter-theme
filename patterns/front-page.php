<?php
/**
 * Title: front-page
 * Slug: to-starter-theme/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-hero-banner-image.png","dimRatio":50,"isUserOverlayColor":true,"minHeight":600,"metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;min-height:600px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-hero-banner-image.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Tour Operator Demo</h1>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"base"} -->
<hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:paragraph {"align":"center","metadata":{"name":"Tagline"}} -->
<p class="has-text-align-center">A demo showcasing our Tour Operator plugin and child theme</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Why Choose Us"},"align":"full","className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"var:preset|spacing|small","left":"0","right":"0"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--small);padding-left:0"><!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Why choose us for your travel needs?</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","align":"center"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/travel-TO-why-us-section-icon-primary-60px.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Travel is our passion</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis ligula sed ultricies condimentum. Praesent et neque sed tellus gravida ornare ac sed justo. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","align":"center"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/get-the-trip-TO-icon-primary-60px.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">The trip you really want</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis ligula sed ultricies condimentum. Praesent et neque sed tellus gravida ornare ac sed justo. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-default"} -->
<div class="wp-block-column is-style-default"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","align":"center"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/expertise-guidence-TO-icon-primary-60px.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Expertise and guidance</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sagittis ligula sed ultricies condimentum. Praesent et neque sed tellus gravida ornare ac sed justo. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Explore Our Destinations"},"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Explore our destinations</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Destinations"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-botswana.png","dimRatio":0,"customOverlayColor":"#5a5a5a","isUserOverlayColor":true,"minHeight":280,"minHeightUnit":"px","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"16px"}},"linkUrl":"https://tourpress.pro/destination/botswana/"} -->
<a href="https://tourpress.pro/destination/botswana/" target="_self"><div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:280px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-botswana.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#5a5a5a"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"center-vertically","style":{"spacing":{"padding":{"top":"5px","bottom":"5px"}},"color":{"gradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group center-vertically has-background" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%);padding-top:5px;padding-bottom:5px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary-400"}}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color"><a href="https://tourpress.pro/destination/botswana/">Botswana</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-kenya.png","dimRatio":0,"customOverlayColor":"#5a5a5a","isUserOverlayColor":true,"minHeight":280,"minHeightUnit":"px","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"linkUrl":"https://tourpress.pro/destination/kenya/"} -->
<a href="https://tourpress.pro/destination/kenya/" target="_self"><div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:280px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-kenya.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#5a5a5a"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"center-vertically","style":{"spacing":{"padding":{"top":"5px","bottom":"5px"}},"color":{"gradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group center-vertically has-background" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%);padding-top:5px;padding-bottom:5px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary-400"}}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color"><a href="https://tourpress.pro/destination/kenya/">Kenya</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-tanzania.png","dimRatio":0,"customOverlayColor":"#5a5a5a","isUserOverlayColor":true,"minHeight":280,"minHeightUnit":"px","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"linkUrl":"https://tourpress.pro/destination/tanzania/"} -->
<a href="https://tourpress.pro/destination/tanzania/" target="_self"><div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:280px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-tanzania.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#5a5a5a"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"center-vertically","style":{"spacing":{"padding":{"top":"5px","bottom":"5px"}},"color":{"gradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group center-vertically has-background" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%);padding-top:5px;padding-bottom:5px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary-400"}}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color"><a href="https://tourpress.pro/destination/tanzania/">Tanzania</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-zambia.png","dimRatio":0,"customOverlayColor":"#5a5a5a","isUserOverlayColor":true,"minHeight":280,"minHeightUnit":"px","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"linkUrl":"https://tourpress.pro/destination/zambia/"} -->
<a href="https://tourpress.pro/destination/zambia/" target="_self"><div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:280px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-zambia.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#5a5a5a"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"center-vertically","style":{"spacing":{"padding":{"top":"5px","bottom":"5px"}},"color":{"gradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group center-vertically has-background" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%);padding-top:5px;padding-bottom:5px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary-400"}}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color"><a href="https://tourpress.pro/destination/zambia/">Zambia</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-south-africa.png","dimRatio":0,"customOverlayColor":"#5a5a5a","isUserOverlayColor":true,"minHeight":280,"minHeightUnit":"px","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"linkUrl":"https://tourpress.pro/destination/south-africa/"} -->
<a href="https://tourpress.pro/destination/south-africa/" target="_self"><div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:280px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-south-africa.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#5a5a5a"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"center-vertically","style":{"spacing":{"padding":{"top":"5px","bottom":"5px"}},"color":{"gradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group center-vertically has-background" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%);padding-top:5px;padding-bottom:5px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary-400"}}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color"><a href="https://tourpress.pro/destination/south-africa/">South Africa</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-all-destinations.png","dimRatio":0,"customOverlayColor":"#5a5a5a","isUserOverlayColor":true,"minHeight":280,"minHeightUnit":"px","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"linkUrl":"https://tourpress.pro/destinations/"} -->
<a href="https://tourpress.pro/destinations/" target="_self"><div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:280px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-destinations-all-destinations.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#5a5a5a"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"center-vertically","style":{"spacing":{"padding":{"top":"5px","bottom":"5px"}},"color":{"gradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group center-vertically has-background" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%);padding-top:5px;padding-bottom:5px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary-400"}}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color"><a href="https://tourpress.pro/destinations/">View All Destinations</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"What's Your Travel Style?"},"align":"full","className":"is-style-section-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-1" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Whats your travel style?</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-travel-styles-family.png","dimRatio":90,"isUserOverlayColor":true,"minHeight":370,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 47%,rgb(0,0,0) 92%)","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"linkUrl":"/travel-style/family"} -->
<a href="/travel-style/family" target="_self"><div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:370px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-travel-styles-family.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 47%,rgb(0,0,0) 92%)"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"center-vertically","style":{"spacing":{"padding":{"top":"5px","bottom":"5px"}},"color":{"gradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%)"}}} -->
<p class="has-text-align-center center-vertically has-background" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%);padding-top:5px;padding-bottom:5px"><a href="/travel-style/family">Family</a></p>
<!-- /wp:paragraph --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-travel-styles-self-drive.png","dimRatio":70,"isUserOverlayColor":true,"minHeight":370,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 59%,rgb(0,0,0) 100%)","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"linkUrl":"/travel-style/self-drive"} -->
<a href="/travel-style/self-drive" target="_self"><div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:370px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-travel-styles-self-drive.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 59%,rgb(0,0,0) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"center-vertically","style":{"spacing":{"padding":{"top":"5px","bottom":"5px"}},"color":{"gradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%)"}}} -->
<p class="has-text-align-center center-vertically has-background" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%);padding-top:5px;padding-bottom:5px"><a href="/travel-style/self-drive">Self-Drive</a></p>
<!-- /wp:paragraph --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-travel-styles-wildlife.png","dimRatio":70,"isUserOverlayColor":true,"minHeight":370,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 59%,rgb(0,0,0) 100%)","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"}},"linkUrl":"/travel-style/wildlife"} -->
<a href="/travel-style/wildlife" target="_self"><div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:370px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-travel-styles-wildlife.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 59%,rgb(0,0,0) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","className":"center-vertically","style":{"spacing":{"padding":{"top":"5px","bottom":"5px"}},"color":{"gradient":"linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%)"}}} -->
<p class="has-text-align-center center-vertically has-background" style="background:linear-gradient(180deg,rgba(7,146,227,0) 0%,rgba(0,0,0,0.74) 42%);padding-top:5px;padding-bottom:5px"><a href="/travel-style/wildlife">Wildlife</a></p>
<!-- /wp:paragraph --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-travel-styles-luxury.png","dimRatio":70,"isUserOverlayColor":true,"minHeight":370,"minHeightUnit":"px","customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 59%,rgb(0,0,0) 100%)","contentPosition":"bottom center","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0","right":"0"}},"border":{"radius":"8px"}},"linkUrl":"/travel-style/luxury-resort"} -->
<a href="/travel-style/luxury-resort" target="_self"><div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:8px;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0;min-height:370px"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-home-travel-styles-luxury.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 59%,rgb(0,0,0) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary-400"}}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color"><a href="/travel-style/luxury-resort">Luxury Resorts</a> </p>
<!-- /wp:paragraph --></div></div></a>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="/travel-styles">View All travel styles</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Featured Tours"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Featured Tours</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":"1","offset":"0","postType":"tour","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"lock":{"move":false,"remove":false},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"21rem"}} -->
<!-- wp:group {"metadata":{"name":"Tour Card"},"className":"is-style-section-1","style":{"border":{"radius":"8px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-1" style="border-radius:8px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","linkTarget":"_blank","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->

<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"8px","bottomRight":"8px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-left-radius:8px;border-bottom-right-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Tour Title"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"dimensions":{"minHeight":"3rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:3rem;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Tour Information"},"style":{"border":{"top":{"color":"var:preset|color|primary","width":"2px"},"right":[],"bottom":{"color":"var:preset|color|primary","width":"2px"},"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:2px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Price"},"className":"lsx-duration-wrapper","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group lsx-duration-wrapper"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","height":"auto","sizeSlug":"large","metadata":{"name":"From Price Icon"}} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/from-price-TO-icon-black-20px-1.png" alt="" style="width:20px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px"}}}} -->
<p style="padding-top:2px;padding-bottom:2px"><strong>From:</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"name":"From Price"},"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><strong>price</strong></p>
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
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="/tours">View All tours</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-cta-image-option-2.png","dimRatio":50,"isUserOverlayColor":true,"contentPosition":"center right","metadata":{"name":"Cover CTA"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-right" style="margin-top:0;margin-bottom:0"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-cta-image-option-2.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"580px"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Our team of experts will take you wherever you want to go.</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button" href="/tours">View all our Tours</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Featured Accommodation"},"align":"full","className":"lsx-featured-accommodation-query-wrapper","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"primary-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lsx-featured-accommodation-query-wrapper has-primary-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Featured Accommodation</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":"1","offset":"0","postType":"accommodation","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"lock":{"move":false,"remove":false},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"21rem"}} -->
<!-- wp:group {"metadata":{"name":"Accommodation Card"},"className":"is-style-shadow-sm is-style-section-1","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadow-sm is-style-section-1" style="border-radius:8px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","linkTarget":"_blank","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} /-->

<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Accommodation Title"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"dimensions":{"minHeight":"3rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:3rem;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Accommodation Information"},"style":{"border":{"top":{"color":"var:preset|color|primary","width":"2px"},"right":[],"bottom":{"color":"var:preset|color|primary","width":"2px"},"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:2px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"lsx-duration-wrapper","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group lsx-duration-wrapper"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"__default":{"source":"core/pattern-overrides"}},"name":"From Price Icon"}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/unit-price.png" alt="" class="" style="object-fit:cover;width:20px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px"}}}} -->
<p style="padding-top:2px;padding-bottom:2px">From:</p>
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

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px"}}}} -->
<p style="padding-top:2px;padding-bottom:2px">Rooms:</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"lsx/post-meta","args":{"key":"number_of_rooms"}},"__default":{"source":"core/pattern-overrides"}},"name":"Number of Rooms"},"style":{"spacing":{"blockGap":"5px"},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"100px"},"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"__default":{"source":"core/pattern-overrides"}},"name":"Accommodation Type Icon"}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/unit-type.png" alt="" class="" style="object-fit:cover;width:20px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="padding-top:2px;padding-bottom:2px">Type:</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"accommodation-type","className":"is-style-post-terms-1","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{":hover":{"color":{"text":"var:preset|color|primary-900"}}}}}},"fontFamily":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Accommodation Text Content"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":25} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","width":100,"metadata":{"name":"Permalink"},"className":"lsx-to-link permalink"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 lsx-to-link permalink"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#permalink">View More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="/accommodation/">View All Accommodation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-cta-image-option-1.png","dimRatio":50,"isUserOverlayColor":true,"contentPosition":"center right","metadata":{"name":"Cover CTA"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-right" style="margin-top:0;margin-bottom:0"><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/TO-cta-image-option-1.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"580px"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Hand picked camps and lodges throughout the world</h3>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button" href="/accommodation">View all our Accommodation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary-900","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default has-secondary-900-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","className":"is-style-default","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide is-style-default"><!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary-200"} -->
<hr class="wp-block-separator has-text-color has-primary-200-color has-alpha-channel-opacity has-primary-200-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Reviews</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"primary-200"} -->
<hr class="wp-block-separator has-text-color has-primary-200-color has-alpha-channel-opacity has-primary-200-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","className":"is-style-text-subtitle"} -->
<p class="has-text-align-center is-style-text-subtitle">Read what our guests have to say...</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":67,"query":{"perPage":"2","pages":0,"offset":0,"postType":"review","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide"} -->
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
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-columns"} /-->