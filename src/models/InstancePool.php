<?php
/**
 * Instance Pool class holding array of instances. Behaves as Stack for IO of instances
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.models
 * @link
 */
require_once 'models/PoolStates.php';

class InstancePool {
	
	/**
	 * @var array Array of instances 
	 */
	protected $_instances = array();
	
	/**
	 * @var integer state of the pool, default unloaded
	 */
	protected $_state = PoolStates::unloaded;
	
	/**
	 * get instances array
	 * 
	 * @return array instances array
	 */
	public function getInstances() {
		return $this->_instances;
	}
	
	/**
	 * Add instance to the bottom or end of the instances array
	 * 
	 * @param Instance object
	 */
	public function addInstance($instance) {
		$this->_instances[] = $instance;
	}
	
	/**
	 * Remove the last added or most recent element
	 * 
	 * @return Instance object
	 */
	public function removeInstance() {
		return array_pop($this->_instances);
	}
	
	/**
	 * Get the state of the pool
	 * 
	 * @return integer state of the pool
	 */
	public function getState() {
		return $this->_state;
	}
	
	/**
	 * Set state of the pool
	 * 
	 * @param integer state of the pool
	 */
	public function setState($state) {
		$this->_state = $state;
	}
}