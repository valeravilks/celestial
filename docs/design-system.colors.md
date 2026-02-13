# Color Management Policy

In the Celestial theme, color management is not done from the WordPress admin panel. All color settings are centrally managed via the theme file `cel-theme/theme.json`, in full compliance with the official WordPress documentation.

This is an intentional architectural decision to preserve a uniform design system and ensure long-term stability. Content managers work with content — not with visual styling.

---

## Purpose

This document defines how colors are managed inside the project and how new colors must be added.

---

## Rules

* Colors are defined **only** in `cel-theme/theme.json`.
* No inline HEX values inside blocks or CSS.
* No custom colors in the editor.
* Default WordPress palette is disabled.
* CSS must reference colors via CSS variables:
  `var(--wp--preset--color--{slug})`
* Do not remove base palette colors without auditing templates and blocks.

---

## Why We Do This

* Unified design without palette drift across projects.
* Predictable maintenance (single source of truth).
* Editors cannot accidentally break brand colors.
* Consistent token-based styling.

---

## Current Configuration (Disabled Features)

Inside `settings.color` the following are intentionally disabled:

* `custom: false`
* `defaultPalette: false`
* `text: false`
* `link: false`
* `background: false`
* `customGradient: false`
* `defaultGradients: false`
* `customDuotone: false`
* `defaultDuotone: false`

These flags enforce strict design consistency.

---

## Base Palette (Do Not Remove)

The project includes core semantic tokens such as:

* primary
* secondary
* accent
* black
* white
* gray
* gray-light
* gray-dark

These are used across templates, patterns, and block styles.

---

## How to Add or Modify a Color

### Step 1 – Open theme.json

Navigate to:

```
cel-theme/theme.json → settings.color.palette
```

### Step 2 – Add a new color

Format:

```
{
  "color": "#1E90FF",
  "name": "Primary",
  "slug": "primary"
}
```

Guidelines:

* `color` → HEX value
* `name` → Human readable label
* `slug` → kebab-case technical name

---

### Step 3 – Use the Color

In CSS:

```
color: var(--wp--preset--color--primary);
```

In blocks/templates:
Select the color from the predefined palette.

---

### Step 4 – Verify

Checklist:

* [ ] No inline HEX values introduced
* [ ] Color appears in editor palette
* [ ] Contrast checked (accessibility)
* [ ] No unintended overrides

---

## Best Practices

* Prefer semantic names (`primary`, `accent`) over visual names (`blue-500`).
* Keep the palette lean (5–10 core tones).
* Change colors globally only via `theme.json`.
* Never override palette colors locally unless explicitly documented.

---

## Official Reference

[https://developer.wordpress.org/themes/global-settings-and-styles/settings/color/](https://developer.wordpress.org/themes/global-settings-and-styles/settings/color/)
