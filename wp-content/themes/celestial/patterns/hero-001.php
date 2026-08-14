<?php
/**
 * Title: Hero 001
 * Slug: celestial/hero-001
 * Categories: banner
 * Text Domain: celestial
 */

$image = get_theme_file_uri('assets/images/bg.jpg');
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Celestial', 'celestial' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Celestial combines a lightweight block theme, reusable patterns, design tokens, and a structured core plugin—giving you a clean starting point without locking the project into a heavy framework.', 'celestial' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'celestial' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'celestial' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"width":"1200px","height":"auto","aspectRatio":"1.7777777777777777","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url($image); ?>" alt="" class="" style="aspect-ratio:1.7777777777777777;object-fit:cover;width:1200px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
