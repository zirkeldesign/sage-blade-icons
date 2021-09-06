# Sage Blade Icons

![Packagist Version](https://img.shields.io/packagist/v/zirkeldesign/sage-blade-icons.svg?style=flat-square)
![Packagist](https://img.shields.io/packagist/dt/zirkeldesign/sage-blade-icons.svg?style=flat-square)

Sage Blade Icons is a simple Composer package / wrapper to use [Blade Icons](https://github.com/blade-ui-kit/blade-icons) with [Sage 10](https://github.com/roots/sage).

## Requirements

- [Sage](https://github.com/roots/sage) >= 10.0
- [PHP](https://secure.php.net/manual/en/install.php) >= 7.3
- [Composer](https://getcomposer.org/download/)

## Installation

Install via package Composer:

```sh
composer require zirkeldesign/sage-blade-icons
```

This package comes with a build-in dependency for the base package [Blade Icons](https://github.com/blade-ui-kit/blade-icons). To use a specific [icon package](https://github.com/blade-ui-kit/blade-icons#icon-packages) (i.e. [Blade Heroicons](https://github.com/blade-ui-kit/blade-heroicons)), you'll need to require the package via Composer:

```sh
composer require blade-ui-kit/blade-heroicons
```

After this you should be able to use a package-depended [Blade component](https://laravel.com/docs/8.x/blade#components) to include your icon in the Blade views. I.e.

```blade
<x-heroicon-o-adjustments class="w-6 h-6 text-gray-500"/>
```

## Bug Reports

If you discover a bug in Sage Blade Icons, please [open an issue](https://github.com/zirkeldesign/sage-blade-icons/issues).

## License

Sage Blade Icons is provided under the [MIT License](https://github.com/zirkeldesign/sage-blade-icons/blob/master/LICENSE.md).
