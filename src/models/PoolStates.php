<?php
/**
 * Pool States class holding properties of various possible pool states
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.models
 * @link
 */
class PoolStates {
	/**
	 * @var integer pool is empty
	 */
	const unloaded = 0;
	
	/**
	 * @var integer pool has pending load requests and is being loaded
	 */
	const load = 1;
	
	/**
	 * @var integer pool is fully loaded
	 */
	const loaded = 2;
	
	/**
	 * @var integer resize pool, pool objects to-be added or removed
	 */
	const resize = 3;
	
	/**
	 * @var integer reload pool, eliminate existing objects and re-load them all again
	 */
	const reload = 4;
}