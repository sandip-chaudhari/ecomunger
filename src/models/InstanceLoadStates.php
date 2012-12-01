<?php
/**
 * Instance Load States class holding properties of various possible instance load states
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.models
 * @link
 */
class InstanceLoadStates {
	/**
	 * @var integer idle state - ready to accept work
	 */
	const idle = 0;
	
	/**
	 * @var integer busy state - busy but may still accept work
	 */
	const busy = 1;
	
}