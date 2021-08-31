<?php

function is_anagram(string $s1, string $s2): bool
{
    $s1 = str_split(strtolower(str_replace(' ', '', $s1)));
    $s2 = str_split(strtolower(str_replace(' ', '', $s2)));

    sort($s1);
    sort($s2);

    return $s1 === $s2;
}


function is_anagram2(string $s1, $s2): bool
{
    if (count_chars($s1, 1) == count_chars($s2, 1))
    {
        return "This two strings are anagram";
    }
    else
    {
        return "This two strings are not anagram";
    }
    
}


// var_dump(is_anagram('Public relations', 'Capture billions'));

