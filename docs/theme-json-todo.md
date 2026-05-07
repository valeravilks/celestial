# Theme JSON Follow-Up

This file tracks open decisions for continuing the Celestial design-system work in `wp-content/themes/celestial/theme.json`.

## Next Questions

- Describe all theme tokens, not only colors: typography, spacing, layout sizes, button defaults, block gaps, and future component-level choices.
- Continue refining `theme.json`; it is intentionally unfinished and should become the main source of design-system defaults for commercial WordPress sites.
- Document how to use the tokens in templates, patterns, block styles, and custom blocks.
- Document why each token exists, where it should be used, and when a new token is justified.
- Explain the naming logic for spacing `10..90` and font sizes `xs..3xl`, including practical usage examples.
- Decide and document button defaults: padding, font size, border radius, hover behavior, and variants.
- Decide and document default section spacing: small section, normal section, large/hero section.
- Decide and document text relationships: heading-to-paragraph spacing, paragraph rhythm, subtitles, metadata, and captions.
- Review whether layout sizes `contentSize` and `wideSize` should stay at `1200px` and `1600px` or become more opinionated.

## Editor Constraints

Record in the main documentation that several WordPress editor freedoms are intentionally disabled in `theme.json` to keep project designs consistent:

- `color.custom`
- `color.customDuotone`
- `color.customGradient`
- `color.defaultDuotone`
- `color.defaultGradients`
- `color.defaultPalette`
- `typography.customFontSize`
- `typography.defaultFontSizes`
- `spacing.customSpacingSize`
- `spacing.defaultSpacingSizes`

The purpose is to make commercial sites faster to build and easier to restyle by changing approved tokens instead of allowing one-off editor values.

## Documentation To Add

- Add a stable `theme.json` usage guide once the token system settles.
- Include examples of correct WordPress preset usage, such as `var:preset|spacing|40` in block markup and `var(--wp--preset--spacing--40)` in CSS.
- Explain which decisions belong in `theme.json`, which belong in block style variations, and which belong in patterns.
- Keep the docs practical: what to use, when to use it, and why it is constrained.
