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

?>