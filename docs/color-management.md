# Color Management Policy

In the Celestial theme, color management is not done from the WordPress admin panel. All color settings are centrally managed via the theme file `theme/theme.json`, in full compliance with the official WordPress documentation. This is an intentional decision to preserve a uniform design and stability: content managers are allowed to work only with content, not with the visual style.

## Why we do this
- A unified design without palette drift across projects.
- Predictability and simpler maintenance (a single source of truth — theme.json).
- Reduced risk: editors cannot accidentally change brand colors.

## How it works
- Source of truth: `theme/theme.json` → `settings.color`.
- The palette is defined via `settings.color.palette` and is used site-wide through CSS variables like `var(--wp--preset--color--{slug})`.

### What the current settings disable
The following flags in `settings.color` are intentionally disabled to keep the design consistent:
- `custom: false` — prevents choosing arbitrary (custom) colors in the editor.
- `defaultPalette: false` — removes the default WordPress color palette.
- `text: false` — hides the text color control in the editor UI.
- `link: false` — hides the link color control in the editor UI.
- `background: false` — hides the background color control.
- `customGradient: false` — disallows creating custom gradients.
- `defaultGradients: false` — removes the default WordPress gradients.
- `customDuotone: false` — disallows custom duotone filters.
- `defaultDuotone: false` — removes default duotone presets.

This is done to prevent accidental deviations from the design system and ensure visual consistency across the site.

## Base palette (do not remove)
The theme already includes several key colors (for example: primary, secondary, accent, black, white, gray, gray-light, gray-dark). Do not remove them — they are used extensively in templates, blocks, and styles.

## Workflow for changing the palette
1. Open `theme/theme.json` and locate `settings.color.palette`.
2. Add/modify palette items using the following format:
   - `color`: HEX (for example, `#1E90FF`)
   - `name`: Human-readable name (for example, "Primary")
   - `slug`: Technical name in kebab-case (for example, `primary`)
3. Save the file and rebuild/refresh styles (if your project has a blocks build).
4. Verify usage:
   - In CSS: `color: var(--wp--preset--color--primary);`
   - In blocks/templates: choose the predefined colors from the palette.
5. Review key pages to ensure contrast and accessibility are acceptable.

### Tips
- Prefer semantic names (primary, accent) over purely visual ones (blue-500) when the color has a role.
- Keep the palette lean: typically 5–10 core tones plus grays are enough.
- If a color changes globally, change it only in theme.json; avoid local CSS overrides.

Detailed reference for color settings: https://developer.wordpress.org/themes/global-settings-and-styles/settings/color/
