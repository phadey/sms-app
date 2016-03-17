<?php
App::uses('Stockout', 'Model');

/**
 * Stockout Test Case
 *
 */
class StockoutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stockout',
		'app.product',
		'app.type',
		'app.orderlist',
		'app.stockin',
		'app.salesorder',
		'app.invoice'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Stockout = ClassRegistry::init('Stockout');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Stockout);

		parent::tearDown();
	}

}
