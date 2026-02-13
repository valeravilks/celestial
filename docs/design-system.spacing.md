# Spacing

This document defines how spacing tokens are managed inside the Celestial FSE Starter Kit.

All spacing configuration is controlled via `cel-theme/theme.json`.

---

## Purpose

To define rules and workflow for managing spacing tokens while preserving a consistent and fluid design system.

---

## Rules

* Spacing values are defined **only** in `cel-theme/theme.json`.
* Default WordPress spacing sizes are disabled.
* Custom spacing input in the editor is disabled.
* Do not use raw `px` values in blocks or CSS.
* Prefer `rem` or `clamp()` for responsive spacing.
* CSS must reference spacing via preset variables:
  `var(--wp--preset--spacing--{slug})`
* Keep the spacing scale minimal and predictable.

---

## Configuration Structure

Spacing settings are defined in:

```
cel-theme/theme.json → settings.spacing
```

Example structure:

```
{
  "settings": {
    "spacing": {
      "defaultSpacingSizes": false,
      "customSpacingSize": false,
      "spacingSizes": []
    }
  }
}
```

---

## How to Add or Modify a Spacing Token

### Step 1 – Open theme.json

Navigate to:

```
cel-theme/theme.json → settings.spacing.spacingSizes
```

---

### Step 2 – Add or Modify Token

Format:

```
{
  "name": "Large",
  "size": "clamp(30px, 5vw, 50px)",
  "slug": "60"
}
```

Guidelines:

* `name` → Human readable label.
* `slug` → Machine-readable identifier.
* `size` → Prefer `rem` or `clamp()`.
* Avoid hardcoded pixel-only values.

---

## How to Use Spacing

### In Block Editor

Select a block → Spacing controls → choose predefined token.

### In CSS

```
.my-element {
  padding: var(--wp--preset--spacing--60);
}
```

Never use raw numeric spacing values directly in CSS.

---

## Checklist

* [ ] No inline `px` spacing introduced
* [ ] Token defined in theme.json
* [ ] Custom spacing disabled in editor
* [ ] Used via CSS variable
* [ ] Responsive behaviour verified

---

## Best Practices

* Maintain a clear numeric progression.
* Limit total spacing tokens (5–10 recommended).
* Prefer fluid spacing via `clamp()`.
* Avoid creating one-off spacing values.

---

## Official References

[https://developer.wordpress.org/themes/global-settings-and-styles/settings/spacing](https://developer.wordpress.org/themes/global-settings-and-styles/settings/spacing)
[https://developer.mozilla.org/en-US/docs/Web/CSS/clamp](https://developer.mozilla.org/en-US/docs/Web/CSS/clamp)
