# Celestial FSE Starter Kit

A modular WordPress Full Site Editing (FSE) starter kit built according to official WordPress architecture principles.

---

## Overview

Celestial is a structured WordPress starter kit that separates concerns into clear layers:

* **Theme** – Presentation layer (design and layout)
* **Blocks Plugin** – Custom blocks (React / Block API)
* **Core Plugin** – Site functionality (CPT, meta, integrations, logic)
* **Editor Layer** – Editor behaviour and policies (optional)

This separation ensures:

* Themes can be switched without breaking functionality
* Business logic does not live inside the theme
* Custom blocks remain reusable
* Editor behaviour is controlled in a structured way

---

## Project Structure

```
cel-theme/     → FSE Theme (presentation layer)
cel-blocks/    → Custom blocks (create-block)
cel-core/      → Core functionality (PHP modules)
cel-editor/    → Editor behaviour (optional, can be merged into core)
```

---

# 1. Theme (`cel-theme`)

The theme is responsible only for presentation.

It contains:

* `theme.json`
* Templates and template parts
* Block style variations
* Theme patterns
* CSS
* Optional editor styling

The theme must not contain:

* CPT registrations
* Business logic
* Required editor policies
* Functional logic

If the theme is deactivated, the site must continue functioning (only appearance changes).

---

# 2. Blocks Plugin (`cel-blocks`)

Contains custom blocks created using:

* `@wordpress/create-block`
* React
* WordPress Block API
* Interactivity API (if used)

Each block lives inside this plugin and is compiled via npm.

All new blocks must be added only in `cel-blocks/src` using the official `@wordpress/create-block` tool.
If a block needs additional npm packages, add them to `cel-blocks/package.json`.

### Responsibilities

* Register blocks
* Provide editor and frontend scripts
* Provide block-specific styles
* Handle block rendering logic

Blocks must work independently from the theme.

---

# 3. Core Plugin (`cel-core`)

Contains all site functionality implemented in PHP.

### Responsibilities

* Custom Post Types
* Taxonomies
* Meta fields
* Business logic
* Integrations
* Site-level rules
* Editor policies (if not separated)

Each feature is organized as a module inside its own directory.

Example structure:

```
src/
  Modules/
    LandingPages/
      Module.php
      PostType.php
      Meta.php
```

Each module contains everything related to one functional feature.

---

# 4. Editor Layer (`cel-editor`) *(Optional)*

Used for:

* Allowed block restrictions
* Disabling remote patterns
* Formatting Toolbar extensions
* Editor behaviour policies

This layer modifies editor behaviour but does not affect frontend styling.

It can be merged into `cel-core` as a module if desired.

---

# Development Environment

This project uses `wp-env` for local development.

## Requirements

* Docker installed and running
* Node.js installed
* Composer installed

---

# Setup Instructions

## 1. Start WordPress environment

```
wp-env start
```

WordPress will be available at:

* URL: [http://localhost:8888](http://localhost:8888)
* Username: admin
* Password: password

---

## 2. Install and run Blocks Plugin

```
cd cel-blocks
npm install
npm run start
```

This will:

* Compile block assets
* Watch for changes
* Automatically rebuild on file updates

---

## 3. Install Core Plugin

```
cd cel-core
composer install
```

If Core contains JS or CSS for admin:

```
npm install
npm run build
```

---

## 4. Install Editor Layer (if used)

```
cd cel-editor
composer install
npm install
npm run build
```

---

# Theme Configuration

The Celestial Theme includes:

* Custom color palette
* Disabled default WordPress palette
* Disabled custom colors
* Fluid typography
* Custom spacing scale using `clamp()`
* Removed default core block patterns
* Design-controlled editor settings

All design decisions are centralized in `theme.json`.

---

# Philosophy

Celestial follows strict separation of concerns:

* **Theme = How it looks**
* **Blocks = What content can be built**
* **Core = What the site can do**
* **Editor = How content is edited**

No business logic lives inside the theme.

---

# Documentation


## Design System
- [Color Management](docs/design-system.colors.md)
- [Typography](docs/design-system.typography.md)
- [Spacing](docs/design-system.spacing.md)
- [Custom Blocks](docs/custom-blocks.md)

See the [`docs`](docs) directory for full development guides.
---

# Contributing

When adding new functionality:

* If it affects visual appearance → Theme
* If it adds a new block → Blocks plugin
* If it adds site functionality → Core plugin
* If it modifies editor behaviour → Editor/Core policy

---

# Changelog

See `CHANGELOG.md` for release notes.
