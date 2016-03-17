<?php
App::uses('Stockin', 'Model');

/**
 * Stockin Test Case
 *
 */
class StockinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stockin',
		'app.product',
		'app.type',
		'app.orderlist',
		'app.stockout'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Stockin = ClassRegistry::init('Stockin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Stockin);

		parent::tearDown();
	}

}
