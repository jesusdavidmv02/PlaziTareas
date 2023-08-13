<?php

    /**
     * Summary of upper
     * @param mixed $valor
     * @return string
     */


    if (! function_exists('upper')) {   
        function upper($valor){
            return Text\Format::upperText($valor);
        }
    } 

    
    if (! function_exists('lower')) {   
        function lower($valor){
            return Text\Format::lowerText($valor);
        }
    } 


?>