<?php namespace App\Validation;

class CustomRules{
            function date_check(string $str, string &$error = null): bool
    {
        if($str <  date('Y-m-d')){
                return false;
        }    
                return true;
    }
    }



