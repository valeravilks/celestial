# Custom Blocks

This document defines where blocks live, how they are created, and how to manage their dependencies.

All custom blocks in this repository live **only** in the `cel-blocks` plugin.

---

## Purpose

To keep blocks reusable, keep the theme focused on presentation, and keep business logic inside `cel-core`.

---

## Rules

* All new blocks are added **only** in `cel-blocks/src`.
* Do not add blocks to `cel-theme` or `cel-core`.
* Blocks must be created with the official `@wordpress/create-block` tool.
* Additional npm packages must be added to `cel-blocks/package.json`.

---

## How to Create a Block

### Step 1 – Go to the blocks plugin

```
cd cel-blocks
```

### Step 2 – Generate a block scaffold

```
npx @wordpress/create-block my-block
```

The `npx @wordpress/create-block` command generates a full block scaffold with the required files and configuration.

### Step 3 – Verify the block location

Confirm the new block exists in:

```
cel-blocks/src
```

---

## Build and Dev

* `npm run start` — development mode with watch and build.
* `npm run build` — production build.

---

## NPM Dependencies

If a block needs an additional npm package:

* Add it to `cel-blocks/package.json`.
* Run `npm install` inside `cel-blocks`.

---

## Checklist

* [ ] Block created with `npx @wordpress/create-block`
* [ ] Block lives in `cel-blocks/src`
* [ ] No block code in `cel-theme` or `cel-core`
* [ ] Dependencies added to `cel-blocks/package.json`
* [ ] `npm run start` or `npm run build` succeeds

---

## Best Practices

* Keep blocks isolated and reusable.
* Avoid coupling blocks to theme-specific CSS.
* Prefer minimal dependencies.

---

## Official References

[https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/)
[https://developer.wordpress.org/block-editor/getting-started/create-block/](https://developer.wordpress.org/block-editor/getting-started/create-block/)
[https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/)
