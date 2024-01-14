/**
 * @see {@link https://bud.js.org/extensions/bud-preset-wordpress/editor-integration/filters}
 */
roots.register.filters('@scripts/filters');
roots.register.blocks('@scripts/blocks');

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
