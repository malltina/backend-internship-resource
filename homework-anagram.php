<?php

function is_anagram(string $s1, string $s2): bool
{
    $s1 = str_split(strtolower(str_replace(' ', '', $s1)));
    $s2 = str_split(strtolower(str_replace(' ', '', $s2)));

    sort($s1);
    sort($s2);

    return $s1 === $s2;
}



// ----------------------------------------------------------------------------------------



function is_anagram2(string $s1, $s2): bool
{
    // Home work: complete the function using count_chars bultin function

    if (count_chars($s1, 1) == count_chars($s2, 1)) {
        return "This '" . $s1 . "', '" . $s2 . "' are Anagram";
   }
   else {
       return "This two strings are not anagram";
   }


}




// ----------------------------------------------------------------------------------------

// Addres Sample Solution => : https://www.w3resource.com/php-exercises/challenges/1/php-challenges-1-exercise-21.php

function is_anagram3(string $s1, $s2): bool
{
    // Home work: complete the function using count_chars bultin function

       if (count_chars($s1, 1) == count_chars($s2, 1))
    {
        return "This two strings are anagram";
    }
    else
    {
        return "This two strings are not anagram";
    }
 
}




var_dump(is_anagram('Public relations', 'Capture billions'));
var_dump(is_anagram2('Public relations', 'Capture billions'));
var_dump(is_anagram3('Public relations', 'Capture billions'));