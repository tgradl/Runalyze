<?php

namespace Runalyze\Parameter\Application;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2014-09-15 at 20:34:31.
 */
class ActivityRouteBreakTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @var \Runalyze\Parameter\Application\ActivityRouteBreak
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new ActivityRouteBreak;
	}

	public function testNever() {
		$this->assertFalse( $this->object->never() );
		$this->object->set( ActivityRouteBreak::NO_BREAK );
		$this->assertTrue( $this->object->never() );
	}

}
