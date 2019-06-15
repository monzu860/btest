<?php
use PHPUnit\Framework\TestCase;
require 'ansthree.php';
class AnsthreeTest extends TestCase
{
    public function testLcaReturnsTheCorrectLca()
    {
        $this->assertEquals(3, lca(6, 7));
		echo "\r\n 6 and 7 passed to lca \r\n";
		echo "Output: 3";
		$this->assertEquals(3, lca(3, 7));
		echo "\r\n 3 and 7 passed to lca\r\n";
		echo "Output: 3";
    }
}