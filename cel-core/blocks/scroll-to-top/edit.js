/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { Tip, PanelBody, ToggleControl } from '@wordpress/components';
// import { useState } from '@wordpress/element';
const {useState} = wp.element;

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';
import { Icon } from './icon';

export default function Edit() {
	const [ showComponent, setShowComponent ] = useState( true );
	const blockProps = useBlockProps();

	return (
		<>
			{ showComponent && (
				<>
					<button { ...blockProps }>
						<Icon />
					</button>
					<Tip>
						This is an example element. The actual behavior of the
						block can be seen on the page.
					</Tip>
				</>
			) }

			<InspectorControls>
				<PanelBody>
					<ToggleControl
						__nextHasNoMarginBottom
						checked={ showComponent }
						label="Show component"
						onChange={ () => setShowComponent( ! showComponent ) }
					/>
				</PanelBody>
			</InspectorControls>
		</>
	);
}
