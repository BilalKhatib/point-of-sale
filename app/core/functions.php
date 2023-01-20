<?php

function show($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function views_path($view)
{
    if(file_exists("../app/views/$view.view.php"))
    {
        require "../app/views/$view.view.php";
    }else{
        echo "view $view not found";
    }
}