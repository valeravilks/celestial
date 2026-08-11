<?php
/**
 * Title: Hero Header Image
 * Slug: celestial-fse-theme/hero-header-image
 * Categories: banner
 * Text Domain: celestial-fse-theme
 */

$image = get_theme_file_uri('assets/images/bg.jpg');
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Ideas Made Real', 'celestial-fse-theme' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'We turn ambitious ideas into thoughtful, meaningful experiences that connect with people and create lasting value. From the first concept to the final result, we bring clarity, creativity, and purpose to every step.', 'celestial-fse-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'celestial-fse-theme' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'celestial-fse-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"width":"1200px","height":"auto","aspectRatio":"1.7777777777777777","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url($image); ?>" alt="" class="" style="aspect-ratio:1.7777777777777777;object-fit:cover;width:1200px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
