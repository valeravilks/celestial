# AGENTS.md

This file is the working memory for agents in the Celestial repository. Keep it concise, update it when project knowledge becomes stable, and prefer verified facts over guesses.

## Project Identity

Celestial is a modular WordPress Full Site Editing starter kit with a small runtime, documented methodology, and optional examples.

- `cel-theme/` is the FSE theme and presentation layer.
- `cel-core/` is the core plugin for PHP modules, custom post types, meta, Gutenberg blocks, and editor assets.
- `docs/` contains methodology, architecture decisions, and practical recipes.
- Future `examples/` content should be optional reference material and should not be loaded by WordPress by default.
- The repository should stay familiar to WordPress developers: theme code should feel like a normal theme, plugin code should feel like a normal plugin, and extra methodology should live outside runtime.

## Local Environment

- WordPress runs through `wp-env` using `.wp-env.json`.
- `.wp-env.json` points to `WordPress/WordPress#6.9`, loads `./cel-core` as a plugin, and loads `./cel-theme` as a theme.
- Local WordPress URL from the README: `http://localhost:8888`.
- Admin credentials from the README: `admin` / `password`.
- Node engine is `^24.0.0` and `engineStrict` is enabled.
- PHP requirement is `>=8.2`.

## Common Commands

Run from the repository root unless noted.

- Start WordPress: `npm run wp-env start`
- Start asset watchers: `npm run start`
- Build assets: `npm run build`
- Lint JS: `npm run lint:js`
- Fix JS lint: `npm run lint:js:fix`
- Lint styles: `npm run lint:style`
- Fix style lint: `npm run lint:style:fix`
- Install PHP dependencies: `composer install`
- Lint PHP: `composer lint`
- Fix PHP coding standards: `composer fix`

## Build And Generated Files

- Block source lives in `cel-core/blocks`.
- Editor source lives in `cel-core/editor/index.js`.
- Block builds are emitted to `cel-core/build/blocks`.
- Editor builds are emitted to `cel-core/build/editor`.
- Treat `vendor/`, `node_modules/`, and `cel-core/build/` as generated or third-party output unless a task explicitly involves dependency or build artifacts.

## PHP Architecture

- Plugin entrypoint: `cel-core/cel-core.php`.
- Composer autoload maps `ValeraVilks\Celestial\` to `cel-core/modules/`.
- Central module bootstrap: `cel-core/modules/Modules.php`.
- Current module: `LandingPages`.
- `LandingPages::init()` wires:
  - `CPT::init()` for the `landing-page` custom post type.
  - `Meta::init()` for `_landing_subtitle`, `_landing_cta_text`, and `_landing_cta_url` post meta.
- When adding a PHP module, prefer the current pattern:
  - Create a namespaced module folder under `cel-core/modules/`.
  - Give the module a small bootstrap class with `init()`.
  - Register that bootstrap in `Modules::init()`.

## Blocks And Editor Assets

- Blocks follow WordPress block metadata conventions with `block.json`.
- Build scripts use `@wordpress/scripts` with `--source-path=cel-core/blocks`, `--output-path=cel-core/build/blocks`, `--blocks-manifest`, and `--experimental-modules`.
- The plugin registers block types from `cel-core/build/blocks/blocks-manifest.php` when built assets exist.
- For dynamic blocks, keep PHP rendering in the block directory's `render.php`.
- For interactive or frontend behavior, use the block directory's `view.js`.

## Theme Architecture

- `cel-theme/theme.json` is the main source of design tokens and editor controls.
- Templates live in `cel-theme/templates/`.
- Template parts live in `cel-theme/parts/`.
- Patterns live in `cel-theme/patterns/`.
- Global styles are intentionally constrained: custom colors, default palettes, gradients, many typography controls, and broad appearance tools are disabled in `theme.json`.
- Prefer theme tokens and WordPress presets over ad hoc values when changing templates, parts, patterns, or block styles.

## Coding Standards

- PHP standards are configured in `phpcs.xml`.
- PHP linting currently targets `cel-core` only.
- WordPress coding standards use `WordPress-Extra` and `WordPress-Docs`.
- Keep PHP files namespaced consistently under `ValeraVilks\Celestial`.
- Escape, sanitize, and capability-check WordPress data at boundaries.
- Keep changes scoped: theme presentation belongs in `cel-theme`; site logic belongs in `cel-core`.

## Project Intelligence Notes

Use this section for durable findings discovered while implementing real features.

- Celestial currently has example blocks and one real-ish module (`LandingPages`). Before building product features, check whether example code should be used as a scaffold or replaced with project-specific components.
- The theme is configured to reduce editor freedom and guide users through presets. Do not casually re-enable broad customization controls.
- The project favors official WordPress tooling (`wp-env`, `@wordpress/scripts`, block metadata registration) over custom build infrastructure.
- Current direction: keep `cel-theme/` dependency-free unless a real theme build step is needed; consider moving JS tooling into `cel-core/` because it builds plugin blocks/editor assets.
- Current direction: Composer is optional and may be removed from runtime if it only autoloads a few local plugin files.

## Agent Workflow

- Read this file, `README.md`, `docs/README.md`, relevant files in `docs/methodology/`, `package.json`, `composer.json`, `.wp-env.json`, and the relevant source files before changing behavior.
- Prefer `rg` and `rg --files` for repository exploration.
- Before editing generated output, confirm whether the source file should be changed instead.
- After PHP changes, run `composer lint` when feasible.
- After block/editor/theme asset changes, run the narrowest relevant lint or build command when feasible.
- If a task uncovers stable architectural knowledge, update this file in the same change.
