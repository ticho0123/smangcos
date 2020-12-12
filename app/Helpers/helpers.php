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

function approve_status($status){
    if ($status == 'wait'){
        return 'btn-warning';
    }elseif ($status == 'accept'){
        return 'btn-success';
    }else{
        return 'btn-danger';
    }

}