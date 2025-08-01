# Celestial FSE Starterkit

A WordPress Full Site Editing starter kit that provides a foundation for building modern WordPress themes and plugins.

## Introduction

Celestial FSE is a comprehensive starter kit for WordPress development that leverages the power of Full Site Editing (FSE). FSE is a new approach to WordPress theme development that allows users to visually edit all parts of their site using blocks, including headers, footers, and other template parts.

This starter kit includes:
- A custom FSE theme that supports modern WordPress site building
- Custom blocks developed with React and the WordPress Block API
- Block scaffolding using [@wordpress/create-block](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/)
- A plugin structure for extending WordPress functionality
- Local development environment configuration using wp-env
- CI/CD integration with CircleCI for automated linting and deployment
- Custom color palette configuration with theme.json

## Development Environment

This project uses [wp-env](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/) for local WordPress development. wp-env provides a quick and easy way to create a local WordPress environment using Docker.

To set up the local development environment:

1. Make sure you have [Docker](https://www.docker.com/) installed and running
2. Install wp-env globally:
   ```
   npm install -g @wordpress/env
   ```
3. Start the environment:
   ```
   wp-env start
   ```

The local WordPress site will be available at http://localhost:8888 (default credentials: admin/password).

## Quick Start

To get started with development:

1. Navigate to the `blocks` directory:
   ```
   cd blocks
   ```

2. Install dependencies:
   ```
   npm install
   ```

3. Start the development server:
   ```
   npm run start
   ```

This will compile your blocks and watch for changes. The blocks in this project are scaffolded using [@wordpress/create-block](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/), which provides a standardized way to create custom WordPress blocks.

## Project Setup

When setting up a new project based on this starter kit, you'll need to configure several aspects to match your project requirements:

### Theme Color Settings

The starter kit includes a customizable color palette defined in the `theme.json` file. When creating a new project, you should update these color settings to match your project's brand colors.

For detailed instructions on how to modify the color palette, add new colors, and use them in your project, see the [Theme Color Settings Documentation](docs/theme-color-settings.md).

### Theme Font Settings

The starter kit allows you to customize fonts used in your project. You can add custom fonts to your theme by placing font files in the theme assets directory and configuring them in the `theme.json` file.

For instructions on how to add and configure fonts in your project, see the [Theme Font Settings Documentation](docs/theme-font-settings.md).

> **TODO:** In future updates, implement font optimization by creating subsets that include only necessary characters for better performance.

## CI/CD Integration

This project includes CI/CD integration with CircleCI for automated linting and deployment workflows. The configuration enables:

- Automated deployment to WP Engine environments (development, staging, production)
- Deployment triggered by specific tags or branch commits
- Automated building of custom blocks before deployment
- Proper file structure preparation for WP Engine environments

The deployment process is configured to work with WP Engine hosting and requires the following environment parameters:
- `prod_wpengine`: Production environment slug
- `stage_wpengine`: Staging environment slug
- `dev_wpengine`: Development environment slug

For more details on the CI/CD configuration, see the `.circleci/config.yml` file.

## Theme Configuration

The Celestial FSE Theme includes custom theme.json configuration with the following features:

- Custom color palette with a primary blue color
- Disabled default WordPress color palette
- Disabled custom color options to maintain design consistency
- Removed default block patterns by disabling core-block-patterns support

These configurations help maintain design consistency across the site while providing the necessary customization options for content creators.

## Documentation

For a complete list of changes and features, please see the [Changelog](CHANGELOG.md).
