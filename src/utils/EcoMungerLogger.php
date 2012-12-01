<?php
/**
 * Eco-Munger Logger utility class
 * 
 * @license		http://www.gnu.org/licenses/gpl-3.0.html	
 * @copyright	(c) Krossover Intelligence Inc, 2012
 * @author		Sandip Chaudhari <sandipchaudhari@gmail.com>
 * @package		ecomunger.utils
 * @link
 */
class EcoMungerLogger {
	
	/**
	 * @var boolean $_enableTrace indicates if this class will generate trace / logging or not
	 */
	private static $_enableTrace;
	
	/**
	 * @var string $_timeZone of the log
	 */
	private static $_timeZone;
	
	/**
	 * configure this logger class
	 */
	public static function config($ecoMungerConfig) {
			
		self::$_enableTrace = $ecoMungerConfig::EnableTrace;
		self::$_timeZone = $ecoMungerConfig::TimeZone;	
		
		date_default_timezone_set(self::$_timeZone);
	}
	
	/**
	 * generate trace / log based on config EnableTrace value. default do not generate trace
	 * Adds PHP_EOL at end of each log message
	 * 
	 * @param string $msg message string to be logged
	 */
	public static function log($msg=null) {
		if($msg != null && self::$_enableTrace) {
			echo '## trace - ' . date("Y-m-d H:i:s") . ': ' . $msg . PHP_EOL;
		}
	}
	
}