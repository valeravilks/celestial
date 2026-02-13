# Changelog

All notable changes to the Celestial FSE Starterkit will be documented in this file.

## [0.7.0] - 2026-02-13

### Added

- Documentation for creating and managing custom blocks in `cel-blocks`.

### Changed

- Reorganized the project structure into `cel-theme`, `cel-blocks`, and `cel-editor`, and updated local env paths accordingly.
- Renamed block prefixes from `celestial` to `cel`.
- Added `--experimental-modules` to the blocks build and start scripts.
- Reorganized `cel-theme` directories and added new patterns.

### Removed

- CircleCI configuration and related README section.

### Chores

- Removed an unused `@wordpress/i18n` import from `smart-header` editor code.

## [0.6.0] - 2025-12-11

Note: Release 1.0.0 was withdrawn and replaced by 0.6.0. No public consumers were affected.

### Added

- Updated spacing size tokens in `theme.json` for improved consistency and clarity.
- Added local `Roboto` font via `fontFace` in `theme.json` and exposed a clean preset list.
- Enabled fluid typography in `theme.json` and introduced refined preset font sizes.
- Added dedicated build scripts for the split workspaces: `build:editor` (core plugin editor) and `build:blocks` (blocks bundle).

### Changed

- Renamed spacing size slugs in `theme.json` to a simplified, consistent naming scheme.
- Hardened and standardized `theme.json` settings:
  - Disabled editor color customization, gradients, and duotone to enforce the theme palette.
  - Standardized color palette names and slugs; clarified layout sizes (`contentSize`, `wideSize`).
  - Tightened block supports (e.g., `core/button` border radius presets, `core/group` background/text color) for consistency.
- Reorganized project structure to streamline development and deployment:
  - Introduced a clearer separation of concerns for the core plugin code (e.g., `core-plugin/modules/*`).
  - Split the code into `src/core-plugin` and `src/blocks-plugin` workspaces with separate outputs.
  - Added a dedicated Landing Pages module under `src/core-plugin/modules/LandingPages/` with a PHP entry point.
  - Synchronized project configs and metadata (`package.json`, `composer.json`) and updated ignore/config files in the `blocks/` workspace.
- Updated dependency lockfiles to reflect the new structure.

## [0.5.0] - 2025-08-22

### Added

- New custom block: "React App" (celestial/react-app) that mounts a small React application on the front end via `viewScript` using `@wordpress/element`'s `createRoot`. Includes an interactive counter example and shared styles.
- Documentation: "Color Management Policy" (docs/color-management.md) describing how colors are centrally managed via theme/theme.json and why editor color controls are disabled.
- Theme styles: core-button.css and core-image.css to style core block variants.
- Button style variant: 01-arrow.json for core/button.

### Changed

- Smart Header block: save implementation now renders `<InnerBlocks.Content />` to output nested blocks in the front end.
- README: link to the new Color Management documentation and clarify quick start steps for building blocks and running the local wp-env environment.

## [0.4.0] - 2025-08-02

### Added

- "Media Content 1" pattern
- Subtitle block style with medium font size
- Templates:
    - Single template with header, hero and footer
    - Page template with header and footer
    - Simple hero, header and footer parts
- Layout enhancements:
    - Wide alignment and improved hero layout
    - Header spacing adjustments
    - Increased content/wide sizes
    - Block gap and padding settings

### Changed

- Updated theme.json configuration:
    - Template titles and names
    - Typography settings
    - "name"/"title" order in template parts
- Improved index template structure
- Replaced "footer" with "simple-footer"

### Removed

- Unused header.html and footer.html templates
- Trailing newline from theme.json

### CI

- Updated CircleCI to deploy dev branch
## [0.3.0] - 2025-08-01

### Features

- Add fluid typography support with responsive font sizes
- Add Inter font with regular (400) and bold (700) weights
- Add comprehensive spacing scale with responsive values using CSS clamp()

### Documentation

- Add detailed documentation for theme color settings
- Add detailed documentation for theme font settings
- Add detailed documentation for theme spacing settings
- Update README with comprehensive project overview and setup instructions

## [0.2.0] - 2025-07-30

### Features

- Add CircleCI configuration for automated deployment workflows
- Add custom color palette with primary color in theme configuration
- Disable custom color palette in theme configuration
- Disable default color palette in theme configuration
- Remove default block patterns by disabling core-block-patterns support

### Documentation

- Update plugin metadata with new name, description, author details, and PHP requirement
- Update plugin metadata and improve custom post type registration details

### CI/CD

- Fix deployment step to push changes from the correct directory
- Add automated workflows for linting and deployment to WP Engine environments (dev, stage, prod)

## [0.1.0] - 2025-07-28

### Features

- Add .wp-env.json for local WordPress environment setup
- Add Landing Pages plugin with custom post type registration
- Add @wordpress/create-block scaffold with Smart Header block
- Add initial structure for Celestial FSE Theme

### Chores

- Add .gitignore file with common project exclusions
