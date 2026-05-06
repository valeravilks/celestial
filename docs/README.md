# Celestial Docs

Celestial is meant to be a practical WordPress FSE starter kit with a small, understandable runtime and a documented working method.

These docs are split into three layers:

- `methodology/` describes how projects should be designed and built.
- `decisions/` records architectural choices and tradeoffs.
- `recipes/` keeps practical patterns that can be copied into real projects.

The runtime code should stay clean:

- `cel-theme/` is the theme that WordPress loads.
- `cel-core/` is the plugin that WordPress loads.
- `docs/` explains the approach.
- `examples/`, if added, should contain optional references that are not loaded by WordPress.

## Guiding Idea

Keep the starter familiar to WordPress developers. The closer the structure feels to `wp-content/themes/*` and `wp-content/plugins/*`, the easier it is for one person or a small team to understand, copy, and adapt it.

Celestial should avoid looking like a private framework unless a real project need justifies it.

