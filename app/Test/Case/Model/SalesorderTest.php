<?php
App::uses('Salesorder', 'Model');

/**
 * Salesorder Test Case
 *
 */
class SalesorderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.salesorder',
		'app.invoice',
		'app.stockout'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Salesorder = ClassRegistry::init('Salesorder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Salesorder);

		parent::tearDown();
	}

}
