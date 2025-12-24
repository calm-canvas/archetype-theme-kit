# Archetype Theme Kit

A high-performance PHP library designed to streamline WordPress theme development by providing a standardized foundation of core functions, global constants, and reusable utilities.

## Introduction

Archetype Theme Kit is a comprehensive toolkit built for WordPress theme developers who prioritize clean code architecture, consistency, and performance. It abstracts common theme development patterns into reusable, well-tested components that can be leveraged across multiple projects. By providing a structured foundation with dependency injection, caching utilities, and internationalization support, Archetype Theme Kit enables developers to focus on building unique theme features rather than reinventing foundational components.

## Features

- **Dependency Injection Container** - Aura\DI-powered service container for managing dependencies and ensuring loose coupling between components
- **Transient Caching** - Built-in cache factory and transient management for optimized performance
- **Comment Utilities** - WordPress comment-related utilities and data structures for simplified comment handling
- **Global Constants** - Centralized constants for filter hooks, HTML attributes, internationalization, and duration values
- **Helper Functions** - Utility classes for BEM CSS naming conventions and data manipulation
- **Internationalization (i18n)** - Complete i18n support with Dictionary and Translator implementations for multilingual themes
- **Contract Interfaces** - Well-defined interfaces for extensibility (caching, widgets, i18n, helpers)
- **Widget Abstractions** - WordPress widget abstractions and streaming widget implementations for simplified widget development
- **Design Patterns** - Reusable design patterns including Singleton for common use cases
- **PSR-4 Autoloading** - Standard PSR-4 namespace autoloading for seamless integration

## Installation

Install via Composer:

```bash
composer require your-vendor/archetype-theme-kit
```

Then include the Composer autoloader in your WordPress theme:

```php
require_once get_template_directory() . '/vendor/autoload.php';
```

## Usage

Access services through the Engine's static resolver:

```php
use ArchetypeThemeKit\Engine;

$service = Engine::resolve('service-name');
```

## Requirements

- **PHP**: 7.4 or higher
- **WordPress**: Compatible with recent WordPress versions
- **Composer**: For dependency management

## License

GPLv3
