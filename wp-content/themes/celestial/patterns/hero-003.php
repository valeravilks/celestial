<?php
/**
 * Title: Hero 003
 * Slug: celestial/hero-003
 * Categories: banner
 */
$img_bg = get_theme_file_uri('assets/images/bg-2.jpeg');
$logo = get_theme_file_uri('assets/images/celestial-logo-light.svg');
?>
<!-- wp:cover {"url":"<?php echo esc_url($img_bg); ?>","dimRatio":50,"customOverlayColor":"#101e1f","isUserOverlayColor":false,"minHeightUnit":"vh","sizeSlug":"large","metadata":{"name":"Hero 003","patternName":"celestial/hero-003"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|0","left":"var:preset|spacing|0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url($img_bg); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#101e1f"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"70vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group" style="min-height:70vh"><!-- wp:template-part {"slug":"header","theme":"celestial","area":"header"} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
			<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group"><!-- wp:image {"width":"206px","height":"auto","aspectRatio":"4.736939492999445","sizeSlug":"large","linkDestination":"none","align":"center","className":"is-style-default"} -->
					<figure class="wp-block-image aligncenter size-large is-resized is-style-default"><img src="<?php echo esc_url($logo); ?>" alt="" style="aspect-ratio:4.736939492999445;width:206px;height:auto"/></figure>
					<!-- /wp:image -->

					<!-- wp:separator -->
					<hr class="wp-block-separator has-alpha-channel-opacity"/>
					<!-- /wp:separator -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
					<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}}} -->
						<h1 class="wp-block-heading has-text-align-center">A solid foundation for modern WordPress projects</h1>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
						<p class="has-text-align-center">A lightweight WordPress foundation built entirely with native tools.</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
						<div class="wp-block-buttons"><!-- wp:button -->
							<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://github.com/valeravilks/celestial/">Get Started</a></div>
							<!-- /wp:button --></div>
						<!-- /wp:buttons --></div>
					<!-- /wp:group --></div>
				<!-- /wp:group --></div>
			<!-- /wp:group --></div>
		<!-- /wp:group --></div></div>
<!-- /wp:cover -->
