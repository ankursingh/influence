<?php
/* Link Fixture generated on: 2010-12-04 16:12:40 : 1291460740 */
class LinkFixture extends CakeTestFixture {
	var $name = 'Link';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'link' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'influence_count' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'time' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'link' => 'Lorem ipsum dolor sit amet',
			'influence_count' => 1,
			'time' => '2010-12-04 16:35:40'
		),
	);
}
?>