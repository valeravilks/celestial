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

import Headroom from "headroom.js";

document.addEventListener('DOMContentLoaded', function() {
    // Select all smart header blocks
    const smartHeaders = document.querySelectorAll('.wp-block-celestial-smart-header');

    // Apply headroom.js to each smart header
    smartHeaders.forEach(header => {
        // Initialize headroom instance
        const headroom = new Headroom(header, {
            // Optional configuration options
            offset: 0,           // Offset in px before element is first unpinned
            tolerance: 0,        // Scroll tolerance in px before state changes
            classes: {
                initial: "headroom",
                pinned: "headroom--pinned",
                unpinned: "headroom--unpinned",
                top: "headroom--top",
                notTop: "headroom--not-top",
                bottom: "headroom--bottom",
                notBottom: "headroom--not-bottom"
            }
        });

        // Initialize the headroom
        headroom.init();
    });
});
