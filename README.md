# Celestial

A small WordPress Full Site Editing starter kit shaped like a normal `wp-content` project.

## Structure

```text
wp-content/
  themes/
    celestial/          FSE theme
  plugins/
    celestial-core/     Celestial plugin, blocks, editor assets
```

The theme has no Node or Composer setup. Plugin PHP is loaded with explicit includes. Block and editor asset tooling lives inside the Celestial plugin.

## Requirements

- Docker
- Node.js `^24.0.0`
- Global `wp-env`

Install `wp-env` globally if needed:

```bash
npm install -g @wordpress/env
```

## Setup

From the repository root:

```bash
wp-env start
```

WordPress runs at `http://localhost:8888`.

Admin credentials:

```text
admin / password
```

Install and run Celestial plugin asset tooling from the plugin directory:

```bash
cd wp-content/plugins/celestial-core
npm install
npm run build
```

Use `npm run start` instead of `npm run build` while developing blocks or editor assets.

## Notes

- Generated assets are emitted to `wp-content/plugins/celestial-core/build/`.
- The plugin skips block registration when build assets do not exist yet.
- Optional project methodology lives in `docs/README.md`.
