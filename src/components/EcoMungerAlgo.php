<?php
/**
 * Instance Ecosystem Munger Algorithm
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @link	
 */

/**
 * Instance Ecosystem Munger Algorithm Abstraction
 * 
 * @author 		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.interfaces
 */
require_once 'models/PoolStates.php';

 abstract class EcoMungerAlgo {

	/**
	 * @var InstancePool pool of instances
	 */ 	
 	protected $_instancePool = null;
 	
 	/**
	 * @var EcoMungerConfig eco munger config class
	 */
	protected $_ecoMungerConfig;
	
	/**
	 * @var instanceConfig instance configuration object
	 */
	protected $_instanceConfig;
	
	/**
	 * @var InstanceFactory instance factory object
	 */
	protected $_instanceFactory;
	
 	/**
	 * constructor
	 * 
	 * @param EcoMungerConfig eco munger config file
	 */
	public function __construct($ecoMungerConfig) {
		$this->_ecoMungerConfig = $ecoMungerConfig;
		
		require_once $ecoMungerConfig::InstanceConfigClassPath;
		$instanceConfigClass = $ecoMungerConfig::InstanceConfigClass; // for some reason have to create variable else new fails
		$this->_instanceConfig = new $instanceConfigClass();
		
		require_once $ecoMungerConfig::InstanceFactoryClassPath;
		$instanceFactoryClass = $ecoMungerConfig::InstanceFactoryClass;
		$this->_instanceFactory = new $instanceFactoryClass();
		$this->_initInstancePool();
		
		//$this->_createInstancePool();
	}
	
	/**
	 * Create Instance
	 * 
	 * @return Instance object
	 */
	protected function _createInstance() {
		
		return $this->_instanceFactory->create($this->getUniqId(), $this->_instanceConfig);
	}
	
	/**
	 * Load Pool of instances if they already exist, if not
	 */
	
 	/**
	 * Create Pool of instances.
	 */
	protected function _createInstancePool() {
		
		$ecoMungerConfig = $this->_ecoMungerConfig;
		$poolSize = $ecoMungerConfig::InstancePoolSize;
		
		for($i=0; $i < $poolSize;  $i++) {
			$this->_instancePool->addInstance($this->_createInstance());
		}
		
		$this->_instancePool->setState(PoolStates::loaded);
	}
	
	/**
	 * Generate a random, unique id
	 * @return string containing 32 hexadecimal-string chracters
	 */
	public function getUniqId() {
		return md5(uniqid(mt_rand(), true));
	}
	
	/**
	 * Algorithm specific pool instantiation
	 */
	abstract protected function _initInstancePool();
	
 	/**
 	 * Method that provides an instance from the pool for munging. Returned instance status 
 	 * should reflect busy or loaded with work. The returned instance is pre-set with status 
 	 * that indicates it is to be munge'd by the client that calls the munge() method.
 	 * 
 	 * @return Instance instance to be munge'd by the client
 	 */
 	abstract public function munge();
 	
 	/**
 	 * End of munging. Removes the instance from the Instance Pool and such that it cannot be munge'd
 	 * in the future
 	 * 
 	 * @return Instance instance removed from the Instance Pool permanently
 	 */
 	abstract public function spit();
 	
 	/**
	 * Renew the pool. A worker from pool (based on munger algo implementation)
	 * is retired or removed from the pool and a new, fresh instance is added.
	 * New instance is created first and only if successful, worker form pool
	 * is retired.
	 */
 	abstract public function renew();
 }