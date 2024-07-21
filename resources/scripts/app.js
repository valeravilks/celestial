import domReady from '@roots/sage/client/dom-ready';
import { loadJsForComponents } from "@scripts/help.js";

/**
 * Application entrypoint
 */
domReady(async() => {
  await loadJsForComponents();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
