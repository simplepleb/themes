# Theme System For Laravel

Making simple to theme a Laravel application (front-end). 

## Installation
``` composer require simplepleb/themes ```

#### Publish config and working themes using artisan CLI.

~~~
php artisan vendor:publish --provider="SimplePleb\Theme\ThemeServiceProvider"
~~~

#### After Package Update: Publish themes library for updates
``` php artisan vendor:publish --tag=themes ```

## Usage from controller method

~~~php
	// themes included with package hustbee, oreo, more coming
    Theme::uses('hustbee');  // change to the name of your theme
            
    $data['info'] = 'Hello World'; 
    
    return Theme::view('index', $data);

~~~

### Screenshots Of Sample Themes

Oreo

<img src="./public/themes/oreo/screenshot.jpeg" width="400">

Hustbee

<img src="./public/themes/hustbee/screenshot.jpeg" width="400">


### References

- [Based On Teeplus/Laravel-Theme](https://github.com/teepluss/laravel-theme)