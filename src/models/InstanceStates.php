<?php
/**
 * Instance States class holding properties of various possible instance states
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.models
 * @link
 */
class InstanceStates {
	/**
	 * @var integer create new instance
	 */
	const create = 0;
	
	/**
	 * @var integer on-creation, instance is alive
	 */
	const alive = 1;
	
	/**
	 * @var integer  delete instance
	 */
	const delete = 2;
	
	/**
	 * @var integer dead instance
	 */
	const dead = 3;
}