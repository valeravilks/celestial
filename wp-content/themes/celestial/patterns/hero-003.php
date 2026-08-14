<?php
/**
 * Title: Hero 003
 * Slug: celestial/hero-003
 * Categories: banner
 */
$img_bg = get_theme_file_uri('assets/images/bg-2.jpeg');
$logo = get_theme_file_uri('assets/images/celestial-logo-light.svg');
?>
<!-- wp:cover {"url":"<?php echo esc_url($img_bg); ?>","dimRatio":50,"customOverlayColor":"#101e1f","isUserOverlayColor":false,"minHeightUnit":"vh","sizeSlug":"large","metadata":{"categories":["header"],"name":"Hero 003"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|0","left":"var:preset|spacing|0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url($img_bg); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#101e1f"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:100vh"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4.736939492999445","sizeSlug":"large","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-large is-style-default"><img src="<?php echo esc_url($logo); ?>" alt="" style="aspect-ratio:4.736939492999445"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}}} -->
<h1 class="wp-block-heading has-text-align-center">A solid foundation for modern WordPress projects</h1>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Github</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
