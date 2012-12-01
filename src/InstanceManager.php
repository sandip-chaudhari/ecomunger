<?php
/**
 * Instance Manager class that manages instance life-cycle and instance pool
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger
 * @link
 */
include_once 'utils/EcoMungerLogger.php';

class InstanceManager {
	
	/**
	 * @var EcoMungerAlgo Munger Algorithm object
	 */
	private $_ecoMungerAlgo;
	
	/**
	 * constructor
	 * 
	 * @param EcoMungerConfig eco munger config file
	 */
	public function __construct($ecoMungerConfig) {
		// set path to source root folder i.e. src/
		set_include_path(__DIR__);
		// set logger
		EcoMungerLogger::config($ecoMungerConfig);
		
		require_once 'components/FifoEcoMungerAlgo.php';
		require_once $ecoMungerConfig::EcoMungerAlgoClassPath;
		
		$ecoMungerAlgoClass = $ecoMungerConfig::EcoMungerAlgoClass;
		$this->_ecoMungerAlgo = new $ecoMungerAlgoClass($ecoMungerConfig);
	}
	
	/**
	 * Get the instance as worker, that will be assigned work
	 * 
	 * @return Instance worker instance that can be consumed or assigned work
	 */
	public function getWorker() {
		return $this->_ecoMungerAlgo->munge();
	}
	
	/**
	 * Renew the pool. A worker from pool (based on munger algo implementation)
	 * is retired or removed from the pool and a new, fresh instance is added.
	 * New instance is created first and only if successful, worker from pool
	 * is retired.
	 */
	public function renewPool() {
		$this->_ecoMungerAlgo->renew();
	}
}