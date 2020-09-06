<?php
$string = 'quangnamhd9x@gmail.com';
    function checkEmail($string){
        $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
        if (preg_match($pattern, $string)){
            echo "Success!";
        } else {
            echo "Not Invaild!";
        }
    }
    checkEmail($string);

