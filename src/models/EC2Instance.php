<?php
/**
 * EC2 Instance class holding properties of the instance
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.models
 * @link
 */

require_once 'models/Instance.php';

class EC2Instance extends Instance {
	
	/**
	 * Get the type i.e. capacity of the ec2 instance
	 * 
	 * @return string Type of the EC2 instance
	 */
	public function getType() {
		return $this->getCapacity();
	}
	
	/**
	 * Set the type of the instance
	 * 
	 * @param string type of instance
	 */
	public function setType($type) {
		$this->setCapacity($type);
	}
}