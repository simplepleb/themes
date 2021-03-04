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
use Symfony\Component\Console\Input\InputArgument;

class ThemeGeneratorCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'theme:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate theme structure.';

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
     * @return \SimplePleb\Theme\Commands\ThemeGeneratorCommand
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
        if ($this->files->isDirectory($this->getPath(null))){
            return $this->error('Theme "'.$this->getTheme().'" is already exists.');
        }

        $this->makeDirs([
            'assets/css',
            'assets/js',
            'assets/img',
            'layouts',
            'partials/sections',
            'views',
            'widgets',
        ]);

        $this->makeFiles([
            'layout.blade.php'	=> 'layouts/',
            'header.blade.php'	=> 'partials/',
            'footer.blade.php'	=> 'partials/',
            'main.blade.php'	=> 'partials/sections/',
            'index.blade.php'	=> 'views/',
            'style.css'			=> 'assets/css/',
            'script.js'			=> 'assets/js/',
            'theme.json'		=> '',
            'blocks.json'		=> '',
            'pages.json'		=> '',
            'widgets.json'		=> '',
            'gulpfile.js'		=> '',
            'config.php'		=> ''
        ]);

        $this->info('Theme "'.$this->getTheme().'" has been created.');
    }

    /**
     * Make directory.
     *
     * @param  array $directory
     * @return void
     */
    protected function makeDirs($directory)
    {
        foreach ($directory as $path) {
            if (!$this->files->isDirectory($this->getPath($path))){
                $this->files->makeDirectory($this->getPath($path), 0777, true);
            }
        }
    }

    /**
     * Make file.
     *
     * @param  string $file
     * @param  string $to
     * @return void
     */
    protected function makeFiles($files)
    {
        foreach ($files as $file => $to) {
            $template = $this->getTemplate($file);

            $path = $to.$file;

            if (!$this->files->exists($this->getPath($path))){
                $file_path = $this->getPath($path);

                $facade = $this->option('facade');

                if (!is_null($facade)){
                    $template = preg_replace('/Theme(\.|::)/', $facade.'$1', $template);
                }
                if ( $file == 'theme.json' ){
                    $template = str_replace('Default', ucfirst($this->getTheme()), $template);
                    $template = str_replace('default', $this->getTheme(), $template);
                }

                $this->files->put($file_path, $template);

                if(substr($file_path, -10) == 'theme.json'){
                    $this->files->chmod($file_path, 0666);

                }
                if(substr($file_path, -10) == 'pages.json'){
                    $this->files->chmod($file_path, 0666);

                }
                if(substr($file_path, -10) == 'blocks.json'){
                    $this->files->chmod($file_path, 0666);

                }
                if(substr($file_path, -10) == 'widget.json'){
                    $this->files->chmod($file_path, 0666);

                }

            }
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
     * Get default template.
     *
     * @param  string $template
     * @return string
     */
    protected function getTemplate($template)
    {
        $path = realpath(__DIR__.'/../templates/'.$template);

        return $this->files->get($path);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('name', InputArgument::REQUIRED, 'Name of the theme to generate.'),
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
            array('path', null, InputOption::VALUE_OPTIONAL, 'Path to theme directory.', $path),
            array('facade', null, InputOption::VALUE_OPTIONAL, 'Facade name.', null),
        );
    }

}