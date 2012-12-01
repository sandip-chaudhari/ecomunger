<?php
/**
 * Instance Disposer to delete cloud instances
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @link	
 */

/**
 * Instance Disposer Interface to delete cloud instances
 * 
 * @author 		Sandip Chaudahri <sandipchaudhari@gmail.com>
 * @package		ecomunger.interfaces
 */
interface IInstanceDisposer {
	
	/**
	 * Delete cloud instances
	 * 
	 * @param
	 * @return
	 */
	public function delete();
	
}