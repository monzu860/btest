<?php
use PHPUnit\Framework\TestCase;
require 'functions.php';
 class FunctionTest extends TestCase
{
    public function testAddReturnsTheCorrectSum()
    {
		
        $this->assertEquals(4, add(2, 2));
    }
	
	public function testGetMaxReturnsTheCorrectMax()
    {
		
        $this->assertEquals(8, getMax([7,3,1,8,4]));
    }
	public function testGetMinReturnsTheCorrectMin()
    {
		
        $this->assertEquals(1, getMin([7,3,1,8,4]));
    }
	
	public function testSortingReturnsTheCorrectResult()
    {
		$arr1=[7,3,1,8,4];
        $this->assertEquals(json_encode([1,3,4,7,8]), json_encode(sorting($arr1)));
    }
	
	public function testIsObjectReturnsTheCorrectBool()
    {
		
        $this->assertEquals(false,isObject('xyz'));
    }
	
	public function testIsArrayReturnsTheCorrectBool()
    {
		
        $this->assertEquals(true,isArray([1,3,4,7,8]));
    }
}