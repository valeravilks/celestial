# Theme Font Settings Documentation

This document explains how to add and work with fonts in the Celestial FSE Starter Kit.

## Overview

The font settings in `theme.json` allow you to define custom fonts for your WordPress theme. These fonts will be available in the block editor and can be used throughout your site.

## How to Add Fonts to Your Project

Adding a new font to your WordPress theme involves two main steps:

1. **Add font files to the theme assets**:
   - Place your font files (preferably in WOFF2 format) in the `theme/assets/fonts/[font-name]/` directory
   - Use a consistent naming convention like `[font-name]-[weight]-[style].woff2`

2. **Configure the font in theme.json**:
   - Open your `theme.json` file
   - Add the font configuration to the `settings.typography.fontFamilies` array:

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
       },
       {
         "fontFamily": "YourFont",
         "fontStyle": "normal",
         "fontWeight": "700",
         "src": [
           "file:./assets/fonts/your-font/your-font-700-normal.woff2"
         ]
       }
     ],
     "fontFamily": "YourFont",
     "name": "Your Font",
     "slug": "your-font"
   }
   ```

   - To set it as the default font, add to the `styles.typography` section:

   ```
   "styles": {
     "typography": {
       "fontFamily": "var(--wp--preset--font-family--your-font)",
       "fontStyle": "normal",
       "fontWeight": "400"
     }
   }
   ```

## Current Font Configuration

The current theme includes the Inter font family with the following weights:
- Regular (400)
- Bold (700)

## How to Use Theme Fonts

### In the Block Editor

1. Select a block in the editor
2. Open the block settings in the sidebar
3. Find the typography settings
4. Choose one of the predefined fonts from your theme

### In CSS

You can reference theme fonts in your CSS using WordPress-generated CSS variables:

For example:

```
/* Example using your custom font */
.my-element {
    font-family: var(--wp--preset--font-family--your-font);
}

/* Example using the Inter font that's included in the theme */
.another-element {
    font-family: var(--wp--preset--font-family--inter);
}
```

The naming pattern for the CSS variable is: `--wp--preset--font-family--[font-slug]`

## Future Optimization

In the future, font files should be optimized by creating subsets that include only the necessary characters for better performance. This optimization is not implemented in the current basic setup.

## Additional Resources

- [WordPress Theme.json Documentation - Typography](https://developer.wordpress.org/themes/global-settings-and-styles/settings/typography/)
- [Web Font Optimization](https://web.dev/articles/optimize-webfont-loading)
