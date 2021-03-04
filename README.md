# Theme System For Laravel

Making simple to theme a Laravel application (front-end). 

## Installation
``` composer require simplepleb/themes ```

#### Publish config and working themes using artisan CLI.

~~~
php artisan vendor:publish --provider="SimplePleb\Theme\ThemeServiceProvider"
~~~

## Before Updating Package 
Before you run ``` composer update ``` and if you have edited any of the included themes,
* Duplicate the folder for the edited theme
* Update the theme.json file (theme name and slug) in the new folder.

This is done to avoid the update overwriting your changes with any updates made to the module package.

#### After Package Update: Publish themes library for updates

```
php artisan vendor:publish --tag=themes 
```

## Usage from controller method

~~~php
	// themes included with package hustbee, oreo, more coming
    Theme::uses('hustbee');  // change to the name of your theme
            
    $data['info'] = 'Hello World'; 
    
    return Theme::view('index', $data);

~~~

### Screenshots Of Sample Themes

Oreo

<img src="./publishes/themes/oreo/screenshot.jpeg" width="400">

Digincy

<img src="./publishes/themes/digincy/screenshot.jpeg" width="400">

Hustbee

<img src="./publishes/themes/hustbee/screenshot.jpeg" width="400">



### References

- [Based On Teeplus/Laravel-Theme](https://github.com/teepluss/laravel-theme)