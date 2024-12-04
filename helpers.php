<?php


function view($page, array $data = [])
{
    extract($data);
    require 'views/' . $page . '.php';
}

function redirect($url){
    header("Location: $url");
}