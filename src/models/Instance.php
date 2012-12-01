<?php
/**
 * Instance Base class holding properties of the instance
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.models
 * @link
 */
class Instance {
	
	/**
	 * @var integer id of the instance
	 */
	protected $_id;
	
	/**
	 * @var	string	name of the instance
	 */
	protected $_name;
	
	/**
	 * @var string capacity of the instance
	 */
	protected $_capacity;
	
	/**
	 * @var integer state of the instance
	 */
	protected $_state;
	
	/**
	 * @var integer	load count of the instance
	 */
	protected $_loadCount = 0;
	
	/**
	 * @var integer timestamp of creation
	 */
	protected $_creationTime;
	
	/**
	 * construct the instance object
	 * 
	 * @param string id of the instance
	 */
	public function __construct($id) {
		$this->_id = $id;
		$this->_creationTime = time();
	}
	
	/**
	 * get instance id
	 * 
	 * @return string id of the instance
	 */
	public function getId() {
		return $this->_id;
	}
	
	/**
	 * get instance name
	 * 
	 * @return string name of the instance
	 */
	public function getName() {
		return $this->_name;
	}
	
	/**
	 * get instance state
	 * 
	 * @return InstanceState state of the Instance
	 */
	public function getState() {
		return $this->_state;
	}
	
	/**
	 * get load count
	 * 
	 * @return	integer load count for the instance
	 */
	public function getLoadCount() {
		return $this->_loadCount;
	}
	
	/**
	 * get capacity
	 * 
	 * @return string capacity of the instance
	 */
	public function getCapacity() {
		return $this->_capacity;
	}
	
	/**
	 * set instance name
	 * 
	 * @param string name
	 */
	public function setName($name) {
		$this->_name = $name;
	}
	
	/**
	 * Set state of instance
	 * 
	 * @param integer state of the instance
	 */
	public function setState($state) {
		$this->_state = $state;
	}
	
	/**
	 * Increment the load
	 * 
	 * @param integer increase in load, default 1
	 */
	public function incrementLoad($increase = 1) {
		$this->_loadCount += $increase;
	}
	
	/**
	 * Decrement load
	 * 
	 * @param integer decrease in load, default 1
	 */
	public function decrementLoad($decrease = 1) {
		$this->_loadCount -= $decrease;
	}
	
	/**
	 * set capacity
	 * 
	 * @param string capacity
	 */
	public function setCapacity($capacity) {
		$this->_capacity = $capacity;
	}
	
	/**
	 * get creation timestamp
	 * 
	 * @return integer timestamp of creation
	 */
	public function getCreationTime() {
		return $this->_creationTime;
	}
	
	/**
	 * set creation timestamp
	 * 
	 * @param integer timestamp of creation
	 */
	public function setCreationTime($creationTime) {
		$this->_creationTime = $creationTime;
	}
	
	/**
	 * display information about this instance
	 * 
	 * @return string info string
	 */
	public function info() {
		$infoStr = $this->getId();
		
		return $infoStr;
	}
}