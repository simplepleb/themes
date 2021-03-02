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
	
    Theme::uses('huckbee'); // change to the name of your theme
            
    $data['info'] = 'Hello World'; 
    
    return Theme::view('index', $data);

~~~