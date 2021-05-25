<?php
if(!function_exists('getRandom')){ 
    function getRandom($arr)
    {
        shuffle($arr);
        return end($arr);
    }
}

if(!function_exists('randomString')){ 
    function randomString($str)
    {
        return substr(str_shuffle('fkskgfksdgkdfkgkdgkdkgkdgk'),10,10);
    }
}
?>
