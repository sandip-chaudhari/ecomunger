<?php

/**
 * EC2 Instance Factory to create ec2 cloud instances
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.implementations
 * @link
 */

require_once 'interfaces/IInstanceFactory.php';
require_once 'models/EC2Instance.php';

include_once 'utils/EcoMungerLogger.php';


class EC2InstanceFactory implements IInstanceFactory {
	
	/**
	 * Create EC2 cloud instances
	 * 
	 * @param string unique instance identifier
	 * @param EC2InstanceConfig object instance configuration
	 * @return EC2Instance object
	 */
	public function create($id, $instanceConfig) {
		
		$ec2Instance = new EC2Instance($id);
		
		EcoMungerLogger::log('EC2Factory created ec2-instance, id: ' . $ec2Instance->info());
		
		return $ec2Instance;
	}
}
