# Spacing System

Celestial spacing is defined in `wp-content/themes/celestial/theme.json`.

Spacing values are project tokens for common layout rhythm: small gaps, component padding, section spacing, and large hero spacing. Theme templates, patterns, block styles, and custom blocks should prefer these tokens through WordPress presets and generated CSS variables.

Use preset syntax in block markup:

```text
var:preset|spacing|40
```

Use generated variables in CSS:

```css
gap: var(--wp--preset--spacing--40);
padding: var(--wp--preset--spacing--50);
margin-bottom: var(--wp--preset--spacing--30);
```

## Scale

The base spacing scale is:

```text
10   0.25rem                  Tiny adjustments and tight UI details.
20   0.5rem                   Small gaps, compact metadata spacing.
30   0.75rem                  Heading-to-text spacing, compact component padding.
40   1rem                     Default gap, normal small padding, navigation gaps.
50   1.5rem                   Larger component padding, card inner spacing.
60   2rem                     Block spacing and compact section rhythm.
70   clamp(2.5rem, 5vw, 4rem) Normal section spacing.
80   clamp(4rem, 8vw, 6rem)   Large section and hero spacing.
90   clamp(6rem, 10vw, 8rem)  Extra-large hero or major page spacing.
```

Smaller values are fixed for predictable component rhythm. Larger values are fluid so section spacing can breathe on desktop without becoming too large on mobile.

## Usage

Use the scale by role:

```text
10/20  Fine spacing, icons, compact inline details.
30/40  Text rhythm, small groups, navigation, normal gaps.
50/60  Cards, columns, component padding, grouped content.
70/80  Sections, major vertical rhythm, hero blocks.
90     Rare extra-large page or hero spacing.
```

## Global Spacing Defaults

Global spacing defaults live under `styles.spacing` in `theme.json`.

`blockGap` defines the default gap between blocks when a block layout uses the global rhythm. A friendly starter default is usually:

```text
styles.spacing.blockGap  var(--wp--preset--spacing--40)
```

Use local `blockGap` values in templates and patterns when a layout needs tighter or larger spacing. Use `blockGap: 0` only when the pattern intentionally controls every internal space itself.

## Rules

- Prefer `theme.json` spacing presets for templates, patterns, block styles, and custom blocks.
- Change token values when adjusting the system; avoid scattering many one-off spacing values across the project.
- The `10..90` scale is the default system and should usually be followed.
- New spacing tokens may be added when a stable spacing role is missing, but the base scale should not be removed.
- One-off spacing values are allowed when a layout genuinely needs a technical or highly specific adjustment, but they should not become the normal way to build project spacing.

## Editor Constraints

WordPress spacing freedoms are intentionally constrained in `theme.json`:

```text
spacing.customSpacingSize  false
spacing.defaultSpacingSizes false
```

This keeps the editor from introducing random spacing sizes or the WordPress default spacing scale. The project should stay consistent by using approved spacing tokens while still allowing specific layout decisions where the design truly needs them.
