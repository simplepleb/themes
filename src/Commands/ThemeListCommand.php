<?php

/**
 * Putting this here to help remind you where this came from.
 *
 * I'll get back to improving this and adding more as time permits
 * if you need some help feel free to drop me a line.
 *
 * * Twenty-Years Experience
 * * PHP, JavaScript, Laravel, MySQL, Java, Python and so many more!
 *
 *
 * @author  Simple-Pleb <plebeian.tribune@protonmail.com>
 * @website https://www.simple-pleb.com
 * @source https://github.com/simplepleb/themes
 *
 * @license Free to do as you please
 *
 * @since 1.0
 *
 */

namespace SimplePleb\Theme\Commands;

use Illuminate\Console\Command;
use Illuminate\Config\Repository;
use Illuminate\Filesystem\Filesystem as File;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\Console\Input\InputArgument;
use SimplePleb\Theme\Theme;

class ThemeListCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'theme:list';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Show a list of all themes.';

	/**
	 * Repository config.
	 *
	 * @var Illuminate\Config\Repository
	 */
	protected $config;

	/**
	 * Filesystem
	 *
	 * @var Illuminate\Filesystem\Filesystem
	 */
	protected $files;

	/**
	 * Create a new command instance.
	 *
	 * @param \Illuminate\Config\Repository     $config
	 * @param \Illuminate\Filesystem\Filesystem $files
	 * @return \SimplePleb\Theme\Commands\ThemeListCommand
	 */
	public function __construct(Repository $config, File $files)
	{
		$this->config = $config;

		$this->files = $files;

		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function handle()
	{
        $themes = [];
        $empty = true;

        $path = $this->option('path');

        if ($this->files->exists($path)) {
            $scannedThemes = $this->files->directories($path);
            foreach ($scannedThemes as $key => $theme) {
                $themes[] = array($key+1, basename($theme));
            	$empty = false;
            }
        }
        
		$headers = ['#', 'Theme name'];

		if(!$empty){
			$this->table($headers, $themes);
		} else {
			$this->info("No themes installed");
		}
	}

	/**
	 * Get root writable path.
	 *
	 * @param  string $path
	 * @return string
	 */
	protected function getPath($path)
	{
		$rootPath = $this->option('path');

		return $rootPath.'/'.strtolower($this->getTheme()).'/' . $path;
	}

	/**
	 * Get the theme name.
	 *
	 * @return string
	 */
	protected function getTheme()
	{
		return strtolower($this->argument('name'));
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			//array('name', InputArgument::REQUIRED, 'Name of the theme to generate.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		$path = base_path($this->config->get('theme.themeDir'));

		return array(
			array('path', null, InputOption::VALUE_OPTIONAL, 'Path to theme directory.', $path)
		);
	}

}
