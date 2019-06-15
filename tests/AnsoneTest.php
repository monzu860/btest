<?php
use PHPUnit\Framework\TestCase;
require 'ansone.php';
class AnsoneTest extends TestCase
{
    public function testPrintDepth()
    {
		echo "\r\n";
		printDepth($GLOBALS['a']);
    }
}