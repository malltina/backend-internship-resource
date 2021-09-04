<?php

function is_plaindrome(string $s1, string $s2): bool
{
    return strrev($s1) === $s2;
}

function is_plaindrome2(string $s1, string $s2): bool
{
    if (substr($s1, 0, 1) == substr($s2, (strlen($s2) - 1), 1)) {
        return true;
    } else {
        return false;
    }
}

// var_dump(is_plaindrome('loop', 'pool'));
