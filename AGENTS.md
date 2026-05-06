# AGENTS.md

Working notes for agents in Celestial. Keep this file short and update it only with stable project facts.

## Project

Celestial is a small WordPress FSE starter kit using a familiar `wp-content` layout.

- Theme: `wp-content/themes/celestial/`
- Core plugin: `wp-content/plugins/celestial-core/`
- Local WordPress config: `.wp-env.json`
- Methodology notes: `docs/README.md`

## Commands

From the repository root:

- Start WordPress: `wp-env start`

From `wp-content/plugins/celestial-core/`:

- Install asset tooling: `npm install`
- Build assets: `npm run build`
- Watch assets: `npm run start`

## Conventions

- Keep theme presentation in `wp-content/themes/celestial/`.
- Keep PHP modules, custom post types, blocks, and editor assets in `wp-content/plugins/celestial-core/`.
- Do not add Composer or PHPCS unless a task explicitly asks for them.
- `wp-env` is expected to be installed globally, not as a plugin dependency.
- Treat `wp-content/plugins/celestial-core/build/` and `node_modules/` as generated output.
- Prefer simple explicit PHP includes for small plugin modules.

## Verification

- After PHP changes, run `php -l` on changed PHP files when feasible.
- After block or editor asset changes, run `npm run build` from `wp-content/plugins/celestial-core/`.
