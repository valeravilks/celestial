# Color System

Celestial uses a small semantic color system defined in `wp-content/themes/celestial/theme.json`.

Colors are project tokens, not one-off CSS values. All theme templates, patterns, block styles, and custom blocks should use colors from `theme.json` through WordPress presets and generated CSS variables.

Use preset syntax in block markup:

```text
var:preset|color|primary
```

Use generated variables in CSS:

```css
color: var(--wp--preset--color--base);
background-color: var(--wp--preset--color--surface);
border-color: var(--wp--preset--color--border);
```

## Palette

The base palette is the minimum color system for commercial sites:

```text
primary      Main brand color for primary actions, brand sections, and key emphasis.
secondary    Supporting brand or neutral action color when primary would be too strong.
accent       High-emphasis accent for small highlights, badges, arrows, and occasional CTA details.
base         Default text color. Usually a dark neutral, not pure black by requirement.
contrast     Opposite readable color. Usually white; often used on dark or brand backgrounds.
muted        Secondary text for metadata, descriptions, helper text, and lower-emphasis copy.
surface      Soft section background.
surface-alt  Alternate soft background for adjacent light sections.
border       Lines, dividers, form fields, card borders, and subtle separators.
```

## Rules

- Do not use arbitrary hex, RGB, HSL, named colors, or one-off CSS colors in project code.
- Do not use literal color names like `black`, `white`, or `gray-light` for new project decisions; use semantic roles such as `base`, `contrast`, `surface`, or `muted`.
- Change token values when restyling a project; avoid changing templates or block styles just to swap colors.
- New color tokens may be added when a stable role is missing, but the base palette should not be removed. It is the minimum shared language for Celestial projects.
- If a color is only needed once, first try to map it to an existing token before adding a new one.

## Editor Constraints

WordPress color freedoms are intentionally constrained in `theme.json`:

```text
color.custom          false
color.customDuotone   false
color.customGradient  false
color.defaultDuotone  false
color.defaultGradients false
color.defaultPalette  false
color.link            false
color.background      false
color.text            false
```

This keeps the editor from introducing random colors, default palettes, duotones, gradients, or one-off text/background choices. The project should stay consistent by using approved color tokens instead of ad hoc editor values.
