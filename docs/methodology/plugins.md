# Plugin Methodology

The plugin should hold site functionality and editor behavior that should survive theme changes.

## Responsibilities

The plugin owns:

- custom post types;
- taxonomies;
- post meta;
- custom blocks;
- editor extensions;
- REST endpoints;
- integrations;
- data transformation.

The plugin should not own:

- page layout;
- visual theme decisions;
- template parts;
- presentation-only CSS, unless it belongs to a custom block.

## Small Plugin Bias

Celestial is intended for one developer or a small team. Prefer direct WordPress code over framework-like infrastructure.

Good defaults:

- clear file names;
- simple includes;
- small functions or classes;
- WordPress hooks close to the feature they initialize;
- minimal build steps.

Avoid adding abstraction only to make the project look more architectural.

## Composer

Composer is optional for small WordPress plugins.

Use Composer when:

- the plugin needs third-party PHP packages;
- PSR-4 autoloading clearly reduces complexity;
- the team wants WPCS through Composer as a standard workflow.

Avoid Composer when:

- it only loads a few local files;
- it makes the plugin harder to copy into a normal WordPress install;
- it creates setup friction for a small team;
- the runtime has no PHP dependencies.

If Composer is removed, prefer a simple plugin bootstrap with explicit includes:

```php
require_once __DIR__ . '/includes/landing-pages/cpt.php';
require_once __DIR__ . '/includes/landing-pages/meta.php';
```

This is acceptable for small plugins and often easier for WordPress developers to understand.

