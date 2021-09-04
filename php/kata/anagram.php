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
    // Home work: complete the function using count_chars bultin function
    $s1 = strtolower(str_replace(' ', '', $s1));
    $s2 = strtolower(str_replace(' ', '', $s1));

    return count_chars($s1, 1) === count_chars($s2, 1);
}


 //var_dump(is_anagram2('Public relations', 'Capture billions'));

