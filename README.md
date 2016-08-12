# [LoremPixel][link-lorempixel] Twig Extension


[![Latest version][ico-version]][link-packagist]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This library integrates [LoremPixel][link-lorempixel] service into [Twig](http://twig.sensiolabs.org/). You can use it to generate random image urls that you can use as placeholders in your application.

## Installation

    composer require "davidepastore/lorempixel-twig-extension"

## Usage

Add `LoremPixelTwigExtension` to your Twig extensions:

```php
$twig->addExtension(new LoremPixelTwigExtension());
```

In the templates, you then just call `<img src="{{ lorempixel() }}">`.

You can use different parameters for this function in this order:

| Name | Type | Description | Default | Example |
| --- | --- | --- | --- | --- |
| gray | boolean | Is it a gray image? | `false` | `lorempixel(true)` |
| width | int | The width of the image. | `400` | `lorempixel(true, 500)` |
| height | int | The height of the image. | `200` | `lorempixel(true, 500, 300)` |
| category | string | The category of the image. You can find all supported categories [here][link-lorempixel]. | `null` | `lorempixel(true, 500, 300, 'cats')` |
| number | int | The number of the image from the given category. | `null` | `lorempixel(true, 500, 300, 'cats', 2)` |
| text | string | The custom text to add to the image. | `null` | `lorempixel(true, 500, 300, 'cats', 2, 'Dummy Text')` |


An example with all the parameters could be:

```php
<img src="{{ lorempixel(true, 500, 300, 'cats', 2, 'Dummy Text') }}">
```

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Davide Pastore](https://github.com/davidepastore)

## License

This library is released under the [MIT license](http://opensource.org/licenses/MIT).


[ico-version]: https://img.shields.io/packagist/v/DavidePastore/Lorem-Pixel-Extension.svg?style=flat-square
[ico-travis]: https://travis-ci.org/DavidePastore/Lorem-Pixel-Extension.svg?branch=master
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DavidePastore/Lorem-Pixel-Extension.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/davidepastore/Lorem-Pixel-Extension.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/davidepastore/lorem-pixel-extension.svg?style=flat-square

[link-lorempixel]: http://lorempixel.com/
[link-packagist]: https://packagist.org/packages/davidepastore/lorem-pixel-extension
[link-travis]: https://travis-ci.org/DavidePastore/Lorem-Pixel-Extension
[link-scrutinizer]: https://scrutinizer-ci.com/g/DavidePastore/Lorem-Pixel-Extension/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DavidePastore/Lorem-Pixel-Extension
[link-downloads]: https://packagist.org/packages/davidepastore/lorem-pixel-extension
