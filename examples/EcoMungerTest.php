<?php
/**
 * Eco-Munger Test class
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger
 * @link
 */

require_once '../src/configs/EcoMungerConfig.php';
require_once '../src/InstanceManager.php';

include_once '../src/utils/EcoMungerLogger.php';

class EcoMungerTest {
	private $_manager;

	public function __construct($ecoMungerConfig) {
		$this->_manager = new InstanceManager($ecoMungerConfig);	
		
	}
	
	public function test() {
		$w1 = $this->_manager->getWorker();
		
		//EcoMungerLogger::log('Worker Info: ' . $w1->info());
		
		EcoMungerLogger::log('Renewing worker pool ...');
		
		$this->_manager->renewPool();
	}
}

$testMunger = new EcoMungerTest(new EcoMungerConfig());

$testMunger->test();