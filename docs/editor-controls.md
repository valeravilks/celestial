# Editor Controls

Celestial limits some WordPress block controls in `wp-content/themes/celestial/theme.json`.

The goal is to let clients edit content without accidentally rebuilding the design system from the editor. Core visual decisions should come from `theme.json`, block styles, style variations, templates, and patterns.

## Block Settings

Block-specific settings live under:

```text
settings.blocks
```

Use this area when a core block needs stricter controls than the global theme settings.

This document should evolve gradually. `settings.blocks` should describe the controls Celestial intentionally restricts for specific blocks. Do not treat the current list as final; add to it when real project work shows that another block control should be limited.

When reviewing or changing editor controls, compare this document with the actual `settings.blocks` values in `theme.json`. The documentation should match what is really disabled or enabled, and the JSON should match the intended restrictions described here.

## Heading

```text
core/heading
typography.fontFamilies  []
typography.fontSizes     []
```

Headings should follow the theme heading scale from global styles, not manual editor choices. Heading levels map to approved font-size tokens in `theme.json`.

## Paragraph

```text
core/paragraph
typography.fontFamilies  []
typography.fontSizes     []
```

Paragraph text should use the theme body typography by default. Special text treatments should be handled through block styles, style variations, or patterns instead of one-off font choices.

## Button

```text
core/button
typography.fontFamilies  []
typography.fontSizes     []
border.radius            false
```

Buttons are components, so their typography and shape should be controlled by the design system. Font size, font family, and radius should come from theme styles or button style variations, not from manual editor changes.

## Buttons

```text
core/buttons
typography.fontFamilies  []
typography.fontSizes     []
```

The Buttons wrapper should not introduce separate typography decisions. Button groups should inherit consistent button styling from the individual button style system.

## Group

```text
core/group
typography.fontFamilies  []
typography.fontSizes     []
color.background         false
color.text               false
spacing.padding          true
```

Groups are often used as section wrappers. Typography controls are disabled so groups do not override the project text system. Text and background color controls are disabled so sections use approved patterns and color tokens instead of random editor choices.

Padding remains enabled because groups often need section-level spacing. Use approved spacing presets when setting that padding.

## Rules

- Disable block controls when they would let editors create one-off design decisions.
- Prefer style variations and patterns for intentional visual variants.
- Keep content editing flexible, but keep typography, color, and component styling centralized.
- Add block-specific settings only when there is a clear design-system reason.
- Document any new block-specific restriction in this file.
- When asked to check editor controls, verify both this documentation and the matching `theme.json` settings.
