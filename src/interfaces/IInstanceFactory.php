<?php
/**
 * Instance Factory to create cloud instances
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @link	
 */

/**
 * Instance Factory Interface to create cloud instances
 * 
 * @author 		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.interfaces
 */
interface IInstanceFactory {
	
	/**
	 * Create cloud instances
	 * 
	 * @param string unique instance identifier
	 * @param InstanceConfig object instance configuration
	 * @return Instance object
	 */
	public function create($id, $instanceConfig);
	
}