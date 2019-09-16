PlantUML encoding functions
=========================== 

This library exposes the PHP implementation of four *PlantUML encoding functions*:

- `encodep()`
- `encode6bit()`
- `append3bytes()`
- `encode64()`

Usually only `encodep()` is used.

[![Latest Stable Version](https://poser.pugx.org/jawira/plantuml-encoding/v/stable)](https://packagist.org/packages/jawira/plantuml-encoding)
[![License](https://poser.pugx.org/jawira/plantuml-encoding/license)](https://packagist.org/packages/jawira/plantuml-encoding)
[![Total Downloads](https://poser.pugx.org/jawira/plantuml-encoding/downloads)](https://packagist.org/packages/jawira/plantuml-encoding)
[![Monthly Downloads](https://poser.pugx.org/jawira/plantuml-encoding/d/monthly)](https://packagist.org/packages/jawira/plantuml-encoding)
[![Daily Downloads](https://poser.pugx.org/jawira/plantuml-encoding/d/daily)](https://packagist.org/packages/jawira/plantuml-encoding)
[![PHPPackages Rank](http://phppackages.org/p/jawira/plantuml-encoding/badge/rank.svg)](http://phppackages.org/p/jawira/plantuml-encoding)
[![PHPPackages Referenced By](http://phppackages.org/p/jawira/plantuml-encoding/badge/referenced-by.svg)](http://phppackages.org/p/jawira/plantuml-encoding)
[![composer.lock](https://poser.pugx.org/jawira/plantuml-encoding/composerlock)](https://packagist.org/packages/jawira/plantuml-encoding)
[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/jawira/plantuml-encoding.svg)](http://isitmaintained.com/project/jawira/plantuml-encoding "Average time to resolve an issue")
[![Percentage of issues still open](http://isitmaintained.com/badge/open/jawira/plantuml-encoding.svg)](http://isitmaintained.com/project/jawira/plantuml-encoding "Percentage of issues still open")
[![PDS Skeleton](https://img.shields.io/badge/pds-skeleton-blue.svg?style=flat-square)](https://github.com/php-pds/skeleton)
[![Issues](https://huboard.com/jawira/plantuml-encoding/)](https://huboard.com/jawira/plantuml-encoding)

Purpose
-------

[PlantUML] uses a _special encoding_ to transform an uml text description like 
this:

```plantuml
Bob -> Alice : hello
```

into this:

```
SyfFKj2rKt3CoKnELR1Io4ZDoSa70000
```

The advantage of the last encoding is that it is easier to use in URL:

<http://www.plantuml.com/plantuml/uml/SyfFKj2rKt3CoKnELR1Io4ZDoSa70000>

Install
-------

Install using Composer:

```console
$ composer require jawira/plantuml-encoding
```

Usage
-----

You must import `encodep()` function before using it:

```php
<?php
require 'vendor/autoload.php';

use function Jawira\PlantUml\encodep;

$encode = encodep('Alice -> Bob: hello');
echo "http://www.plantuml.com/plantuml/uml/{$encode}";
```

💡 Only PHP 5.6+ allows importing functions, for versions < PHP 5.6 you have to
use full function's namespace.

⚠️ Since v1.0.0, `encodep()` function expects to receive an UTF-8 string.

More examples:

- [resources/examples/example-1.php]()
- [resources/examples/example-2.php]()

Credits
-------

These functions are a copy/paste from <http://plantuml.com/code-php>.

***

Packages from jawira
--------------------

<dl>

<dt><a href="https://packagist.org/packages/jawira/plantuml">jawira/plantuml</a> (library)</dt>
<dd>Provides PlantUML integration: plantuml executable and plantuml.jar</dd>

<dt><a href="https://packagist.org/packages/jawira/emoji-catalog">jawira/emoji-catalog</a> (library)</dt>
<dd>Get access to +3000 emojis as class constants.</dd>

<dt><a href="https://packagist.org/packages/jawira/case-converter">jawira/case-converter</a> (library)</dt>
<dd>Convert strings between 13 naming conventions: Snake case, Camel case,
  Pascal case, Kebab case, Ada case, Train case, Cobol case, Macro case,
  Upper case, Lower case, Sentence case, Title case and Dot notation.
</dd>

<dt><a href="https://packagist.org/packages/jawira/">more...</a></dt>
</dl>

[PlantUML]: http://plantuml.com/
