# AI Workflow Methodology

AI should help preserve the project's working style, not invent a new one every time.

## What AI Should Read First

Before changing behavior, AI should read:

- `AGENTS.md`;
- `README.md`;
- `docs/README.md`;
- relevant files in `docs/methodology/`;
- the source files directly related to the task.

## What AI Should Preserve

AI should preserve:

- the familiar WordPress theme/plugin split;
- small-team simplicity;
- theme presentation in `cel-theme/`;
- plugin functionality in `cel-core/`;
- examples outside runtime when possible;
- official WordPress tooling where it still helps.

## What AI Should Avoid

AI should avoid:

- adding Composer only for aesthetics;
- creating framework-style abstractions without a real need;
- putting business logic in the theme;
- turning examples into default runtime code;
- enabling broad editor freedom without an explicit design reason.

## Good AI Tasks

Good tasks for AI in this repository:

- add a focused CPT module;
- create a block from an existing example;
- convert an example into project code;
- document a design decision;
- simplify setup;
- move examples out of runtime;
- update `theme.json` according to the typography and color methodology.

