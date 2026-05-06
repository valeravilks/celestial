# Blocks And Editor Methodology

Custom blocks and editor extensions belong in the plugin, not the theme.

## Why

Blocks often represent content structure or behavior. They should remain available if the theme changes.

The theme can style blocks, provide patterns, and set editor constraints, but the plugin should register custom block types and editor scripts.

## Recommended Structure

If the repository is reorganized, prefer moving JavaScript tooling into the plugin:

```text
cel-core/
  package.json
  blocks/
  editor/
  build/
```

This makes the root cleaner and keeps build tooling near the code it builds.

The theme can remain dependency-free:

```text
cel-theme/
  theme.json
  templates/
  parts/
  patterns/
  assets/
```

## Examples

Default runtime should not be filled with example blocks.

Prefer:

```text
examples/
  blocks/
    static/
    dynamic/
    interactive/
```

Then keep `cel-core/blocks/` for real starter blocks or leave it empty with a README.

## Build Principle

Use official WordPress tooling unless a project need justifies something else.

`@wordpress/scripts` remains a good default for block and editor builds.

