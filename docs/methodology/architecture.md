# Architecture Methodology

Celestial has three conceptual layers.

## Runtime

Runtime is the code that WordPress loads in a real project.

- Theme presentation belongs in `cel-theme/`.
- Plugin functionality belongs in `cel-core/`.
- Generated assets should be treated as build output.
- Examples should not be loaded by default.

Runtime should be small, direct, and easy to delete from.

## Methodology

Methodology is the opinionated way of working:

- how typography is chosen;
- how colors and spacing are constrained;
- how custom post types are structured;
- how blocks are introduced;
- how AI should help without inventing a new architecture.

Methodology belongs in `docs/`, not inside runtime files.

## Examples

Examples are references, not product code.

Use examples to preserve useful patterns:

- dynamic blocks;
- interactive blocks;
- common CPT modules;
- theme patterns;
- editor extensions.

Prefer moving examples to `examples/` once they are not part of the default starter experience.

## Practical Rule

When starting a new project, a developer should be able to read the repository like a normal WordPress setup:

- "This is the theme."
- "This is the plugin."
- "These are optional docs and examples."

If a file exists only to explain an approach, it belongs in docs or examples. If WordPress needs it at runtime, it belongs in the theme or plugin.

