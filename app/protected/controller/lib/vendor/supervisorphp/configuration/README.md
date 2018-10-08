# Supervisor Configuration

[![Latest Version](https://img.shields.io/github/release/supervisorphp/configuration.svg?style=flat-square)](https://github.com/supervisorphp/configuration/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/supervisorphp/configuration.svg?style=flat-square)](https://travis-ci.org/supervisorphp/configuration)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/supervisorphp/configuration.svg?style=flat-square)](https://scrutinizer-ci.com/g/supervisorphp/configuration)
[![Quality Score](https://img.shields.io/scrutinizer/g/supervisorphp/configuration.svg?style=flat-square)](https://scrutinizer-ci.com/g/supervisorphp/configuration)
[![Total Downloads](https://img.shields.io/packagist/dt/supervisorphp/configuration.svg?style=flat-square)](https://packagist.org/packages/supervisorphp/configuration)

**Manage Supervisor configuration in PHP.**


## Install

Via Composer

``` bash
$ composer require supervisorphp/configuration
```

## Usage

Create a configuration using the builder.

``` php
use Supervisor\Configuration\Configuration;
use Supervisor\Configuration\Section\Supervisord;
use Supervisor\Configuration\Section\Program;
use Indigo\Ini\Renderer;

$config = new Configuration;
$renderer = new Renderer;

$section = new Supervisord(['identifier' => 'supervisor']);
$config->addSection($section);

$section = new Program('test', ['command' => 'cat']);
$config->addSection($section);

echo $renderer->render($config->toArray());
```

The following sections are available in this pacakge:

- _Supervisord_
- _Supervisorctl_
- _UnixHttpServer_
- _InetHttpServer_
- _Includes_**
- _Group_*
- _Program_*
- _EventListener_*
- _FcgiProgram_*


*__Note:__ These sections has to be instantiated with a name and optionally a properties array:

``` php
$section = new Program('test', ['command' => 'cat']);
```

**__Note:__ The keyword `include` is reserved in PHP, so the class name is `Includes`, but the section name is still `include`.


### Existing configuration

You can parse your existing configuration, and use it as a `Configuration` object.

``` php
use Supervisor\Configuration\Configuration;
use Supervisor\Configuration\Loader\IniFileLoader;

$parser = new File('/etc/supervisor/supervisord.conf');

$configuration = new Configuration;

// argument is optional, returns a new Configuration object if not passed
$parser->parse($configuration);
```

Available parsers:

- _File_
- _Filesystem_ (Using [league/flysystem](https://github.com/thephpleague/flysystem))
- _Text_


### Writting configuration

You can use `Writer`s to write configuration to various destinations.

``` php
use Supervisor\Configuration;
use Supervisor\Configuration\Writer\File;

// As a second parameter you can optionally pass an instance of Supervisor\Configuration\Renderer
$writer = new File('/etc/supervisor/supervisord.conf');

$configuration = new Configuration;

$writer->write($configuration);
```

Available writers:

- _File_
- _Filesystem_ (Using [league/flysystem](https://github.com/thephpleague/flysystem))


You can find detailed info about properties for each section here:
[http://supervisord.org/configuration.html](http://supervisord.org/configuration.html)


## Testing

``` bash
$ composer test
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Márk Sági-Kazár](https://github.com/sagikazarmark)
- [All Contributors](https://github.com/supervisorphp/configuration/contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
