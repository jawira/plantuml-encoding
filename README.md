# PlantUML text encoding functions

**This library
exposes [PlantUML text encoding functions](https://plantuml.com/de/pte):**

- `encodep()`
- `encode6bit()`
- `append3bytes()`
- `encode64()`

**ℹ️ Usually only `encodep()` is used.**

[![Packagist Version](https://img.shields.io/packagist/v/jawira/plantuml-encoding?style=for-the-badge)](//packagist.org/packages/jawira/plantuml-encoding)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/jawira/plantuml-encoding?style=for-the-badge)](//packagist.org/packages/jawira/plantuml-encoding)
[![Packagist Downloads](https://img.shields.io/packagist/dt/jawira/plantuml-encoding?style=for-the-badge)](//packagist.org/packages/jawira/plantuml-encoding)
[![Packagist License](https://img.shields.io/packagist/l/jawira/plantuml-encoding?style=for-the-badge)](//packagist.org/packages/jawira/plantuml-encoding)

## Usage

```php
<?php
use function Jawira\PlantUml\encodep;

$diagram = <<<TXT
@startuml
Bob -> Alice : hello
@enduml
TXT;

$encode = encodep($diagram); // SyfFKj2rKt3CoKnELR1Io4ZDoSa70000

echo "https://www.plantuml.com/plantuml/uml/$encode";
```

Output: <https://www.plantuml.com/plantuml/uml/SyfFKj2rKt3CoKnELR1Io4ZDoSa70000>

⚠️ Since v1.0.0, `encodep()` function expects to receive an UTF-8 string.

## Install

```console
$ composer require jawira/plantuml-encoding
```

## Contributing

- If you liked this
  project, ⭐ star it on GitHub. [![GitHub Repo stars](https://img.shields.io/github/stars/jawira/plantuml-encoding?style=social)](https://github.com/jawira/plantuml-encoding)
- Or follow me on
  Twitter. [![Twitter Follow](https://img.shields.io/twitter/follow/jawira?style=social)](https://twitter.com/jawira)

## Credits

These functions are a copy/paste from <http://plantuml.com/code-php>.

***

## Packages from jawira

<dl>

<dt>
    <a href="https://packagist.org/packages/jawira/plantuml">jawira/plantuml
    <img alt="GitHub stars" src="https://badgen.net/github/stars/jawira/plantuml?icon=github"/></a>
</dt>
<dd>Provides PlantUML executable and plantuml.jar</dd>

<dt>
    <a href="https://packagist.org/packages/jawira/case-converter">jawira/case-converter
    <img alt="GitHub stars" src="https://badgen.net/github/stars/jawira/case-converter?icon=github"/></a>
</dt>
<dd>Convert strings between 13 naming conventions: Snake case, Camel case,
  Pascal case, Kebab case, Ada case, Train case, Cobol case, Macro case,
  Upper case, Lower case, Sentence case, Title case and Dot notation.
</dd>

<dt>
    <a href="https://packagist.org/packages/jawira/emoji-catalog">jawira/emoji-catalog
    <img alt="GitHub stars" src="https://badgen.net/github/stars/jawira/emoji-catalog?icon=github"/></a>
</dt>
<dd>Get access to +3000 emojis as class constants.</dd>

<dt><a href="https://packagist.org/packages/jawira/">more...</a></dt>
</dl>
