# Theme System For Laravel

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
	
    Theme::uses('huckbee');  // change to the name of your theme
            
    $data['info'] = 'Hello World'; 
    
    return Theme::view('index', $data);

~~~

### Screenshots Of Sample Themes

Oreo

<img src="./public/themes/oreo/screenshot.jpeg" width="400">

Huckbee

<img src="./public/themes/huckbee/screenshot.jpeg" width="400">
