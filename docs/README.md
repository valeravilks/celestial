# Celestial Methodology

Celestial should stay close to a normal WordPress project.

## Runtime

- `wp-content/themes/celestial/` is the theme and owns presentation: `theme.json`, templates, parts, patterns, and theme assets.
- `wp-content/plugins/celestial-core/` contains the Celestial plugin and owns functionality: PHP features, CPTs, meta, custom blocks, and editor assets.
- The theme should remain dependency-free unless a real theme build step becomes necessary.
- Plugin PHP should stay simple and readable. Use explicit includes and prefixed functions unless dependencies justify Composer.
- Feature code should live in folders under `wp-content/plugins/celestial-core/includes/`.
- Each feature folder can start with an `index.php` of hook callbacks and later add classes if the feature becomes complex.

Example:

```text
includes/
  landing-pages/
    index.php
  complex-feature/
    index.php
    class-service.php
    interface-provider.php
```

## Editor And Design

- Prefer WordPress-native tools: FSE templates, `theme.json`, block metadata, and `@wordpress/scripts`.
- Keep editor freedom constrained through presets and patterns rather than one-off values.
- Use theme tokens and WordPress presets before adding ad hoc CSS.
- Add extra styles for core blocks through `wp_enqueue_block_style()` in `wp-content/themes/celestial/functions.php`.
- Core block styles live in `wp-content/themes/celestial/assets/blocks/<block-name>.css`, using the block name without the `core/` prefix.
- When adding one, add the block name to `$styled_blocks` in `celestial_theme_register_block_styles()`.

Example:

```text
assets/blocks/button.css  -> core/button
assets/blocks/image.css   -> core/image
```

## Color Tokens

Theme colors live in `wp-content/themes/celestial/theme.json`. Name colors by their role in the design system, not by the literal shade. This keeps commercial projects easier to restyle: most projects should only need changes to the token values, not to templates, patterns, or block styles.

Use these palette roles:

```text
primary      Main brand color. Use for primary actions, key highlights, and brand-led sections.
secondary    Supporting brand or neutral action color. Use when primary would be too strong or repetitive.
accent       High-emphasis accent. Use for small highlights, badges, arrows, and occasional CTA emphasis.
base         Default text color. Usually a dark neutral, not necessarily pure black.
contrast     Opposite readable color. Usually white; use for text on dark/brand backgrounds or light contrast fills.
muted        Secondary text color. Use for metadata, descriptions, helper text, and lower-emphasis copy.
surface      Default soft section background. Use to separate content from the main page background.
surface-alt  Alternate soft background. Use when adjacent sections both need light surfaces.
border       Lines, dividers, field borders, card borders, and subtle separators.
```

Avoid adding one-off color names such as `blue`, `green`, `black`, or `gray-light` unless the color has a stable semantic role that the existing tokens cannot express. For example, prefer `base` over `black` for body text, `contrast` over `white` for readable inverse text, and `surface` over `gray-light` for section backgrounds.

## Examples

Examples are useful, but they should not make the default starter noisy. If examples grow, move them to `examples/` and keep runtime code focused.
