<?php

namespace TextLanguageDetect;

use TextLanguageDetect\LanguageDetect\TextLanguageDetectISO639;

class TextLanguageDetectISO639Test extends \PHPUnit_Framework_TestCase
{
    public function testNameToCode2()
    {
        $this->assertEquals(
            'de', 
            TextLanguageDetectISO639::nameToCode2('german')
        );
    }

    public function testNameToCode2Fail()
    {
        $this->assertNull(
            TextLanguageDetectISO639::nameToCode2('doesnotexist')
        );
    }

    public function testNameToCode3()
    {
        $this->assertEquals(
            'fra', 
            TextLanguageDetectISO639::nameToCode3('french')
        );
    }

    public function testNameToCode3Fail()
    {
        $this->assertNull(
            TextLanguageDetectISO639::nameToCode3('doesnotexist')
        );
    }

    public function testCode2ToName()
    {
        $this->assertEquals(
            'english', 
            TextLanguageDetectISO639::code2ToName('en')
        );
    }

    public function testCode2ToNameFail()
    {
        $this->assertNull(
            TextLanguageDetectISO639::code2ToName('nx')
        );
    }

    public function testCode3ToName()
    {
        $this->assertEquals(
            'romanian', 
            TextLanguageDetectISO639::code3ToName('rom')
        );
    }

    public function testCode3ToNameFail()
    {
        $this->assertNull(
            TextLanguageDetectISO639::code3ToName('nxx')
        );
    }

}