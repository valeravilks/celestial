# Typography Methodology

Typography should be systematic, limited, and easy to apply inside the editor.

## Goals

- Keep the type scale small.
- Use presets instead of arbitrary values.
- Make headings predictable.
- Avoid one-off font sizes in templates and patterns.
- Make typography decisions visible in `theme.json`.

## Recommended Approach

Define the main font family, font sizes, and heading behavior in `cel-theme/theme.json`.

Use WordPress presets in templates and patterns:

```html
<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Section title</h2>
<!-- /wp:heading -->
```

Prefer preset names that describe scale, not use case:

- `small`
- `medium`
- `large`
- `x-large`
- `xx-large`

Use patterns and templates to express use cases such as hero, section heading, subtitle, or eyebrow.

## Constraints

Avoid:

- arbitrary inline font sizes;
- many exposed font families;
- broad typography controls for every block;
- negative letter spacing as a default habit;
- styling text in PHP when `theme.json` or block markup can do it.

## Open Question

Celestial currently uses Roboto. The methodology should decide whether the starter should ship with a neutral default font or leave font choice to each project.

