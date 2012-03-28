<?php

/**
 * example usage (CLI)
 *
 * @package Text_LanguageDetect
 * @version CVS: $Id: example_clui.php 322305 2012-01-15 00:04:17Z clockwerx $
 */

spl_autoload_register(function($class)
{
    $file = __DIR__.'/../lib/'.strtr($class, '\\', '/').'.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
});

use TextLanguageDetect;

$l = new TextLanguageDetect\TextLanguageDetect;

$stdin = fopen('php://stdin', 'r');

echo "Supported languages:\n";
$langs = $l->getLanguages();
sort($langs);
echo join(', ', $langs);

echo "\ntotal ", count($langs), "\n\n";

while ($line = fgets($stdin)) {
    $result = $l->detect($line, 4);
    print_r($result);
    $blocks = $l->detectUnicodeBlocks($line, true);
    print_r($blocks);
}

fclose($stdin);
unset($l);

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

?>
