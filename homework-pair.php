<?php

function is_pair(string $sequence): bool
{
    // Homework: Complete the function in order to resolve pair problem,
    // see the examples in the bottom of file


    
    $input = ("'(','[','{'");
        
    $reverse = strrev($input);
    if($input == $reverse) {
    return '<br> '.$input.'  is a pair';
    } else {
    return '<br>'.$input.' is not a pair';
    }
    


}
var_dump(is_pair('(')); //true

// var_dump(is_pair('()()')); // true
// var_dump(is_pair('())()')); // false
// var_dump(is_pair(')(')); // false