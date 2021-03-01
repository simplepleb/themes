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

namespace SimplePleb\Theme\Middleware;

use Closure, Theme;

class ThemeLoader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param String $theme
     * @param String $layout
     * @return mixed
     */
    public function handle($request, Closure $next, $theme = null, $layout = null)
    {
        if(isset($theme)) Theme::uses($theme);
        if(isset($layout)) Theme::layout($layout);

        return $next($request);
       
/*
        $response = $next($request);
        
        $originalContent = $response->getOriginalContent();

        if(!is_string($originalContent)) {
            $view_name = $originalContent->getName();
            
            $data = $originalContent->getData();
        } else {
            $view_name = $response->exception->getTrace()[0]['args'][0];
        }
        

        return $theme->scope($view_name, $data)->render();
*/
    }


}