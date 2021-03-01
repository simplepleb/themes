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

namespace SimplePleb\Theme;

use Illuminate\Filesystem\Filesystem;

class Manifest
{
     /**
     * Path of all themes.
     *
     * @var array
     */
    protected $themePath;
  
    /**
     * Filesystem.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new theme instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem $files
     * @return \SimplePleb\Theme\Manifest
     */
	public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }


	/**
	 * Sets the specified themes path.
	 *
	 * @param string $themePath
	 * @return void
	 */
    public function setThemePath($themePath){
    	$this->themePath = $themePath;
    }

	/**
	 * Get path of theme JSON file.
	 *
	 * @return string
	 */
	public function getJsonPath()
	{
		return $this->themePath.'/theme.json';
	}

	/**
	 * Get theme JSON content as an array.
	 *
	 * @return array|mixed
	 */
	public function getJsonContents()
	{
		$default = [];

		$path = $this->getJsonPath();

		if ($this->files->exists($path)) {
			$contents = $this->files->get($path);

			return json_decode($contents, true);
		} else {
			throw new UnknownFileException("The theme must have a valid theme.json manifest file.");
		}
	}

	/**
	 * Set theme manifest JSON content property value.
	 *
	 * @param  array  $content
	 * @return integer
	 */
	protected function setJsonContents(array $content)
	{
		$content = json_encode($content, JSON_PRETTY_PRINT);


		return $this->files->put($this->getJsonPath(), $content);
	}

	/**
	 * Get a theme manifest key value.
	 *
	 * @param  string      $key
	 * @param  null|string $default
	 * @return mixed
	 */
	public function getProperty($key, $default = null)
	{
		return array_get($this->getJsonContents(), $key, $default);
	}

	/**
	 * Set a theme manifest key value.
	 *
	 * @param  string $key
	 * @param  mixed  $value
	 * @return bool
	 */
	public function setProperty($key, $value)
	{

		$content = $this->getJsonContents();

		if (count($content)) {
			if (isset($content[$key])) {
				unset($content[$key]);
			}

			$content[$key] = $value;

			$this->setJsonContents($content);

			return true;
		}

		return false;
	}


}