<?php
namespace Config;

/**
 * Leaf API App Config
 */
class App {
	/**
	 * General Leaf API config
	 */
	protected $config = [
		'error.debug' => true
	];

	public function __construct($config = [])
	{
		if (count($config) > 0) $this->config = $config;
		$this->error_debug($this->config['error.debug']);
	}

	/**
	 * Set Debug Mode (Internal)
	 */
	public static function error_debug(bool $debug = true)
	{
		if ($debug == true) {
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
		} else {
			error_reporting(0);
			ini_set('display_errors', 0);
		}
	}

	/**
	 * App Config
	 */
	public static function configure(array $config)
	{
		self::$config = $config;
	}
}