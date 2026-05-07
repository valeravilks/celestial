# Layout System

Celestial layout settings are defined in `wp-content/themes/celestial/theme.json`.

Layout settings describe the page frame: default content width, wide content width, root padding, and how WordPress wide/full alignments should behave. They are not component styles; they are the shared structure that templates, patterns, and blocks build inside.

## Page Widths

The starter defines two main layout widths:

```text
contentSize  1200px  Default constrained content width.
wideSize     1600px  Wider layout width for visual sections and grids.
```

Use `contentSize` for normal constrained layouts: page content, text sections, standard groups, forms, and most business-site sections.

Use `wideSize` through `alignwide` when a section needs more horizontal space but should still feel framed: media/content layouts, service grids, portfolio grids, large CTAs, and wide visual sections.

Use `alignfull` for full-width sections: full-bleed backgrounds, covers, hero sections, and major page bands.

## Root Padding

The root page padding is set in global styles:

```text
styles.spacing.padding.left   var(--wp--preset--spacing--40)
styles.spacing.padding.right  var(--wp--preset--spacing--40)
```

This gives the page a consistent side gutter so content does not touch the viewport edge on smaller screens.

Root top and bottom padding should usually stay at `0px`. Vertical rhythm belongs to sections, blocks, and patterns rather than the root page frame.

## Root Padding Aware Alignments

`useRootPaddingAwareAlignments` is enabled:

```text
useRootPaddingAwareAlignments  true
```

This helps WordPress wide and full alignments work with the root padding model. In practice, wide and full-width blocks can still use the global side gutter correctly instead of fighting the page padding.

## Rules

- Treat layout settings as the site frame, not as per-component styling.
- Prefer constrained layout for normal content.
- Use `alignwide` when a section needs a wider container but should remain visually framed.
- Use `alignfull` for full-bleed backgrounds or major visual sections.
- Keep root side padding tied to the spacing scale instead of hardcoded values.
- Change `contentSize` and `wideSize` only when the project needs a different overall page frame.
