<?php
namespace Config;

use Symfony\Component\Console\Application;

class Console {
	private $app;

	public function __construct() {
		$this->app = new Application();

		$this->app->add(new \Config\Command\GenerateTemplateCommand());
		$this->app->add(new \Config\Command\GenerateMigrationCommand());
		$this->app->add(new \Config\Command\GenerateModelCommand());
		$this->app->add(new \Config\Command\GenerateHelperCommand());
		$this->app->add(new \Config\Command\GenerateControllerCommand());
		$this->app->add(new \Config\Command\GenerateApiControllerCommand());
		$this->app->add(new \Config\Command\DatabaseMigrationCommand());
		$this->app->add(new \Config\Command\DeleteControllerCommand());
		$this->app->add(new \Config\Command\ServerCommand());
		$this->app->add(new \Config\Command\ConsoleCommand());
		$this->app->add(new \Config\Command\DatabaseRollbackCommand());
		$this->app->add(new \Config\Command\DatabaseSeedCommand());
		// $this->app->add(new \Config\Command\UiCommand());
		$this->app->add(new \Config\Command\AuthCommand());
	}

	public function registerCustom($command) {
		$this->app->add($command);
	}

	public function run() {
		$this->app->run();
	}
}