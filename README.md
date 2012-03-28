Text Language Detect
====================

Detects the language of a given piece of text.

The package attempts to detect the language of a sample of text by correlating ranked 3-gram frequencies to a table of 3-gram frequencies of known languages.

It implements a version of a technique originally proposed by Cavnar & Trenkle (1994): "N-Gram-Based Text Categorization".

This is a fork of [Text_LanguageDetect](http://pear.php.net/package/Text_LanguageDetect) 0.3.0 (alpha).

Dependencies:
-------------

    PHP Version: PHP 5.3 or newer
    PHP Extension: pcre
    PHP Extension: mbstring (optional)

Usage example
-------------

```php
<?php

use TextLanguageDetect\TextLanguageDetect;
use TextLanguageDetect\LanguageDetect\TextLanguageDetectException;

$l = new TextLanguageDetect();

echo "Supported languages:\n";
try {
    $langs = $l->getLanguages();
    sort($langs);
    echo implode(', ', $langs) . "\n\n";
} catch (TextLanguageDetectException $e) {
    die($e->getMessage());
}

$text = <<<EOD
Hallo! Das ist ein Text in deutscher Sprache.
Mal sehen, ob die Klasse erkennt, welche Sprache das hier ist.
EOD;

try {
    //return 2-letter language codes only
    $l->setNameMode(2);

    $result = $l->detect($text, 4);
    print_r($result);
} catch (TextLanguageDetectException $e) {
    die($e->getMessage());
}
```
Output:

    // output
    Supported languages:
    albanian, arabic, azeri, bengali, bulgarian, cebuano, croatian, czech,
    danish, dutch, english, estonian, farsi, finnish, french, german, hausa,
    hawaiian, hindi, hungarian, icelandic, indonesian, italian, kazakh, kyrgyz,
    latin, latvian, lithuanian, macedonian, mongolian, nepali, norwegian, pashto,
    pidgin, polish, portuguese, romanian, russian, serbian, slovak, slovene, somali,
    spanish, swahili, swedish, tagalog, turkish, ukrainian, urdu, uzbek, vietnamese,
    welsh

    Array
    (
        [de] => 0.40703703703704
        [nl] => 0.2880658436214
        [en] => 0.28333333333333
        [da] => 0.23452674897119
    )

Author
------

Nicholas Pisarro - infinityminusnine+pear@gmail.com

License
-------

http://www.debian.org/misc/bsd.license BSD