# Celestial Methodology

Celestial should stay close to a normal WordPress project.

## Runtime

- `wp-content/themes/celestial/` is the theme and owns presentation: `theme.json`, templates, parts, patterns, and theme assets.
- `wp-content/plugins/celestial-core/` is the plugin and owns functionality: PHP features, CPTs, meta, custom blocks, and editor assets.
- The theme should remain dependency-free unless a real theme build step becomes necessary.
- Plugin PHP should stay simple and readable. Use explicit includes and prefixed functions unless dependencies justify Composer.

## Editor And Design

- Prefer WordPress-native tools: FSE templates, `theme.json`, block metadata, and `@wordpress/scripts`.
- Keep editor freedom constrained through presets and patterns rather than one-off values.
- Use theme tokens and WordPress presets before adding ad hoc CSS.

## Examples

Examples are useful, but they should not make the default starter noisy. If examples grow, move them to `examples/` and keep runtime code focused.
