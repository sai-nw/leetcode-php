<?php

namespace Leetcode\ReverseInteger;

/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/reverse-integer/
 * Difficulty: Easy
 * Description: Given a 32-bit signed integer, reverse digits of an integer.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/8/2020
 * Time: 5:40 PM
 * Class Solution
 */



class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $signe = 1;
        if($x < 0) {
            $signe = -1;
        }
        $x = strrev((string)$x);
        if(pow(2, 31) >= $x) {
            return intval($x) * $signe;
        }
        else {
            return 0;
        }
    }
}