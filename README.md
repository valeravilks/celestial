# Celestial FSE Starter Kit

A modular WordPress Full Site Editing (FSE) starter kit built with official WordPress tooling. This repository is a toolkit: it provides a clean baseline and working build/dev setup without prescribing a single methodology.

---

## Overview

Celestial separates concerns into practical layers that you can keep, merge, or reorganize for your own projects:

* **Theme** – Presentation (templates, patterns, styles)
* **Blocks** – Custom blocks and block assets
* **Core** – Site functionality (CPT, meta, integrations, logic)
* **Editor** – Optional editor behavior

---

## Project Structure

```
cel-theme/     → FSE Theme (presentation layer)
cel-core/      → Core plugin (PHP modules + block/editor assets)
```

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
npm run wp:start
```

WordPress will be available at:

* URL: [http://localhost:8888](http://localhost:8888)
* Username: admin
* Password: password

To stop or destroy the environment:

```
npm run wp:stop
npm run wp:destroy
```

These scripts set `COMPOSE_PROJECT_NAME` based on the `name` in `package.json`, so the Docker Compose project name matches the repo package name.

---

## 2. Install Core Plugin dependencies

```
composer install
```

---

## 3. Build blocks and editor assets

From the repository root:

```
npm install
npm run start
```

This will:

* Compile block and editor assets from `cel-core`
* Watch for changes
* Automatically rebuild on updates

---

# Notes

* The current build pipeline expects blocks in `cel-core/blocks` and editor assets in `cel-core/editor`.
* If you prefer separate plugins (e.g., `cel-blocks`, `cel-editor`), you can split them and adjust scripts and `wp-env` config to match.

---

# Changelog

See `CHANGELOG.md` for release notes.
