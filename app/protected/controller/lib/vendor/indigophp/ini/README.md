# Ini Tools

[![Latest Version](https://img.shields.io/github/release/indigophp/ini.svg?style=flat-square)](https://github.com/indigophp/ini/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/indigophp/ini.svg?style=flat-square)](https://travis-ci.org/indigophp/ini)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/indigophp/ini.svg?style=flat-square)](https://scrutinizer-ci.com/g/indigophp/ini)
[![Quality Score](https://img.shields.io/scrutinizer/g/indigophp/ini.svg?style=flat-square)](https://scrutinizer-ci.com/g/indigophp/ini)
[![Total Downloads](https://img.shields.io/packagist/dt/indigophp/ini.svg?style=flat-square)](https://packagist.org/packages/indigophp/ini)

**Provides better INI parsing and rendering.**


## Install

Via Composer

``` bash
$ composer require indigophp/ini
```

## Usage

Features:

- Throws exceptions instead of errors
- Converts special values (integer, boolean values)
- Renders an array as INI string
- Control rendered output by passing flags to the renderer


## Testing

``` bash
$ composer test
```


## Credits

This library is heavily inspired by [piwik/ini](https://github.com/piwik/component-ini).

Differences:

- License
- File actions are not available in this library, that's your responsibility
- Fallback implementation is provided by a transparent compatibility layer (WIP)
- Provides type conversion like in PHP 5.6.1
- Provides different ways for rendering array and boolean values
- Parser always uses raw scanner mode


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
