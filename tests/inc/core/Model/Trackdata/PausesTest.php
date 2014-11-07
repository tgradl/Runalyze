<?php

namespace Runalyze\Model\Trackdata;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2014-11-05 at 13:56:36.
 */
class PausesTest extends \PHPUnit_Framework_TestCase {

	public function testSimpleExample() {
		$P1 = new Pause( 60, 10, 120, 100);
		$P2 = new Pause(120, 10, 120, 100);

		$P = new Pauses();
		$P->addPause($P1);
		$P->addPause($P2);

		$this->assertFalse($P->areEmpty());
		$this->assertEquals( 2, $P->num() );
		$this->assertEquals( $P1, $P->at(0) );
		$this->assertEquals( $P2, $P->at(1) );

		$P->clear();

		$this->assertTrue($P->areEmpty());
		$this->assertEquals( 0, $P->num() );
	}

	public function testArrayTransformation() {
		$P1 = new Pauses();
		$P1->addPause(new Pause( 60, 10, 120, 100));
		$P1->addPause(new Pause(120, 10, 120, 100));

		$P2 = new Pauses();
		$P2->fromArray($P1->asArray());

		$this->assertEquals( 2, $P2->num() );
		$this->assertEquals( $P1->asArray(), $P2->asArray() );

		$P3 = new Pauses($P1->asArray());

		$this->assertEquals( 2, $P2->num() );
		$this->assertEquals( $P1->asArray(), $P3->asArray() );
	}

	public function testStringTransformation() {
		$P1 = new Pauses();
		$P1->addPause(new Pause( 60, 10, 120, 100));
		$P1->addPause(new Pause(120, 10, 120, 100));

		$P2 = new Pauses();
		$P2->fromString($P1->asString());

		$this->assertEquals( 2, $P2->num() );
		$this->assertEquals( $P1->asString(), $P2->asString() );

		$P3 = new Pauses($P1->asString());

		$this->assertEquals( 2, $P2->num() );
		$this->assertEquals( $P1->asString(), $P3->asString() );
	}

	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testException() {
		$P = new Pauses();
		$P->at(0);
	}

}
