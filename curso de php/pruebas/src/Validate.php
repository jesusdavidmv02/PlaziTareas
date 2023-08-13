<?php 

namespace App; 

class Validate {

    public static function email($valor){
        return (bool)  filter_var($valor, FILTER_VALIDATE_EMAIL);
    }
}