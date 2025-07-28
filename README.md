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

## Documentation

For a complete list of changes and features, please see the [Changelog](CHANGELOG.md).
