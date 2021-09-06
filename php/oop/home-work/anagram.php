<?php
function is_anagram($s1,$s2) : bool
{
    return count_chars($s1, 1) == count_chars($s2, 1);
}

var_dump(is_anagram('aram', 'mara'));