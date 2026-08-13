<?php
/**
 * Title: WordPress Native Toolchain
 * Slug: celestial/wordpress-native-toolchain
 * Categories: content
 * Text Domain: celestial
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-paragraph-subtitle"} -->
<p class="is-style-paragraph-subtitle"><?php esc_html_e( 'WordPress-native by design', 'celestial' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Built on the Official WordPress Toolchain', 'celestial' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Celestial stays close to the tools, APIs, and conventions maintained by the WordPress project. Each part has a clear role, without adding a proprietary framework layer that developers must learn and maintain.', 'celestial' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Block Theme and theme.json', 'celestial' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Templates, patterns, global styles, design tokens, and editor controls are defined through WordPress block-theme conventions.', 'celestial' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-link"} -->
<div class="wp-block-button is-style-button-link"><a class="wp-block-button__link wp-element-button" href="https://developer.wordpress.org/themes/global-settings-and-styles/introduction-to-theme-json/" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Theme documentation', 'celestial' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( '@wordpress/create-block', 'celestial' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'The officially supported scaffolding tool provides the standard starting structure for static, dynamic, and interactive custom blocks.', 'celestial' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-link"} -->
<div class="wp-block-button is-style-button-link"><a class="wp-block-button__link wp-element-button" href="https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Create Block documentation', 'celestial' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( '@wordpress packages', 'celestial' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Public packages provide the components and APIs used to build block-editor interfaces while keeping WordPress responsible for dependency loading.', 'celestial' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-link"} -->
<div class="wp-block-button is-style-button-link"><a class="wp-block-button__link wp-element-button" href="https://developer.wordpress.org/block-editor/reference-guides/packages/" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Package reference', 'celestial' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'wp-env', 'celestial' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'The official local environment runs WordPress in Docker from a project configuration, giving development and testing a repeatable setup.', 'celestial' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-link"} -->
<div class="wp-block-button is-style-button-link"><a class="wp-block-button__link wp-element-button" href="https://developer.wordpress.org/block-editor/getting-started/devenv/get-started-with-wp-env/" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'wp-env documentation', 'celestial' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
