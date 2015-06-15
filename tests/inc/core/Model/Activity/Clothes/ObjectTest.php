<?php

namespace Runalyze\Model\Activity\Clothes;

/**
 * Generated by hand
 */
class ObjectTest extends \PHPUnit_Framework_TestCase {

	public function testSimpleObject() {
		$Object = new Object(array(1, 2, 3));

		$this->assertEquals('1,2,3', $Object->asString());
	}

	public function testStringConstructor() {
		$Object = new Object('1,2, 3');

		$this->assertEquals(3, $Object->num());
		$this->assertEquals('1,2,3', $Object->asString());
	}

}
