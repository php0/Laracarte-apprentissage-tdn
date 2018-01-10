<?php
if(!function_exists('page_title'))
{
    function page_title($title)
    {
        $static_title='Laracarte | list artisan';
        if($title ==='')
        {
            return $static_title;
        }
        return  $title.' | '.$static_title;
       
    }
}
if(!function_exists('set_active_route')){
    function set_active_route($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}
?>