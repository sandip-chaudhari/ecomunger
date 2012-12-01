<?php

/**
 * Configuration file to config the munger service
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.configs
 * @link
 */

class EcoMungerConfig {
	/**
	 * @var string name of configuration class corresponding to the instance implementation
	 */
	const InstanceConfigClass	= 'EC2InstanceConfig';
	
	/**
	 * @var string path of the config class file relative from root=src folder
	 */
	const InstanceConfigClassPath	= 'configs/EC2InstanceConfig.php';
	
	/**
	 * @var string path of the instance factory class relative from root=src folder
	 */
	const InstanceFactoryClassPath 	= 'implementations/EC2InstanceFactory.php';
	
	/**
	 * @var string name of the instance factory class
	 */
	const InstanceFactoryClass	= 'EC2InstanceFactory';
	
	/**
	 * @var integer number of instances to be created in the instance pool
	 */
	const InstancePoolSize		= 5;
	
	/**
	 * @var string name of the Eco Munger Algorithm class implementation to be used
	 */
	const EcoMungerAlgoClass = 'FifoEcoMungerAlgo';
	
	/**
	 * @var string path of the Eco Munger Algorithm class being used
	 */
	const EcoMungerAlgoClassPath = 'components/FifoEcoMungerAlgo.php';
	
	/**
	 * @var boolean indicates whether to generate trace i.e. debug mode
	 */
	const EnableTrace = true;
	
	/**
	 * @var string default time-zone to be used for log messages
	 * @link http://www.php.net/manual/en/timezones.php
	 */
	const TimeZone = 'America/New_York';
}