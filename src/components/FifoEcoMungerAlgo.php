<?php

/**
 * Instance Ecosystem Munger Algorithm implementation as FIFO
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.implementations
 * @link
 */

require_once 'components/EcoMungerAlgo.php';
require_once 'models/QueueInstancePool.php';

class FifoEcoMungerAlgo extends EcoMungerAlgo {

	/**
	 * Algorithm specific pool instantiation
	 */
	protected function _initInstancePool() {
		$this->_instancePool = new QueueInstancePool();
	}
	
	/**
 	 * Method that provides an instance from the pool for munging. Returned instance status 
 	 * should reflect busy or loaded with work. The returned instance is pre-set with status 
 	 * that indicates it is to be munge'd by the client that calls the munge() method.
 	 * 
 	 * @return Instance instance to be munge'd by the client
 	 */
 	public function munge() {
 		return $this->_instancePool->getOldestInstance();
 	}
 	
 	/**
 	 * End of munging. Removes the instance from the Instance Pool and such that it cannot be munge'd
 	 * in the future
 	 * 
 	 * @return Instance instance removed from the Instance Pool permanently
 	 */
 	public function spit() {
 		return $this->_instancePool->removeInstance();
 	}
 	
 	/**
	 * Renew the pool. A worker from pool (based on munger algo implementation)
	 * is retired or removed from the pool and a new, fresh instance is added.
	 * New instance is created first and only if successful, worker from pool
	 * is retired.
	 */
 	public function renew() {
 		$newInstance = $this->_createInstance();
 		
 		$oldInstance = $this->spit();
 		
 		EcoMungerLogger::log('Retiring worker: ' . $oldInstance->info());
 		EcoMungerLogger::log('Adding new worker: ' . $newInstance->info());
 		
 		$this->_instancePool->addInstance($newInstance);
 	}
 	
}