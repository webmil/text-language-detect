Text Language Detect
============================

Detects the language of a given piece of text.

The package attempts to detect the language of a sample of text by correlating ranked 3-gram frequencies to a table of 3-gram frequencies of known languages.

It implements a version of a technique originally proposed by Cavnar & Trenkle (1994): "N-Gram-Based Text Categorization".

This is fork of http://pear.php.net/package/Text_LanguageDetect

Installation in Symfony 2 as service
------------------------------------

Add to your autoload:

    // app/autoload.php
    $loader->registerNamespaces(array(
        // ...
        'TextLanguageDetect'           => __DIR__.'/../vendor/text-language-detect/lib',
        // ...
    ));

Configure service:

    // app/config/config.yml
    services:
        language.detect:
            class: TextLanguageDetect\TextLanguageDetect


Omits languages
---------------
If you're only expecting a limited set of languages, this can greatly speed up processing

    // app/config/config.yml
    services:
        language.detect:
            class: TextLanguageDetect\TextLanguageDetect
            arguments: 
                - { languages: ['norwegian', 'russian', 'english', 'german', 'danish', 'swedish', 'spanish', 'italian'] }

Usage
-----
