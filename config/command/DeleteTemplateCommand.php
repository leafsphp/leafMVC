<?php

namespace Config\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class DeleteTemplateCommand extends Command {

    protected static $defaultName = "d:template";

    public function __construct() {
        $this->templatePath = dirname(dirname(__DIR__)).\views_path();
        parent::__construct();
    }

    protected function configure() {
        $this
            ->setDescription("Delete a template")
            ->setHelp("Delete a template")
            ->addArgument("template", InputArgument::REQUIRED, "template name");
    }


    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln($this->_deleteTemplate($input, $output));
    }

    public function _deleteTemplate($input, $output) {
        list($dirname, $filename) = $this->dir_and_file($input);

        $output->writeln($dirname.$filename);

        if(file_exists($dirname.$filename)):
            unlink($dirname.$filename);

            $is_empty = !(new \FilesystemIterator($dirname))->valid();

            if ($is_empty === true):
                $path = explode('/', $dirname);
                $base_template = Str::studly(strtolower(end($path))) . ".php";
                $base_path = str_replace(end($path), "", $dirname);

                unlink($base_path . $base_template);
                rmdir($dirname);
            endif;
        else:
            return "Template does not exists";
        endif;

        return "{$filename} deleted successfully";
    }

    public function dir_and_file($input): Array {
        $templatePath = dirname(dirname(__DIR__)).\views_path();

        $path_to_template = ($input->getArgument("template"));
        $path_info = pathinfo($path_to_template);

        $dirname = $path_info["dirname"] == "." ? $templatePath : $templatePath . $path_info["dirname"];
        $filename = $path_info['filename'] . '.vein.php';

        return [$dirname, $filename];
    }
}