<?php

namespace Leetcode\Sqrtx;
/**
 * Project: leetcode
 * Problem URL: https://leetcode.com/problems/sqrtx/
 * Difficulty: Easy
 * Description: Compute and return the square root of x, where x is guaranteed to be a non-negative integer.
 * Since the return type is an integer, the decimal digits are truncated and only the integer part of the result is returned.
 * Author: Igor Karpov <igorok.karpov@gmail.com>
 * Date: 1/9/2020
 * Time: 2:51 PM
 * Class Solution
 */

class Solution {
    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $i = 0;
        while($x >= ($i * $i)) {
            $i++;
        }
        return ($i - 1);

    }

}