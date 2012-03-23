<?php
/**
 * Demonstrates how to use ISO language codes.
 *
 * The "name mode" changes the way languages are accepted and returned.
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


//will output the ISO 639-1 two-letter language code
// "de"
$l->setNameMode(2);
echo $l->detectSimple('Das ist ein kleiner Text') . "\n";

//will output the ISO 639-2 three-letter language code
// "deu"
$l->setNameMode(3);
echo $l->detectSimple('Das ist ein kleiner Text') . "\n";

?>
