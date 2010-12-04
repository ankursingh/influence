<?php
/* Link Test cases generated on: 2010-12-04 16:12:40 : 1291460740*/
App::import('Model', 'Link');

class LinkTestCase extends CakeTestCase {
	var $fixtures = array('app.link');

	function startTest() {
		$this->Link =& ClassRegistry::init('Link');
	}

	function endTest() {
		unset($this->Link);
		ClassRegistry::flush();
	}

}
?>