# Runtime Structure Decision

## Status

Proposed.

## Context

Celestial started as a modular FSE starter kit that gathered official WordPress tools into one repository.

The intended usage is shifting toward a personal or small-team starter for practical WordPress projects. In that context, the repository should feel familiar to WordPress developers and avoid unnecessary setup friction.

## Decision

Keep the runtime shaped like a normal WordPress project:

- `cel-theme/` is the theme.
- `cel-core/` is the plugin.
- plugin build tooling should live inside `cel-core/` if it only builds plugin assets.
- the theme should not need Node tooling unless a real theme build step is introduced.
- Composer should be removed from runtime unless PHP dependencies justify it.

## Consequences

This makes the repository easier to understand and copy into a WordPress installation.

It also makes `cel-core/` more self-contained: blocks, editor extensions, build output, and package metadata can live together.

The root can remain responsible for workspace-level documentation and local development only.

## Open Work

- Decide whether to move `package.json` from the root into `cel-core/`.
- Decide whether root-level `wp-env` scripts are still needed after that move.
- Remove Composer autoloading from `cel-core` if explicit includes are preferred.
- Move example blocks out of `cel-core/blocks` into `examples/blocks`.

