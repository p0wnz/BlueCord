<?php

function create_cookie_hash()
{
    $hash = "";
    for ($i=0; $i < 254; $i++) 
    {
        $option = rand(0,2);
        switch ($option) {
            case 0:
                $hash .= chr( rand(33,46) ) ;
                break;
            case 1:
                $hash .= chr( rand(48,91) ) ;
                break;
            case 2:
                $hash .= chr( rand(93,126) ) ;
                break;
        }
    }
    return $hash;
}
function set_cookie_browser()
{
    $hash = create_cookie_hash();
    setcookie("?losacz", $hash, time()+3600*24,'/');
    
    return $hash;
}
function get_cookie_browser()
{
    return $_COOKIE["?losacz"];
}