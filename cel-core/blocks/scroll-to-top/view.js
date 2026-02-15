/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

( () => {
	const btn = document.querySelector( '.wp-block-cel-scroll-to-top' );
	if ( ! btn ) {
		return;
	}

	function toggle() {
		btn.classList.toggle( 'active', window.scrollY > 200 );
	}

	window.addEventListener( 'scroll', toggle );
	btn.addEventListener( 'click', ( e ) => {
		e.preventDefault();
		window.scrollTo( { top: 0, behavior: 'smooth' } );
	} );
} )();
