<?php
namespace Leetcode\RomanToInteger;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/roman-to-integer/
 * Difficulty: Easy
 * Description: Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 5:33 PM
 * Class Solution0
 */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $roman2int = array(
            'I' =>  1,
            'V' =>  5,
            'X' =>  10,
            'L' =>  50,
            'C' =>  100,
            'D' =>  500,
            'M' =>  1000
        );
        $array_s = array_reverse(str_split($s));
        $result = 0;
        $prev = null;
        foreach($array_s as $key => $val_char) {
            if(!is_null($prev)) {
                if($val_char == 'I' && ($prev == 'V' || $prev == 'X')) {
                    $result -= $roman2int[$val_char];
                }
                else if($val_char == 'X' && ($prev == 'L' || $prev == 'C')) {
                    $result -= $roman2int[$val_char];
                }
                else if($val_char == 'C' && ($prev == 'D' || $prev == 'M')) {
                    $result -= $roman2int[$val_char];
                }
                else {
                    $result += $roman2int[$val_char];
                }
            }
            else {
                $result = $roman2int[$val_char];
            }

            $prev = $val_char;
        }
        return $result;
    }
}