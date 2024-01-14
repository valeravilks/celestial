import domReady from '@roots/sage/client/dom-ready';
import {checkComponentModule} from "@scripts/help.js";

/**
 * Application entrypoint
 */
domReady(async() => {

    // Adding a new script component to the page. The script is loaded depending on whether it is on the page
    await checkComponentModule('a-example', async () => {
      return await import('./atoms/example.js');
    });
});

/**x
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) {
    import.meta.webpackHot.accept(console.error);
}

