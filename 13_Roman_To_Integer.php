<?php

// https://leetcode.com/problems/roman-to-integer/

class Solution {
    const SYMBOL_VALUE = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $chars = str_split($s);
        $length = count($chars);
        $int = 0;
        
        for($i = 0; $i < $length; $i++) {
            $next = $i + 1;
            $curValue = self::SYMBOL_VALUE[$chars[$i]];
            if ($next < $length && $curValue < self::SYMBOL_VALUE[$chars[$next]]) {
                $int -= $curValue;
            } else {
                $int += $curValue;
            }
        }

        return $int;
    }
}
