# Theme System For Laravel

Making simple to theme a Laravel application (front-end). 

[![xs:code](https://img.shields.io/static/v1?logo=data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAiIGhlaWdodD0iNDUiIHZpZXdCb3g9IjAgMCAzMCA0NSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIwLjgzMjEgMzcuNDg4OVYyOS40NzJDMjAuODMyMSAyNi43NjQ1IDE5LjI5NjggMjQuNjY5MiAxNi44NTMxIDI0Ljk1NDJWMjAuMTgzMUMxOS4yOTY4IDIwLjQ2MjggMjAuODMyMSAxOC4zNTcgMjAuODMyMSAxNS42NDQyVjcuNjI3MjhDMjAuODMyMSAwLjI5MTE2NiAyNS4xMjQ2IDAuODEzNjY1IDI5LjM3NDYgMC44MTM2NjVWNC44MDM2NkMyNi45MzA5IDQuNTIzOTQgMjUuMzk1NiA0LjkxNDUgMjUuMzk1NiA3LjYyNzI4VjE1LjY0NDJDMjUuMzk1NiAxOC43NDc2IDI0LjQyODcgMjEuMTE3MyAyMi4zODM0IDIyLjUzMTdDMjQuNDI4NyAyMy45OTg5IDI1LjM5NTYgMjYuMzY4NyAyNS4zOTU2IDI5LjQ3MlYzNy40ODg5QzI1LjM5NTYgNDAuMTk2NCAyNi45MzA5IDQwLjU5MjMgMjkuMzc0NiA0MC4zMTI2VjQ0LjYwMzRDMjUuNjkzMSA0NC41OTgxIDIwLjgzMjEgNDQuODI1MSAyMC44MzIxIDM3LjQ4ODlaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNMC41MDY0MDkgNDQuNTk4MVY0MC4zMDczQzIuOTUwMTYgNDAuNTg3IDQuNDg1NDcgNDAuMTk2NCA0LjQ4NTQ3IDM3LjQ4MzZWMjkuNDcyQzQuNDg1NDcgMjYuMzY4NiA1LjQ1MjM1IDIzLjk5ODkgNy40OTc2NiAyMi41MzE3QzUuNDUyMzUgMjEuMTIyNSA0LjQ4NTQ3IDE4Ljc0NzUgNC40ODU0NyAxNS42NDQyVjcuNjI3MjVDNC40ODU0NyA0LjkxOTc1IDIuOTUwMTYgNC41MjM5MiAwLjUwNjQwOSA0LjgwMzY0VjAuODEzNjM4QzQuNzU2NDEgMC44MTM2MzggOS4wNDg5MSAwLjI4NTg2IDkuMDQ4OTEgNy42MjcyNVYxNS42NDQyQzkuMDQ4OTEgMTguMzUxNyAxMC41ODQyIDIwLjQ2MjggMTMuMDI4IDIwLjE4MzFWMjQuOTU0MkMxMC41ODQyIDI0LjY3NDUgOS4wNDg5MSAyNi43NjQ1IDkuMDQ4OTEgMjkuNDcyVjM3LjQ4ODlDOS4wNDg5MSA0NC44MjUgNC4xOTMyOCA0NC41OTgxIDAuNTA2NDA5IDQ0LjU5ODFaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K&message=xs:code&label=Ping+me+on&color=%23007EFF)](https://xscode.com/profile/simplepleb)

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

### Settings

Each theme can add custom settings to Laravel by adding a file ```custom_fields.json``` to the theme's folder. 
These fields generate a complete setting's form within Laravel.

```json
{
    "fields": [
        { "field_name": "home_title", "field_type": "textbox", "field_options": "", "field_help": "", "field_value": "Welcome Home"},
        { "field_name": "footer_text", "field_type": "textarea", "field_options": "", "field_help": "Placed on the bottom of every page", "field_value": "Thanks for visiting"},
        { "field_name": "home_intro", "field_type": "wysiwyg", "field_options": "", "field_help": "", "field_value": "<h1>Thanks for visiting</h1>"},
        { "field_name": "enable_customizer", "field_type": "checkbox", "field_options": "", "field_help": "Show style customizer", "field_value": "Thanks for visiting"},
        { "field_name": "test_select", "field_type": "select2", "field_options": "White,Yellow,Black", "field_help": "Tests the select", "field_value": "White"}
    ]

}
```

<img src="https://user-images.githubusercontent.com/79759974/116823077-7266b880-ab50-11eb-9cea-1fab1a3fc34d.png" width="400">

### Custom Menus

Themes can make footer or other ```<ul>``` lists easy to modify by adding menus to the file ```custom_fields.json```

```json 
"menus": [
        { "menu_name":  "hustbee_footer_1", "menu_class":  "", "links": [
            { "title": "About Us", "url": "/about_us", "li_class": "", "link_class": "", "parent": 0, "order": 0 },
            { "title": "Press & Media", "url": "/press-media", "li_class": "", "link_class": "", "parent": 0, "order": 0 },
            { "title": "News & Blog", "url": "/blog", "li_class": "", "link_class": "", "parent": 0, "order": 0 } ,
            { "title": "Contact Us", "url": "/contact-us", "li_class": "", "link_class": "", "parent": 0, "order": 0 },
            { "title": "Careers", "url": "/careers", "li_class": "", "link_class": "", "parent": 0, "order": 0 }
        ] },
        { "menu_name":  "hustbee_footer_2", "menu_class":  "nav navbar-nav navbar-nav-centered", "links": [
            { "title": "About Us", "url": "/about_us", "li_class": "nav-item", "link_class": "nav-link", "parent": 0, "order": 0  },
            { "title": "Press & Media", "url": "/press-media", "li_class": "nav-item", "link_class": "nav-link", "parent": 0, "order": 0  }
        ] }
    ]
```

For a complete example take a look at the theme 'hustbee' which has these features enabled. For an 
easier way to manage menus and make them easily edited and managed. Take a look at the [Menu Maker Module](https://github.com/simplepleb/menumaker-module).





### Screenshots Of Sample Themes

Oreo

<img src="./publishes/themes/oreo/screenshot.jpeg" width="400">

Digincy

<img src="./publishes/themes/digincy/screenshot.jpeg" width="400">

Hustbee

<img src="./publishes/themes/hustbee/screenshot.jpeg" width="400">



### References

- [Based On Teeplus/Laravel-Theme](https://github.com/teepluss/laravel-theme)
