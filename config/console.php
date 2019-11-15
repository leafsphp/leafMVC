<?php
namespace Config;

use Symfony\Component\Console\Application;

class Console {
	public function __construct() {
		$app = new Application();

		$app->add(new \Config\Command\GenerateTemplateCommand());
		$app->add(new \Config\Command\GenerateMigrationCommand());
		$app->add(new \Config\Command\GenerateModelCommand());
		$app->add(new \Config\Command\GenerateHelperCommand());
		$app->add(new \Config\Command\GenerateControllerCommand());
		$app->add(new \Config\Command\GenerateApiControllerCommand());
		$app->add(new \Config\Command\DatabaseMigrationCommand());
		$app->add(new \Config\Command\DeleteControllerCommand());
		$app->add(new \Config\Command\ServerCommand());
		$app->add(new \Config\Command\ConsoleCommand());
		$app->add(new \Config\Command\DatabaseRollbackCommand());
		$app->add(new \Config\Command\DatabaseSeedCommand());
		// $app->add(new \Config\Command\UiCommand());
		$app->add(new \Config\Command\AuthCommand());

		$app->run();
	}
}