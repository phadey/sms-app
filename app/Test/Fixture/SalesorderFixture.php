<?php
/**
 * SalesorderFixture
 *
 */
class SalesorderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cust_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cust_address' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cust_phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cust_email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cust_po' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cust_type' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pay_terms' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pay_due' => array('type' => 'date', 'null' => false, 'default' => null),
		'est_ship' => array('type' => 'date', 'null' => false, 'default' => null),
		'subtotal' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'discount' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'shipping' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'total' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'pay_stat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order_submited' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'invoice_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'cust_name' => 'Lorem ipsum dolor sit amet',
			'cust_address' => 'Lorem ipsum dolor sit amet',
			'cust_phone' => 'Lorem ipsum dolor ',
			'cust_email' => 'Lorem ipsum dolor sit amet',
			'cust_po' => 'Lorem ipsum dolor sit amet',
			'cust_type' => 'Lorem ipsum dolor sit amet',
			'pay_terms' => 'Lorem ipsum dolor sit amet',
			'pay_due' => '2016-03-10',
			'est_ship' => '2016-03-10',
			'subtotal' => '',
			'discount' => '',
			'shipping' => '',
			'total' => '',
			'pay_stat' => 'Lorem ipsum dolor sit amet',
			'order_submited' => 1457602773,
			'invoice_id' => 1
		),
	);

}
