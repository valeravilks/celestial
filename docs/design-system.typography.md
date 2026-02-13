# Typography

This document defines how fonts are managed inside the Celestial FSE Starter Kit.

All typography configuration is controlled via `cel-theme/theme.json`.

---

## Purpose

To define rules and workflow for adding and managing fonts in the project while preserving a token-based design system.

---

## Rules

* Fonts are defined **only** in `cel-theme/theme.json`.
* No Google Fonts `<link>` tags inside templates.
* No inline `font-family` declarations in blocks or CSS.
* Only fonts registered in `theme.json` may be used.
* CSS must reference fonts via preset variables:
  `var(--wp--preset--font-family--{slug})`
* Font files must be stored locally in `cel-theme/assets/fonts/`.
* Prefer WOFF2 format.

---

## How to Add a New Font

### Step 1 – Add Font Files

Place font files in:

```
cel-theme/assets/fonts/[font-name]/
```

Naming convention:

```
[font-name]-[weight]-[style].woff2
```

Example:

```
inter-400-normal.woff2
inter-700-normal.woff2
```

---

### Step 2 – Register in theme.json

Open:

```
cel-theme/theme.json → settings.typography.fontFamilies
```

Add configuration:

```
{
  "fontFace": [
    {
      "fontFamily": "YourFont",
      "fontStyle": "normal",
      "fontWeight": "400",
      "src": [
        "file:./assets/fonts/your-font/your-font-400-normal.woff2"
      ]
    }
  ],
  "fontFamily": "YourFont",
  "name": "Your Font",
  "slug": "your-font"
}
```

Guidelines:

* `slug` must be kebab-case.
* Register all required weights.
* Avoid unnecessary weights.

---

### Step 3 – Set as Default (Optional)

To set as global default:

```
styles → typography → fontFamily
```

Example:

```
"fontFamily": "var(--wp--preset--font-family--your-font)"
```

---

## Font Sizes

Font sizes are defined in:

```
cel-theme/theme.json → settings.typography.fontSizes
```

Rules:

* Use `rem` units.
* Prefer fluid typography where appropriate.
* Avoid fixed pixel (`px`) values.

Fluid sizes should define both `min` and `max` values.

---

## How to Use Fonts

### In Block Editor

Select a block → Typography settings → choose predefined font.

### In CSS

```
.my-element {
  font-family: var(--wp--preset--font-family--your-font);
}
```

Never use raw font-family strings in CSS.

---

## Checklist

* [ ] Font files stored locally
* [ ] WOFF2 format used
* [ ] Registered in theme.json
* [ ] No inline font-family used
* [ ] No external font loaders added
* [ ] Tested in editor and frontend

---

## Best Practices

* Keep font families minimal.
* Limit number of weights.
* Use semantic naming.
* Optimize fonts (subsetting) when scaling production.

---

## Official References

[https://developer.wordpress.org/themes/global-settings-and-styles/settings/typography/](https://developer.wordpress.org/themes/global-settings-and-styles/settings/typography/)
[https://web.dev/articles/optimize-webfont-loading](https://web.dev/articles/optimize-webfont-loading)
