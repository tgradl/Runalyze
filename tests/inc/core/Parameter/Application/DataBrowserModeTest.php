<?php

namespace Runalyze\Parameter\Application;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2014-09-16 at 22:12:32.
 */
class DataBrowserModeTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @var \Runalyze\Parameter\Application\DataBrowserMode
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new DataBrowserMode;
	}

	public function testMode() {
		$this->assertTrue( $this->object->showWeek() );
		$this->assertFalse( $this->object->showMonth() );

		$this->object->set( DataBrowserMode::MONTH );
		$this->assertFalse( $this->object->showWeek() );
		$this->assertTrue( $this->object->showMonth() );
	}

}
