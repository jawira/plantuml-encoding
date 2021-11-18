PlantUML text encoding functions
================================

**This library
exposes [PlantUML text encoding functions](https://plantuml.com/de/pte):**

- `encodep()`
- `encode6bit()`
- `append3bytes()`
- `encode64()`

ℹ️ Usually only **`encodep()`** is used.

[![Latest Stable Version](https://poser.pugx.org/jawira/plantuml-encoding/v)](//packagist.org/packages/jawira/plantuml-encoding)
[![Total Downloads](https://poser.pugx.org/jawira/plantuml-encoding/downloads)](//packagist.org/packages/jawira/plantuml-encoding)
[![License](https://poser.pugx.org/jawira/plantuml-encoding/license)](//packagist.org/packages/jawira/plantuml-encoding)
[![composer.lock](https://poser.pugx.org/jawira/plantuml-encoding/composerlock)](//packagist.org/packages/jawira/plantuml-encoding)
[![.gitattributes](https://poser.pugx.org/jawira/plantuml-encoding/gitattributes)](//packagist.org/packages/jawira/plantuml-encoding)
[![Issues](https://img.shields.io/github/issues/jawira/plantuml-encoding.svg?label=HuBoard&color=694DC2)](https://huboard.com/jawira/plantuml-encoding)




into this:

```
SyfFKj2rKt3CoKnELR1Io4ZDoSa70000
```

The advantage of the last encoding is that it is easier to use in URL:

<http://www.plantuml.com/plantuml/uml/SyfFKj2rKt3CoKnELR1Io4ZDoSa70000>

Usage
-----

[PlantUML](https://plantuml.com/) uses a _special encoding_ to transform an uml
text description like this:

You must import `encodep()` function before using it:

```php
<?php
use function Jawira\PlantUml\encodep;

$encode = encodep('Alice -> Bob: hello');
echo "http://www.plantuml.com/plantuml/uml/{$encode}";
```

⚠️ Since v1.0.0, `encodep()` function expects to receive an UTF-8 string.

💡 Only PHP >=5.6 allows importing functions, for PHP <=5.5 you have to use full
function's namespace.

Install
-------

```console
$ composer require jawira/plantuml-encoding
```

Contributing
------------

- If you liked this
  project, ⭐ star it on GitHub. [![GitHub Repo stars](https://img.shields.io/github/stars/jawira/plantuml-encoding?style=social)](https://github.com/jawira/plantuml-encoding)
- Or follow me on
  Twitter. [![Twitter Follow](https://img.shields.io/twitter/follow/jawira?style=social)](https://twitter.com/jawira)

Credits
-------

These functions are a copy/paste from <http://plantuml.com/code-php>.

***

Packages from jawira
--------------------

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
