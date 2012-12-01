<?php
/**
 * Instance Pool implemented as FIFO Queue
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.models
 * @link
 */

require_once 'models/InstancePool.php';

class QueueInstancePool extends InstancePool {
	
	/**
	 * Remove oldest or top or front instance of the pool
	 * 
	 * @return Instance $instance
	 */
	public function removeInstance() {
		return array_shift($this->_instances);
	}
	
	/**
	 * Get the oldest instance. Does not affect the instance pool, simply returns the reference to the instance object
	 * 
	 * @return Instance returns the oldest instance if found else null
	 */
	public function getOldestInstance() {
		$instance = null;
		
		if(count($this->_instances) > 1) {
			$instance = $this->_instances[0];
			$this->_instances[0]->info();
		}
			
		return $instance;
	}
}