<?php
App::uses('Orderlist', 'Model');

/**
 * Orderlist Test Case
 *
 */
class OrderlistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.orderlist',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Orderlist = ClassRegistry::init('Orderlist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Orderlist);

		parent::tearDown();
	}

}
