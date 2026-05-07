# Typography System

Celestial typography is defined in `wp-content/themes/celestial/theme.json`.

Typography values are project tokens, not one-off editor choices. Theme templates, patterns, block styles, and custom blocks should use the font families and font sizes defined in `theme.json` through WordPress presets and generated CSS variables.

Use preset syntax in block markup:

```text
var:preset|font-size|base
```

Use generated variables in CSS:

```css
font-family: var(--wp--preset--font-family--roboto);
font-size: var(--wp--preset--font-size--base);
```

## Font Families

The starter currently registers one project font family:

```text
roboto  Default project sans-serif. Available weights: 400 and 700.
```

Add new font families only when a project needs a stable typography role, such as a separate heading face or editorial display face. Keep the number of families small so commercial projects stay easy to restyle and maintain.

Font families are project-specific. Replace Roboto or add another family when the project requires a different brand typeface, but keep font registration centralized in `theme.json`.

## Font Sizes

The base font-size scale is:

```text
xs     0.75rem   Labels, fine print, compact metadata.
sm     0.875rem  Secondary text, metadata, small UI text.
base   1rem      Default body text.
md     1.125rem  Lead text, larger body text, small headings.
lg     1.25rem   Card headings, compact section headings.
xl     fluid     Medium headings.
2xl    fluid     Large section headings.
3xl    fluid     Page titles and hero headings.
```

Small and body sizes are fixed for predictable reading. Larger heading sizes are fluid so headings can scale better between mobile and desktop layouts.

## Fluid Typography

`typography.fluid` is enabled globally. Individual font sizes decide whether they use fluid behavior:

```text
xs/base/lg  fixed
xl/2xl/3xl  fluid
```

Use fluid sizes for headings and display text. Avoid fluid body text unless there is a clear reason, because body copy should remain stable and readable.

## Rules

- Do not use arbitrary `px`, `rem`, `em`, or `clamp()` font sizes in project code unless the task explicitly changes the typography system.
- Use `theme.json` font-size presets for templates, patterns, block styles, and custom blocks.
- Change token values when restyling typography; avoid changing many templates or block styles just to adjust scale.
- Keep the base font-size scale as the default system. It is a good general-purpose set for commercial sites and should usually be followed rather than changed.
- New font-size tokens may be added when a stable role is missing, but only in rare cases. The base scale should not be removed.
- If a text style is only needed once, first try to map it to an existing token before adding a new one.

## Editor Constraints

WordPress typography freedoms are intentionally constrained in `theme.json`:

```text
typography.customFontSize  false
typography.defaultFontSizes false
typography.dropCap         false
typography.fontStyle       false
typography.fontWeight      false
typography.letterSpacing   false
typography.lineHeight      false
typography.textDecoration  false
typography.textTransform   false
```

This keeps the editor from introducing random font sizes, drop caps, weights, line heights, letter spacing, decoration, or text transforms. The project should stay consistent by using approved typography tokens and theme-level styles instead of ad hoc editor values.
