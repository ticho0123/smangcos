<?php
function nav_item_class($path)
{
    $class = '';

    if(request()->is( $path . '*'))
    {
        $class = ' selected';
    }

    return $class;
}
