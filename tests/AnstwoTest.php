<?php
use PHPUnit\Framework\TestCase;
require 'anstwo.php';
 class AnstwoTest extends TestCase
{
    public function testPrintDepth()
    {
		echo "\r\n";
		printDepth($GLOBALS['a']);
    }
}