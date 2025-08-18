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

import {createRoot, useState} from '@wordpress/element';

const App = () => {
	const [count, setCount] = useState(0);

	return (
		<div>
			<h1>Hello from React!</h1>
			<p>This is a simple React application in a WordPress block.</p>
			<div>
				<button onClick={() => setCount(count + 1)}>Click me</button>
				<p>Count: {count}</p>
			</div>
		</div>
	);
};

document.addEventListener('DOMContentLoaded', function () {
	const reactAppBlocks = document.querySelectorAll('.wp-block-celestial-react-app');

	reactAppBlocks.forEach(block => {
		const root = createRoot(block);
		root.render(<App/>);
	});
});
