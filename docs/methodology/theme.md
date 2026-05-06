# Theme Methodology

The theme should define presentation rules and editor constraints. It should not contain site-specific business logic.

## Responsibilities

The theme owns:

- `theme.json` design tokens and editor settings;
- templates;
- template parts;
- block patterns;
- block style variations;
- presentation-only CSS.

The theme should not own:

- custom post types;
- post meta registration;
- REST endpoints;
- integrations;
- editor behavior that belongs to a plugin.

## Full Site Editing Direction

Celestial should use FSE as the primary theme model. Prefer WordPress-native configuration over custom PHP whenever possible:

- use `theme.json` for global design settings;
- use templates and parts for layout structure;
- use patterns for reusable layout sections;
- use block styles for visual variants.

## Editor Constraints

The current direction is to reduce arbitrary editor freedom and guide users through presets.

Prefer:

- defined color palettes;
- defined spacing scale;
- defined typography presets;
- reusable patterns;
- block style variants.

Avoid casually enabling broad customization controls unless the project explicitly needs them.

